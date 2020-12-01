<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property int $id
 * @property int|null $head_id
 * @property string|null $title_uz
 * @property string|null $title_ru
 * @property string|null $title_en
 * @property string|null $description_uz
 * @property string|null $description_ru
 * @property string|null $description_en
 * @property string|null $icon
 * @property int|null $status
 *
 * @property Head $head
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['head_id', 'status'], 'integer'],
            [['description_uz', 'description_ru', 'description_en'], 'string'],
            [['title_uz', 'title_ru', 'title_en', 'icon'], 'string', 'max' => 255],
            [['head_id'], 'exist', 'skipOnError' => true, 'targetClass' => Head::className(), 'targetAttribute' => ['head_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'head_id' => Yii::t('app', 'Head ID'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_en' => Yii::t('app', 'Title En'),
            'description_uz' => Yii::t('app', 'Description Uz'),
            'description_ru' => Yii::t('app', 'Description Ru'),
            'description_en' => Yii::t('app', 'Description En'),
            'icon' => Yii::t('app', 'Icon'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * Gets query for [[Head]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHead()
    {
        return $this->hasOne(Head::className(), ['id' => 'head_id']);
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
