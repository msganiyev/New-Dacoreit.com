<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cat_ser".
 *
 * @property int $id
 * @property string|null $name_uz
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property int|null $status
 *
 * @property Ser[] $sers
 */
class CatSer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cat_ser';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['name_uz', 'name_ru', 'name_en'], 'string', 'max' => 255],
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
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * Gets query for [[Sers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSers()
    {
        return $this->hasMany(Ser::className(), ['cat_id' => 'id']);
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
}
