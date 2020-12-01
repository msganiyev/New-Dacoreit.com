<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Head */

$this->title = Yii::t('app', 'Create Services Pages');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Heads'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="head-create">


    <?= $this->render('_form', [
        'modelHead' => $modelHead,
        'modelsService' => $modelsService,
    ]) ?>

</div>
