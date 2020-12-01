<?php

use yii\helpers\Html;
use kartik\date\DatePicker;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Client */
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

?>
<div class="client-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'fio')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'company')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?=$form->field($model, 'date')->widget(DatePicker::classname(), [
                    'options' => ['placeholder' => 'Enter birth date ...'],
                    'pluginOptions' => [
                        'autoclose'=>true,
                        'format' => 'yyyy-mm-dd',
                    ]
                ]);
                ?>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div id="file" class="col-md-12">
                        <?=Html::img($path, [
                            'style' => 'width:300px; height:250px; margin-top: 5px; margin-left: -5px; border-radius:5px;',
                            'class' => '',
                        ])?>
                    </div>
                    <?= $form->field($model, 'file')->fileInput(['maxlength' => true,'class'=>'image_input']) ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <?= $form->field($model, 'file_one')->fileInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?= $form->field($model, 'video')->textInput() ?>
            </div>
            <div class="col-md-12">
                <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?= $form->field($model, 'status')->dropDownList([1=>'Active',0=>'InActive'],['class'=>'form-control']) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
               <div class="form-group float-right">
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