<?php

namespace common\models;

use Yii;
use common\components\UploadBehavior;

/**
 * This is the model class for table "team".
 *
 * @property int $id
 * @property string|null $fio
 * @property string|null $image
 * @property string|null $job
 * @property string|null $content
 * @property int|null $job_id
 *
 * @property Job $job0
 */
class Team extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'team';
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
            [['content','telegram','instagram','twitter','linkedin','facebook'], 'string'],
            [['job_id'], 'integer'],
            [['fio', 'image', 'job'], 'string', 'max' => 255],
            [['job_id'], 'exist', 'skipOnError' => true, 'targetClass' => Job::className(), 'targetAttribute' => ['job_id' => 'id']],
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
            'fio' => Yii::t('app', 'Fio'),
            'image' => Yii::t('app', 'Image'),
            'job' => Yii::t('app', 'Job'),
            'content' => Yii::t('app', 'Content'),
            'job_id' => Yii::t('app', 'Job ID'),
        ];
    }

    /**
     * Gets query for [[Job0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJob0()
    {
        return $this->hasOne(Job::className(), ['id' => 'job_id']);
    }
    public function getLogo()
    {
        return ($this->image) ? '@fronted_domain/' . $this->image : '@fronted_domain/uploads/no-image.png';
    }
}
