<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property int $parent_id
 * @property int|null $page_id
 * @property string $name_uz
 * @property string $name_en
 * @property string $name_ru
 * @property string|null $link
 * @property int $c_order
 * @property int $target_blank
 * @property int $status
 * @property int $visible_top
 * @property int $visible_side
 * @property string|null $slug_uz
 * @property string|null $slug_en
 * @property string|null $slug_ru
 *
 * @property Page $page
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id', 'page_id', 'c_order', 'target_blank', 'status', 'visible_top', 'visible_side'], 'integer'],
            [['name_uz', 'name_en', 'name_ru', 'c_order'], 'required'],
            [['link'], 'string'],
            [['name_uz', 'name_en', 'name_ru', 'slug_uz', 'slug_en', 'slug_ru'], 'string', 'max' => 255],
            [['slug_uz'], 'unique'],
            [['slug_en'], 'unique'],
            [['slug_ru'], 'unique'],
            [['page_id'], 'exist', 'skipOnError' => true, 'targetClass' => Page::className(), 'targetAttribute' => ['page_id' => 'id']],
            [['parent_id'],  'default', 'value' => 0],
            [['position'],  'default', 'value' => 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent ID',
            'page_id' => 'Page ID',
            'name_uz' => 'Name Uz',
            'name_en' => 'Name En',
            'name_ru' => 'Name Ru',
            'link' => 'Link',
            'c_order' => 'C Order',
            'target_blank' => 'Target Blank',
            'status' => 'Status',
            'visible_top' => 'Visible Top',
            'visible_side' => 'Visible Side',
            'slug_uz' => 'Slug Uz',
            'slug_en' => 'Slug En',
            'slug_ru' => 'Slug Ru',
            'position' => 'Place',
        ];
    }

    /**
     * Gets query for [[Page]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPage()
    {
        return $this->hasOne(Page::className(), ['id' => 'page_id']);
    }
    private function toCharacterChange($text)
    {
        $cyr = [
            "o'", "/","?",".",":","%",";","'",",","`",";","<",">"," ","“","”","(",")","!","«","»","\""
        ];
        $lat = [
            "u", "", "", "", "", "", "", "", "", "", "", "","","_","","","","","","","",""
        ];

        return str_replace($cyr, $lat, $text);
    }

    private function toLatin($text)
    {
        $cyr = [
            'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п',
            'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я', 'ў', 'ғ', 'қ','ҳ',
            'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Ў', 'Ғ', 'Қ','Ҳ',
            'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я'
        ];
        $lat = [
            'a', 'b', 'v', 'g', 'd', 'e', 'io', 'zh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p',
            'r', 's', 't', 'u', 'f', 'h', 'ts', 'ch', 'sh', 'sht', 'a', 'i', 'y', 'e', 'yu', 'ya', 'o', 'g', 'q','h',
            'A', 'B', 'V', 'G', 'D', 'E', 'Io', 'Zh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'O', 'G', 'Q','H',
            'R', 'S', 'T', 'U', 'F', 'H', 'Ts', 'Ch', 'Sh', 'Sht', 'A', 'I', 'Y', 'e', 'Yu', 'Ya'
        ];

        return str_replace($cyr, $lat, $text);
    }

    public function getCategoryList()
    {
        $control = Category::find()->all();
        return ArrayHelper::map($control, 'id', 'name_en');
    }
    public static function getListMenu(){
        return self::find()->where(['>=','parent_id',0])->select("name_uz,name_ru, id")
            ->indexBy('id')->column();
    }

    public function name(){
        $language = \Yii::$app->language;
        if($language == 'ru-Ru' || $language == 'ru'){
            return $this->name_ru;
        }elseif($language == 'en-US' || $language == 'en'){
            return $this->name_en;
        }elseif($language == 'uz'){
            return $this->name_uz;
        }else{
            return false;
        }
    }
    public function getParent()
    {
        return $this->hasOne(self::className(), ['id' => 'parent_id']);
    }

    static function getSlug($item_category_id){
        $language = \Yii::$app->language;
        $tmp = [];
        if($language == 'ru-Ru' || $language == 'ru'){
            $tmp = Menu::find()->where(['category_id' => $item_category_id])->one()->slug_ru;
        }elseif($language == 'en-US' || $language == 'en'){
            $tmp = Menu::find()->where(['category_id' => $item_category_id])->one()->slug_en;
        }elseif($language == 'cyrl'){
            $tmp = Menu::find()->where(['category_id' => $item_category_id])->one()->slug_cyrl;
        }
        return $tmp;

    }
}
