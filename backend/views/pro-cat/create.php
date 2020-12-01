<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ProCat */

$this->title = Yii::t('app', 'Create Pro Cat');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pro Cats'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pro-cat-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
