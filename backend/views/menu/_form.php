<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use common\models\Page;
/* @var $this yii\web\View */
/* @var $model common\models\Menu */
/* @var $form yii\widgets\ActiveForm */

$page = ArrayHelper::map(Page::find()->all(),'id','name_uz')
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"><?= $form->field($model, 'name_uz')->textInput(['maxlength' => true]) ?></div>
            <div class="col-md-4"><?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?></div>
            <div class="col-md-4"><?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?></div>
        </div>
        <div class="row">
            <div class="col-md-4"><?= $form->field($model, 'link')->textInput() ?></div>
            <div class="col-md-4"><?= $form->field($model, 'c_order')->textInput(['type'=>'number']) ?></div>
            <div class="col-md-4"><?= $form->field($model, 'position')->dropDownList([1=>'Mune Left',0=>'Menu Right',-1=>'Menu Footer']) ?></div>
            
        </div>
        <div class="row">
            <div class="col-md-6"><?= $form->field($model, 'parent_id')->dropDownlist(\common\models\Menu::getListMenu(), [
                            'prompt' => "Самостоятельная категория",
                            'class'=>'form-control',
                            'options' => [
                                $model->parent_id => ['selected' => true]
                            ]
                        ]);?>
            
        </div>
<!--            <div class="col-md-4">--><?////= $form->field($model, 'page_id')->dropDownlist($page,['class'=>'form-control']) ?><!--</div>-->
            <div class="col-md-6"><?= $form->field($model, 'status')->dropDownList([1=>'Active',0=>'InActive'],['class'=>'form-control']) ?></div>
        </div>
        <div class="row">
            <div class="col-md-4"><?= $form->field($model, 'visible_top')->checkbox() ?></div>    
            <div class="col-md-4"><?= $form->field($model, 'visible_side')->checkbox() ?></div> 
            <div class="col-md-4"><?= $form->field($model, 'target_blank')->checkbox() ?></div>   
        </div>
    </div>

    

    

    <? //= $form->field($model, 'slug_uz')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'slug_en')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'slug_ru')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
