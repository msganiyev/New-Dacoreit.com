<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\Page */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
if ($model->image == '' /*!file_exists('@fronted_domain/' . $model->image)*/) {
    $path = '@fronted_domain/uploads/post/default-image.jpg';
} else {
    $path = '@fronted_domain/' . $model->image;
}
if ($model->file != '') {
    $path1 = Yii::getAlias('@fronted_domain'). '/' . $model->file;
}else{
    $path1 = '';
}

?>

<div class="page-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="container-fluid">
       <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#uz" data-toggle="tab">Uzbek</a></li>
                        <li class="nav-item"><a class="nav-link" href="#en" data-toggle="tab">English</a></li>
                        <li class="nav-item"><a class="nav-link" href="#ru" data-toggle="tab">Русский</a></li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="active tab-pane" id="uz">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <?= $form->field($model, 'name_uz')->textInput() ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <?= $form->field($model, 'content_uz')->widget(CKEditor::className(),[
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
                                    <?= $form->field($model, 'name_ru')->textInput() ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <?= $form->field($model, 'content_ru')->widget(CKEditor::className(),[
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
                                    <?= $form->field($model, 'name_en')->textInput() ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <?= $form->field($model, 'content_en')->widget(CKEditor::className(),[
                                        'editorOptions' => [
                                            'preset' => 'standart',
                                            'inline' => false,
                                        ],
                                    ]); ?>
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
                    <h3 class="card-title">Pages</h3>
                </div>
                <div class="card-body">
                    <div class="row form-group">
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
                    <div class="form-group">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
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
JS
);
?>