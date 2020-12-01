<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\About */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <?=$form->field($model,'key')->textInput()?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"><?=$form->field($model,'title_uz')->textInput()?></div>
            <div class="col-md-4"><?=$form->field($model,'title_ru')->textInput()?></div>
            <div class="col-md-4"><?=$form->field($model,'title_en')->textInput()?></div>
        </div>
        <div class="row">
            <div class="col-md-4"><?= $form->field($model, 'value_uz')->textarea(['rows' => 3]) ?></div>
            <div class="col-md-4"><?= $form->field($model, 'value_ru')->textarea(['rows' => 3]) ?></div>
            <div class="col-md-4"><?= $form->field($model, 'value_en')->textarea(['rows' => 3]) ?></div>
        </div>
    </div>


    <?= $form->field($model, 'file')->fileInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
