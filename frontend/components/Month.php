<?php


namespace frontend\components;


class Month extends \yii\base\BaseObject
{
    public function getMonth(){
        $language = \Yii::$app->language;
        if($language == 'uz') {
            $tmp = ['01' => 'Yanvar', '02' => 'Fevral', '03'=> 'Mart', '04'=> 'Aprel', '05'=> 'May', '06'=> 'Iyun', '07'=> 'Iyul', '08'=> 'Avgust', '09'=> 'Sentabr', '10'=> 'Oktabr', '11'=> 'Noyabr', '12'=> 'Dekabr'];
        }elseif ($language == 'cyrl'){
            $tmp = ['01' => 'Январ', '02' => 'Феврал', '03'=> 'Март', '04'=> 'Апрел', '05'=> 'Май', '06'=> 'Июн', '07'=> 'Июл', '08'=> 'Август', '09'=> 'Сентябр', '10'=> 'Октабр', '11'=> 'Ноябр', '12'=> 'Декабр'];
        }elseif ($language == 'ru'){
            $tmp = ['01' => 'Январь', '02' => 'Февраль', '03'=> 'Март', '04'=> 'Апреля', '05'=> 'Май', '06'=> 'Июнь', '07'=> 'Июль', '08'=> 'Август', '09'=> 'Сентябрь', '10'=> 'Октября', '11'=> 'Ноябрь', '12'=> 'Декабрь'];
        }elseif ($language == 'en'){
            $tmp = ['01' => 'January', '02' => 'February', '03'=> 'March', '04'=> 'April', '05'=> 'May', '06'=> 'June', '07'=> 'July', '08'=> 'August', '09'=> 'September', '10'=> 'October', '11'=> 'November', '12'=> 'December'];
        }else{
            $tmp = null;
        }
        return $tmp;
    }
}