<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "gallery".
 *
 * @property int $id
 * @property string|null $img
 * @property int|null $project_id
 *
 * @property Project[] $projects
 */
class Gallery extends \yii\db\ActiveRecord
{
    public $_img;
    public $imageFiles;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gallery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_id'], 'integer'],
            [['_img'], 'file', 'extensions' => 'png, jpeg, jpg', 'maxFiles' => 4],
            [['img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'img' => Yii::t('app', 'Img'),
            'project_id' => Yii::t('app', 'Project ID'),
        ];
    }

    /**
     * Gets query for [[Projects]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(Project::className(), ['id' => 'project_id']);
    }
    public function getLogo()
    {
        return ($this->img) ? '@fronted_domain/' . $this->img : '@fronted_domain/uploads/no-image.png';
    }
}
