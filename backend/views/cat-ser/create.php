<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CatSer */

$this->title = Yii::t('app', 'Create Cat Ser');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cat Sers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cat-ser-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
