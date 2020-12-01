<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Team */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
	if ($model->image == '' /*!file_exists('@fronted_domain/' . $model->image)*/) {
	    $path = '@fronted_domain/uploads/image404.png';
	} else {
	    $path = '@fronted_domain/' . $model->image;
	}
	if ($model->file != '') {
	    $path1 = Yii::getAlias('@fronted_domain'). '/' . $model->file;
	}else{
	    $path1 = '';
	}
	$data =\yii\helpers\ArrayHelper::map(\common\models\Job::find()->all(),'id','name_en')

?>

<div class="team-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-md-6"><?= $form->field($model, 'fio')->textInput(['maxlength' => true]) ?></div>
    		<div class="col-md-6"><?= $form->field($model, 'job_id')->dropDownList($data) ?></div>
    	</div>
    	<div class="row">
    		<div class="col-md-12">
    			<div class="row">
                    <div id="file" class="col-md-12">
                    <?=Html::img($path, [
                        'style' => 'width:300px; height:250px; margin: 5px 0; margin-left: -5px; border-radius:5px;',
                        'class' => '',
                        ])?>
                    </div>
                    <?= $form->field($model, 'file')->fileInput(['maxlength' => true,'class'=>'image_input form-control']) ?>
                </div>
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-md-3">
    			<?= $form->field($model, 'linkedin')->textInput() ?>
    		</div>
    		<div class="col-md-3">
    			<?= $form->field($model, 'twitter')->textInput() ?>
    		</div>
    		<div class="col-md-3">
    			<?= $form->field($model, 'instagram')->textInput() ?>
    		</div>
    		<div class="col-md-3">
    			<?= $form->field($model, 'facebook')->textInput() ?>
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-md-12">
    			<?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>
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
<?php
$this->registerJs(<<<JS
    
$(document).ready(function(){
    var fileCollection = new Array();

    $(document).on('change', '.image_input', function(e){
        var files = e.target.files;
        $.each(files, function(i, file){
            fileCollection.push(file);
            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function(e){
                var template = '<img style="width:300px; height:250px;margin-top:20px; border-radius:5px;" src="'+e.target.result+'" class=""> ';
                $('#file').html('');
                $('#file').append(template);
            };
        });
    });
});
JS
);
?>