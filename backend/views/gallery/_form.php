<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use common\models\Project;

/* @var $this yii\web\View */
/* @var $model common\models\Gallery */
/* @var $form yii\widgets\ActiveForm */
$data = ArrayHelper::map(Project::find()->all(),'id','name');
?>

<div class="gallery-form">
	<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
    			<?= $form->field($model, 'project_id')->dropDownList($data,['maxlength' => true]) ?>
			</div>
			<div class="col-md-12">
				<?= $form->field($model, '_img[]', ['options' => ['class' => 'image_input']])->widget(FileInput::classname(), [
			            'options'=>[
			                'multiple'=>true
			            ]]);
			        ?>
			</div>
			<div class="col-md-12 pt-5">
				<div class="form-group">
			       <?= Html::submitButton($model->isNewRecord ? 'Save' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
			    </div>
			</div>
		</div>
	</div>
    <?php ActiveForm::end(); ?>

</div>
