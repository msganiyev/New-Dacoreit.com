<?php

namespace common\models;

use Yii;
use common\components\UploadBehavior;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property int|null $post_cat_id
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 * @property string $description_uz
 * @property string $description_ru
 * @property string $description_en
 * @property string $body_uz
 * @property string $body_ru
 * @property string $body_en
 * @property int|null $status
 * @property int|null $view
 * @property string|null $image
 * @property string|null $created
 *
 * @property PostCat $postCat
 */
class Post extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }
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
                'path' => 'uploads/post',
            ],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['post_cat_id', 'status', 'view','ban'], 'integer'],
            [['title_uz', 'title_ru', 'title_en', 'description_uz', 'description_ru', 'description_en', 'body_uz', 'body_ru', 'body_en'], 'required'],
            [['body_uz', 'body_ru', 'body_en'], 'string'],
            [['created'], 'safe'],
            [['title_uz', 'title_ru', 'title_en', 'description_uz', 'description_ru', 'description_en','link', 'image'], 'string', 'max' => 255],
            [['post_cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => PostCat::className(), 'targetAttribute' => ['post_cat_id' => 'id']],
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
            'post_cat_id' => Yii::t('app', 'Post Cat ID'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_en' => Yii::t('app', 'Title En'),
            'description_uz' => Yii::t('app', 'Description Uz'),
            'description_ru' => Yii::t('app', 'Description Ru'),
            'description_en' => Yii::t('app', 'Description En'),
            'body_uz' => Yii::t('app', 'Body Uz'),
            'body_ru' => Yii::t('app', 'Body Ru'),
            'body_en' => Yii::t('app', 'Body En'),
            'status' => Yii::t('app', 'Status'),
            'view' => Yii::t('app', 'View'),
            'image' => Yii::t('app', 'Image'),
            'created' => Yii::t('app', 'Created'),
        ];
    }

    /**
     * Gets query for [[PostCat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPostCat()
    {
        return $this->hasOne(PostCat::className(), ['id' => 'post_cat_id']);
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
    public function body()
    {
        $language = \Yii::$app->language;
        if($language == 'ru-Ru' || $language == 'ru')
        {
            return $this->body_ru;
        }elseif ($language == 'en-Us'|| $language == 'en') {
            return $this->body_en;
        }elseif ($language =='uz') {
            return $this->body_uz;
        }
    }
    public function getLogo()
    {
        return ($this->image) ? '@fronted_domain/' . $this->image : '@fronted_domain/uploads/no-image.png';
    }

}
