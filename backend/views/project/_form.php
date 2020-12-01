<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use common\models\ProCat;
use mihaildev\ckeditor\CKEditor;
use kartik\file\FileInput;
/* @var $this yii\web\View */
/* @var $model common\models\Project */
/* @var $form yii\widgets\ActiveForm */
$cat = ArrayHelper::map(ProCat::find()->all(),'id','name_uz');
$client = ArrayHelper::map(\common\models\Client::find()->all(),'id','fio');
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
<style type="">
    #block{
        display: none;
    }
</style>
<div class="project-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <div class="container-fluid"> 
        <div class="row">   
            <div class="col-md-6">
                <?= $form->field($model, 'pro_cat_id')->dropDownList($cat,['prompt'=>'--select--','class'=>'form-control form-control-sm']) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'client_id')->dropDownList($client,['prompt'=>'--select--','class'=>'form-control form-control-sm']) ?>
            </div>
        </div>
        <div class="row">   
            <div class="col-md-12">
                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-12">
                <?= $form->field($model, 'description')->textarea(['row' =>4]) ?>
            </div>
           
        </div>
        <div class="row">   
            <div class="col-md-12">
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

        </div>
        <div class="row">
            
            <div class="col-md-12">
                
            </div>
            <div class="col-md-12">
                <?= $form->field($model, 'click')->dropDownList([1=>'Rasm',0=>'Video']) ?>
            </div>
        </div>
        <div class="row" id="block">   
            <div class="col-md-12">
               <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?> 
            </div>
        </div>
        <div class="row">   
            <div class="col-md-6">
                <?= $form->field($model, 'status')->dropDownList([1=>'Active',0=>'InActive']) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'place')->dropDownList([1=>'Left',0=>'Right One','-1'=>'Bottom two']) ?>
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
    $("#project-click").change(function(){
        $(this).find("option:selected").each(function(){
            if($(this).attr("value")=="1"){
                $("#block").show();
            }
            else{
                $("#block").hide();
            }
        });
    }).change();
});
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