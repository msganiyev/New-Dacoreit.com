<?php

namespace common\models;

use Yii;
use common\components\UploadBehavior;
/**
 * This is the model class for table "project".
 *
 * @property int $id
 * @property int|null $pro_cat_id
 * @property string|null $name
 * @property string|null $business
 * @property string|null $image
 * @property int|null $click
 * @property string|null $link
 * @property int|null $status
 *
 * @property ProCat $proCat
 */
class Project extends \yii\db\ActiveRecord
{
    public $file;
    public $_img;
    public $imageFiless;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project';
    }
    public function behaviors(){
        return [
            [
                'class' => UploadBehavior::className(),
                'imageFile' => 'file',
                'photo' => 'image',
                'path' => 'uploads/Project',
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pro_cat_id','client_id', 'click', 'status','place'], 'integer'],
            [['name', 'image', 'link'], 'string', 'max' => 255],
            [['business','task','description'], 'string'],
            [['pro_cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProCat::className(), 'targetAttribute' => ['pro_cat_id' => 'id']],
            [['client_id'], 'exist', 'skipOnError' => true, 'targetClass' => Client::className(), 'targetAttribute' => ['client_id' => 'id']],

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
            'pro_cat_id' => Yii::t('app', 'Pro Cat ID'),
            'client_id' => Yii::t('app', 'Clinet ID'),
            'image_id' => Yii::t('app', 'Image ID'),
            'name' => Yii::t('app', 'Name'),
            'business' => Yii::t('app', 'Task1'),
            'task' => Yii::t('app', 'Task2'),
            'image' => Yii::t('app', 'Image'),
            'click' => Yii::t('app', 'Click'),
            'link' => Yii::t('app', 'Link'),
            'status' => Yii::t('app', 'Status'),
            'place' => Yii::t('app', 'Place'),
        ];
    }

    /**
     * Gets query for [[ProCat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProCat()
    {
        return $this->hasOne(ProCat::className(), ['id' => 'pro_cat_id']);
    }
    public function getClient()
    {
        return $this->hasOne(Client::className(), ['id' => 'client_id']);
    }
    public function getLogo()
    {
        return ($this->image) ? '@fronted_domain/' . $this->image : '@fronted_domain/uploads/no-image.png';
    }
}
