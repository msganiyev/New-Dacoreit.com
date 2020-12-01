<?php

namespace frontend\components;

use yii\base\Widget;

class MenuMobile extends Widget{
    private $menus = [];

    public function init(){
        parent::init();
        $this->menus = (new \common\models\Menu)->menusAsTree;
    }

    public function run(){

        return $this->render('menuMobile', [
            'menus' => $this->menus
        ]);
    }
}