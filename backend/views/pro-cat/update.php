<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ProCat */

$this->title = Yii::t('app', 'Update Pro Cat: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pro Cats'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="pro-cat-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
