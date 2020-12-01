<?php

namespace frontend\Components;

use yii\base\Widget;
use common\models\Menus;

class MenuWidget extends Widget
{
    private $menus = [];

    public function init(){
        parent::init();
        $this->menus = (new Menus)->menusAsTree;
    }
    
    public function run(){
        
        return $this->render('menu', [
            'menus' => $this->menus
        ]);
    }
}