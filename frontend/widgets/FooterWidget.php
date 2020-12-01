<?php

namespace frontend\widgets;

use common\models\Logo;
use common\models\Menu;
use common\models\CatSer;
use common\models\Setting;
use yii\helpers\ArrayHelper;

class FooterWidget extends \yii\base\Widget
{
    public function run()
    {
    	$fot_menu = Menu::find()->where(['status'=>1,'position'=>[1,0]])->all();
    	$ser_cat =CatSer::find()->where(['status'=>1])->limit(6)->all();
    	$tell = Setting::find()->where(['key'=>'tell'])->one();
    	$email = Setting::find()->where(['key'=>'email'])->one();
    	$address = Setting::find()->where(['key'=>'address'])->one();
    	$about = Setting::find()->where(['key'=>'about'])->one();
    	$footer_logo = Logo::find()->one();
        return $this->render("footer",compact('fot_menu','ser_cat','tell','email','address','about','footer_logo'));
    }
}