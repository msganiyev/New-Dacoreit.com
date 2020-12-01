<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CatSer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cat-ser-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-md-4"><?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?></div>
    		<div class="col-md-4"><?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?></div>
    		<div class="col-md-4"><?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?></div>
    	</div>
    	<div class="row">
    		<div class="col-md-12">
    			<?= $form->field($model, 'status')->dropDownList([1=>'Active',0=>'InActive']) ?>
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
