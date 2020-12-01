<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Logo */

$this->title = Yii::t('app', 'Create Logo');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Logos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="logo-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
