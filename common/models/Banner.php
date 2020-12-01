<?php

namespace common\models;

use Yii;
use common\components\UploadBehavior;

/**
 * This is the model class for table "banner".
 *
 * @property int $id
 * @property string|null $name_uz
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property string|null $image
 * @property int|null $status
 */
class Banner extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'banner';
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
            [['status'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'image'], 'string', 'max' => 255],
            [['value_uz', 'value_ru', 'value_en'], 'string'],
            ['file', 'image', 'skipOnEmpty' => $this->image ? false: false, 'extensions' => 'png, jpeg, jpg, gif', 'maxSize' => 1024*1024*10], // 10 mb
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name_uz' => Yii::t('app', 'Name Uz'),
            'name_ru' => Yii::t('app', 'Name Ru'),
            'name_en' => Yii::t('app', 'Name En'),
            'value_uz' => Yii::t('app', 'Value Uz'),
            'value_ru' => Yii::t('app', 'Value Ru'),
            'value_en' => Yii::t('app', 'Value En'),
            'image' => Yii::t('app', 'Image'),
            'status' => Yii::t('app', 'Status'),
        ];
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
