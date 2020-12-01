<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Войти в систему';

$fieldOptions1 = [
    'options' => ['class' => 'form-group input-group-append'],
    'inputTemplate' => ""
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group input-group-append'],
    'inputTemplate' => ""
];
?>

<div class="login-box col-md-5 card_login">
    <div class="login-logo">
        <!-- <a href="#">Аренда</a> -->
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">DacoreIT.com</p>
            <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>
            <?= $form
                ->field($model, 'username', $fieldOptions1)
                ->label(false)
                ->textInput(['placeholder' => $model->getAttributeLabel('username')]) ?>
            <?= $form
                ->field($model, 'password', $fieldOptions2)
                ->label(false)
                ->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>
            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                        <input type="checkbox" id="remember" name="LoginForm[rememberMe]" value="1">
                        <label for="remember">
                            Remember Me
                        </label>
                    </div>
                </div>
                <div class="col-4">
                    <?= Html::submitButton('войти', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
    <!-- /.login-box-body -->
</div><!-- /.login-box -->
