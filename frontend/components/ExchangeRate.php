<?php


namespace frontend\components;


class ExchangeRate extends \yii\base\BaseObject{

    public function getRate(){

        $url = 'http://cbu.uz/ru/arkhiv-kursov-valyut/json/';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response_json, true);
        return $response;

    }

    public function getRateNbu(){

        $url = 'https://nbu.uz/uz/exchange-rates/json/';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response_json, true);
        return $response;

    }

}