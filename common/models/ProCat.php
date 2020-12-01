<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pro_cat".
 *
 * @property int $id
 * @property string|null $name_uz
 * @property string|null $name_ru
 * @property string|null $name_en
 *
 * @property Project[] $projects
 */
class ProCat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pro_cat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
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
        ];
    }

    /**
     * Gets query for [[Projects]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Project::className(), ['pro_cat_id' => 'id']);
    }
    public function name(){
        $language = \Yii::$app->language;
        if($language == 'ru-Ru' || $language == 'ru'){
            return $this->name_ru;
        }elseif($language == 'en-US' || $language == 'en'){
            return $this->name_en;
        }elseif ($language =='uz') {
            return $this->name_uz;
        }else{
            return false;
        }
    }
}
