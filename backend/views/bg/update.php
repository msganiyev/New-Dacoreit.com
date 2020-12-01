<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Bg */

$this->title = Yii::t('app', 'Update Bg: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bgs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="bg-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
