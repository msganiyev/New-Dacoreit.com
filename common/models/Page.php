<?php

namespace common\models;

use Yii;
use common\components\UploadBehavior;
/**
 * This is the model class for table "page".
 *
 * @property int $id
 * @property string|null $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string|null $content_uz
 * @property string|null $content_ru
 * @property string|null $content_en
 * @property string|null $image
 * @property string $created
 *
 * @property Menu[] $menus
 */
class Page extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'page';
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors(){
        return [
            /*[
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                'value' => new Expression('NOW()'),
            ],*/
            [
                'class' => UploadBehavior::className(),
                'imageFile' => 'file',
                'photo' => 'image',
                'path' => 'uploads/pages',
            ],
        ];
    }
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'content_uz', 'content_ru', 'content_en'], 'string'],
            [['name_ru', 'name_en'], 'required'],
            [['created'], 'safe'],
            [['image'], 'string', 'max' => 255],
            ['file', 'image', 'skipOnEmpty' => $this->image ? false: false, 'extensions' => 'png, jpeg, jpg, gif', 'maxSize' => 1024*1024*10], // 10 mb
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_uz' => 'Name Uz',
            'name_ru' => 'Name Ru',
            'name_en' => 'Name En',
            'content_uz' => 'Content Uz',
            'content_ru' => 'Content Ru',
            'content_en' => 'Content En',
            'image' => 'Image',
            'created' => 'Created',
        ];
    }

    /**
     * Gets query for [[Menus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMenus()
    {
        return $this->hasMany(Menu::className(), ['page_id' => 'id']);
    }
    public function getLogo()
    {
        return ($this->image) ? '@fronted_domain/' . $this->image : '@fronted_domain/uploads/no-image.png';
    }
    public function name()
    {
        $language = \Yii::$app->language;
        if($language == 'ru-Ru' || $language == 'ru')
        {
            return $this->name_ru;
        }elseif ($language == 'en-Us'|| $language == 'en') {
            return $this->name_en;
        }elseif ($language =='uz') {
            return $this->name_uz;
        }elseif ($language =='ar') {
            return $this->name_ar;
        }
    }
    public function content()
    {
        $language = \Yii::$app->language;
        if($language == 'ru-Ru' || $language == 'ru')
        {
            return $this->content_ru;
        }elseif ($language == 'en-Us'|| $language == 'en') {
            return $this->content_en;
        }elseif ($language =='uz') {
            return $this->content_uz;
        }elseif ($language =='ar') {
            return $this->content_ar;
        }
    }
}
