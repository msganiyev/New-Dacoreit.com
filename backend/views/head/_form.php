<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use wbraganca\dynamicform\DynamicFormWidget;

/* @var $this yii\web\View */
/* @var $model common\models\Head */
/* @var $form yii\widgets\ActiveForm */
    $js = '
        jQuery(".dynamicform_wrapper").on("afterInsert", function(e, item) {
        jQuery(".dynamicform_wrapper .panel-title-Application").each(function(index) {
        jQuery(this).html("Application: " + (index + 1))
        });
        });
        
        jQuery(".dynamicform_wrapper").on("afterDelete", function(e) {
        jQuery(".dynamicform_wrapper .panel-title-Application").each(function(index) {
        jQuery(this).html("Application: " + (index + 1))
        });
        });
    ';

    $this->registerJs($js);
?>

<div class="head-form">

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"><?= $form->field($modelHead, 'title_uz')->textInput(['maxlength' => true]) ?></div>
            <div class="col-md-4"><?= $form->field($modelHead, 'title_ru')->textInput(['maxlength' => true]) ?></div>
            <div class="col-md-4"><?= $form->field($modelHead, 'title_en')->textInput(['maxlength' => true]) ?></div>
        </div>
        <div class="row">
            <div class="col-md-4"><?= $form->field($modelHead, 'description_uz')->textarea(['rows' => 3]) ?></div>
            <div class="col-md-4"><?= $form->field($modelHead, 'description_ru')->textarea(['rows' => 3]) ?></div>
            <div class="col-md-4"><?= $form->field($modelHead, 'description_en')->textarea(['rows' => 3]) ?></div>
        </div>
        <div class="row">
            <div class="col-md-12"><?= $form->field($modelHead, 'file')->fileInput(['maxlength' => true]) ?></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div>
                    <?php DynamicFormWidget::begin([
                        'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                        'widgetBody' => '.container-items', // required: css class selector
                        'widgetItem' => '.item', // required: css class
                        'limit' => 12, // the maximum times, an element can be cloned (default 999)
                        'min' => 1, // 0 or 1 (default 1)
                        'insertButton' => '.add-item', // css class
                        'deleteButton' => '.remove-item', // css class
                        'model' => $modelsService[0],
                        'formId' => 'dynamic-form',
                        'formFields' => [
                            'title_uz',
                            'title_ru',
                            'title_en',
                            'description_uz',
                            'description_ru',
                            'description_en',
                            'icon',
                            'status',
                        ],
                    ]); ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
<!--                            <i class="fa fa-envelope"></i>Services Add-->
                            <button type="button" class="float-right add-item btn btn-success btn-xs"><i class="fa fa-plus"></i> Add </button>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-body container-items"><!-- widgetContainer -->
                            <?php foreach ($modelsService as $index => $modelService): ?>
                                <div class="item panel panel-default"><!-- widgetBody -->
                                    <div class="panel-heading">
                                        <span class="panel-title-Application">Service: <?= ($index + 1) ?></span>
                                        <button type="button" class="pull-right remove-item btn btn-danger btn-xs"><i class="fa fa-minus"></i></button>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="panel-body">
                                        <?php
                                        // necessary for update action.
                                        if (!$modelService->isNewRecord) {
                                            echo Html::activeHiddenInput($modelService, "[{$index}]id");
                                        }
                                        ?>


                                        <div class="row">
                                            <div class="col-sm-4">
                                                <?= $form->field($modelService, "[{$index}]title_uz")->textInput(['maxlength' => true,'class' => 'form-control form-control-sm ']) ?>
                                            </div>
                                            <div class="col-sm-4">
                                                <?= $form->field($modelService, "[{$index}]title_ru")->textInput(['maxlength' => true,'class' => 'form-control form-control-sm ']) ?>
                                            </div>
                                            <div class="col-sm-4">
                                                <?= $form->field($modelService, "[{$index}]title_en")->textInput(['maxlength' => true,'class' => 'form-control form-control-sm ']) ?>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-sm-4">
                                                <?= $form->field($modelService, "[{$index}]description_uz")->textarea(['class' => 'form-control']) ?>
                                            </div>
                                            <div class="col-sm-4">
                                                <?= $form->field($modelService, "[{$index}]description_ru")->textarea(['maxlength' => true,'class' => 'form-control']) ?>
                                            </div>
                                            <div class="col-sm-4">
                                                <?= $form->field($modelService, "[{$index}]description_en")->textarea(['maxlength' => true,'class' => 'form-control']) ?>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-sm-6">
                                                <?= $form->field($modelService, "[{$index}]icon")->textInput(['class' => 'form-control form-control-sm']) ?>
                                            </div>
                                            <div class="col-md-6">
                                                <?= $form->field($modelService, "[{$index}]status")->dropDownList(['1'=>"Active",'0'=>"InActive"],['class' => 'form-control form-control-sm select2']) ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php DynamicFormWidget::end(); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-primary w-25']) ?>
                </div>
            </div>
        </div>
    </div>


    <?php ActiveForm::end(); ?>

</div>
