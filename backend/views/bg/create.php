<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Bg */

$this->title = Yii::t('app', 'Create Bg');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bgs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bg-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
