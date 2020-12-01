<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use common\models\PostCat;


/* @var $this yii\web\View */
/* @var $model common\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
    $category  = ArrayHelper::map(PostCat::find()->all(),'id','name_uz');
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
<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>
 <div class="container-fluid">
            <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#uz" data-toggle="tab">Uzbek</a></li>
                            <li class="nav-item"><a class="nav-link" href="#ru" data-toggle="tab">Русский</a></li>
                            <li class="nav-item"><a class="nav-link" href="#en" data-toggle="tab">English</a></li>
                            <li class="nav-item"><a class="nav-link" href="#v" data-toggle="tab">Video or Image</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="uz">
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true,'class'=>'form-control form-control-sm']) ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                       <?= $form->field($model, 'description_uz')->textInput(['maxlength' => true,'class'=>'form-control form-control-sm']) ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <?= $form->field($model, 'body_uz')->widget(CKEditor::className(),[
                                            'editorOptions' => [
                                                'preset' => 'standart',
                                                'inline' => false,
                                            ],
                                        ]); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="ru">
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true,'class'=>'form-control form-control-sm']) ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <?= $form->field($model, 'description_ru')->textInput(['maxlength' => true,'class'=>'form-control form-control-sm']) ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <?= $form->field($model, 'body_ru')->widget(CKEditor::className(),[
                                            'editorOptions' => [
                                                'preset' => 'standart',
                                                'inline' => false,
                                            ],
                                        ]); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="en">
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <?= $form->field($model, 'title_en')->textInput(['maxlength' => true,'class'=>'form-control form-control-sm']) ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <?= $form->field($model, 'description_en')->textInput(['maxlength' => true,'class'=>'form-control form-control-sm']) ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <?= $form->field($model, 'body_en')->widget(CKEditor::className(),[
                                            'editorOptions' => [
                                                'preset' => 'standart',
                                                'inline' => false,
                                            ],
                                        ]);?>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="v">
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <?= $form->field($model, 'ban')->dropDownList([1=>'Rasm',0=>'Video']) ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12" id="block">
                                        <?= $form->field($model, 'link')->textInput(['maxlength' => true,'class'=>'form-control']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        <div class="col-md-4">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Категория</h3>
                </div>
                <div class="card-body">
                    <div class="row form-group">
                        <div class="col-md-12"><?= $form->field($model, 'post_cat_id')->dropDownList($category,['class'=>'form-control form-control-sm']) ?></div>
                        <div class="col-md-12">
                            <div class="row">
                                <div id="file" class="col-md-12">
                                <?=Html::img($path, [
                                    'style' => 'width:300px; height:250px; margin-top: 5px; margin-left: -5px; border-radius:5px;',
                                    'class' => '',
                                ])?>
                            </div>
                            </div>
                         <?= $form->field($model, 'file')->fileInput(['maxlength' => true,'class'=>'form-control form-control-sm image_input']) ?></div>
                        <div class="col-md-12"><?= $form->field($model, 'status')->dropDownList([1=>'Active',0=>'InActive'],['class'=>'form-control form-control-sm'])?></div>
                    </div>
                    <div class="form-group">
                        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
                    </div>
                </div>
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
$(document).ready(function(){
    $("#post-ban").change(function(){
        $(this).find("option:selected").each(function(){
            if($(this).attr("value")=="0"){
                $("#block").show();
            }
            else{
                $("#block").hide();
            }
        });
    }).change();
});
JS
);
?>
