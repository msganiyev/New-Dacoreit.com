<?php

namespace common\models;

use Yii;
use common\components\UploadBehavior;

/**
 * This is the model class for table "bg".
 *
 * @property int $id
 * @property string|null $image
 * @property int|null $place
 */
class Bg extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bg';
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
            [['place'], 'integer'],
            [['image'], 'string', 'max' => 255],
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
            'image' => Yii::t('app', 'Image'),
            'place' => Yii::t('app', 'Place'),
        ];
    }
    public function getLogo()
    {
        return ($this->image) ? '@fronted_domain/' . $this->image : '@fronted_domain/uploads/no-image.png';
    }
}
