<?php

namespace common\models;

use Yii;
use common\components\UploadBehavior;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string|null $value_uz
 * @property string|null $value_ru
 * @property string|null $value_en
 * @property string|null $image
 */
class About extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about';
    }
    public function behaviors(){
        return [
            [
                'class' => UploadBehavior::className(),
                'imageFile' => 'file',
                'photo' => 'image',
                'path' => 'uploads/about',
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['value_uz', 'value_ru', 'value_en'], 'string'],
            [['title_uz', 'title_ru', 'title_en','key'], 'string' ,'max'=>255],
            [['image'], 'string', 'max' => 255],
            ['file', 'image', 'skipOnEmpty' => $this->image ? false: true, 'extensions' => 'png, jpeg, jpg, gif', 'maxSize' => 1024*1024*10], // 10 mb
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'value_uz' => Yii::t('app', 'Value Uz'),
            'value_ru' => Yii::t('app', 'Value Ru'),
            'value_en' => Yii::t('app', 'Value En'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_en' => Yii::t('app', 'Title En'),
            'key' => Yii::t('app', 'Key'),
            'image' => Yii::t('app', 'Image'),
        ];
    }
    public function getLogo()
    {
        return ($this->image) ? '@fronted_domain/' . $this->image : '@fronted_domain/uploads/no-image.png';
    }
    public function value()
    {
        $language = \Yii::$app->language;
        if($language == 'ru-Ru' || $language == 'ru')
        {
            return $this->value_ru;
        }elseif ($language == 'en-Us'|| $language == 'en') {
            return $this->value_en;
        }elseif ($language =='uz') {
            return $this->value_uz;
        }
    }
    public function title()
    {
        $language = \Yii::$app->language;
        if($language == 'ru-Ru' || $language == 'ru')
        {
            return $this->title_ru;
        }elseif ($language == 'en-Us'|| $language == 'en') {
            return $this->title_en;
        }elseif ($language =='uz') {
            return $this->title_uz;
        }
    }
}
