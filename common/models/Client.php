<?php

namespace common\models;

use Yii;
use common\components\UploadBehavior;
/**
 * This is the model class for table "client".
 *
 * @property int $id
 * @property string|null $fio
 * @property string|null $company
 * @property string|null $image
 * @property string|null $content
 * @property int|null $status
 */
class Client extends \yii\db\ActiveRecord
{
    public $file;
    public $file_one;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'client';
    }
    public function behaviors(){
        return [
            [
                'class' => UploadBehavior::className(),
                'imageFile' => 'file',
                'photo' => 'image',
                'path' => 'uploads/about',
            ],
            [
                'class' => UploadBehavior::className(),
                'imageFile' => 'file_one',
                'photo' => 'logo',
                'path' => 'uploads/logo',
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['date'], 'safe'],
            [['status'], 'integer'],
            [['fio', 'video','company', 'image','logo'], 'string', 'max' => 255],
            ['file', 'image', 'skipOnEmpty' => $this->image ? false: true, 'extensions' => 'png, jpeg, jpg, gif', 'maxSize' => 1024*1024*10], // 10 mb
            ['file_one', 'image', 'skipOnEmpty' => $this->logo ? false: true, 'extensions' => 'png, jpeg, jpg, gif', 'maxSize' => 1024*1024*10], // 10 mb
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
            'company' => Yii::t('app', 'Company'),
            'image' => Yii::t('app', 'Image'),
            'content' => Yii::t('app', 'Content'),
            'video' => Yii::t('app', 'Video'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
    public function getLogo()
    {
        return ($this->image) ? '@fronted_domain/' . $this->image : '@fronted_domain/uploads/no-image.png';
    }
    public function getLogo1()
    {
        return ($this->image) ? '@fronted_domain/' . $this->logo : '@fronted_domain/uploads/no-image.png';
    }
}
