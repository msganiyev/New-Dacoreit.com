<?php


namespace frontend\components;

use Yii;

class Weather extends \yii\base\BaseObject{

    public function getWeather(){

        $url = 'https://api.darksky.net/forecast/fb0c57f4f96f59dd3904276e8dd043d7/41.304340,69.234823';

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response_json, true);

        return $response;

    }

}