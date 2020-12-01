<?php

namespace common\models;

use Yii;
use common\components\UploadBehavior;

/**
 * This is the model class for table "setting".
 *
 * @property int $id
 * @property string|null $key
 * @property string|null $title_uz
 * @property string|null $title_ru
 * @property string|null $title_en
 * @property string|null $value_uz
 * @property string|null $value_ru
 * @property string|null $value_en
 * @property string|null $image
 */
class Setting extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'setting';
    }
    public function behaviors(){
        return [
            [
                'class' => UploadBehavior::className(),
                'imageFile' => 'file',
                'photo' => 'image',
                'path' => 'uploads/pages',
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
            [['key', 'title_uz', 'title_ru', 'title_en', 'image'], 'string', 'max' => 255],
            [['key'],'required'],
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
            'key' => Yii::t('app', 'Key'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_en' => Yii::t('app', 'Title En'),
            'value_uz' => Yii::t('app', 'Value Uz'),
            'value_ru' => Yii::t('app', 'Value Ru'),
            'value_en' => Yii::t('app', 'Value En'),
            'image' => Yii::t('app', 'Image'),
        ];
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
}
