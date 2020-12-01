<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PostCat */

$this->title = Yii::t('app', 'Create Post Cat');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Post Cats'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-cat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
