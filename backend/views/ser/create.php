<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Ser */

$this->title = Yii::t('app', 'Create Ser');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ser-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
