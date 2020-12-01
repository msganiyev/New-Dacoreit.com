<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Setting */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="setting-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="container-fluid">
        <div class="row">
            <?php  if (Yii::$app->user->identity->role_id ==1) :?>
            <div class="col-md-12">
                <?= $form->field($model, 'key')->textInput(['maxlength' => true]) ?>
            </div>
            <?php endif; ?>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'value_uz')->textarea(['rows' => 6]) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'value_ru')->textarea(['rows' => 6]) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-6">
               <?= $form->field($model, 'value_en')->textarea(['rows' => 6]) ?> 
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?= $form->field($model, 'file')->fileInput(['maxlength' => true]) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
                </div>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
