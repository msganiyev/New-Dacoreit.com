<?php

namespace frontend\widgets;

use common\models\Logo;
use common\models\Menu;
use yii\helpers\ArrayHelper;

class HeaderWidget extends \yii\base\Widget
{
    public function run()
    {
    	$logonavbar = Logo::find()->where(['place' => 1])->orderBy(['id'=>SORT_DESC])->one();
    	$menu_left = Menu::find()->where(['status' => 1,'position'=>'1'])->orderBy(['c_order'=>SORT_ASC])->all();
    	$menu_right = Menu::find()->where(['status' => 1,'position'=>'0'])->orderBy(['c_order'=>SORT_ASC])->all();

        return $this->render("header",[
            'menu_left'=>$menu_left,
            'menu_right'=>$menu_right,
            'logonavbar'=>$logonavbar,
        ]);
    }

}