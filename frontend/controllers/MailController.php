<?php


namespace frontend\controllers;
use Yii;

class MailController
{
    private $from = 'my@gmail.com';
    private $to = 'to@gmail.com';

    public function actionIndex($type = 'test', $data = null)
    {
        Yii::$app->mailer->compose($type, ['data' => $data])
            ->setFrom($this->from)
            ->setTo($this->to)
            ->setSubject($this->subjects[$type])
            ->send();
    }

}