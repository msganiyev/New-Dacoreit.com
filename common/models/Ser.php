<?php

namespace common\models;

use Yii;
use common\components\UploadBehavior;

/**
 * This is the model class for table "ser".
 *
 * @property int $id
 * @property int|null $cat_id
 * @property string|null $icon
 * @property string|null $image
 * @property string|null $title_uz
 * @property string|null $title_ru
 * @property string|null $title_en
 * @property string|null $description_uz
 * @property string|null $description_ru
 * @property string|null $description_en
 * @property int|null $status
 *
 * @property CatSer $cat
 */
class Ser extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ser';
    }
    public function behaviors(){
        return [
            [
                'class' => UploadBehavior::className(),
                'imageFile' => 'file',
                'photo' => 'image',
                'path' => 'uploads/ser',
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cat_id', 'status','ban'], 'integer'],
            [['description_uz', 'description_ru', 'description_en','icon'], 'string'],
            [['image', 'title_uz', 'title_ru', 'title_en'], 'string', 'max' => 255],
            [['cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => CatSer::className(), 'targetAttribute' => ['cat_id' => 'id']],
            ['file', 'image', 'skipOnEmpty' => $this->image ? false: true, 'extensions' => 'png, svg ,jpeg, jpg, gif', 'maxSize' => 1024*1024*10], // 10 mb
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'cat_id' => Yii::t('app', 'Cat ID'),
            'icon' => Yii::t('app', 'Icon'),
            'image' => Yii::t('app', 'Image'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_en' => Yii::t('app', 'Title En'),
            'description_uz' => Yii::t('app', 'Description Uz'),
            'description_ru' => Yii::t('app', 'Description Ru'),
            'description_en' => Yii::t('app', 'Description En'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * Gets query for [[Cat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCat()
    {
        return $this->hasOne(CatSer::className(), ['id' => 'cat_id']);
    }
    public function getLogo()
    {
        return ($this->image) ? '@fronted_domain/' . $this->image : '@fronted_domain/uploads/no-image.png';
    }
    public function getIcon()
    {
        return ($this->icon) ? '@fronted_domain/' . $this->icon : '@fronted_domain/uploads/no-image.png';
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
    public function description()
    {
        $language = \Yii::$app->language;
        if($language == 'ru-Ru' || $language == 'ru')
        {
            return $this->description_ru;
        }elseif ($language == 'en-Us'|| $language == 'en') {
            return $this->description_en;
        }elseif ($language =='uz') {
            return $this->description_uz;
        }
    }
}
