<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MenuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'parent_id') ?>

    <?= $form->field($model, 'page_id') ?>

    <?= $form->field($model, 'name_uz') ?>

    <?= $form->field($model, 'name_en') ?>

    <?php // echo $form->field($model, 'name_ru') ?>

    <?php // echo $form->field($model, 'link') ?>

    <?php // echo $form->field($model, 'c_order') ?>

    <?php // echo $form->field($model, 'target_blank') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'visible_top') ?>

    <?php // echo $form->field($model, 'visible_side') ?>

    <?php // echo $form->field($model, 'slug_uz') ?>

    <?php // echo $form->field($model, 'slug_en') ?>

    <?php // echo $form->field($model, 'slug_ru') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
