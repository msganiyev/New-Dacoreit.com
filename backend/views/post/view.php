<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Post */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Posts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="post-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'post_cat_id',
            'title_uz',
            'title_ru',
            'title_en',
            'description_uz',
            'description_ru',
            'description_en',
            'body_uz:ntext',
            'body_ru:ntext',
            'body_en:ntext',
            [
                'attribute' =>'status',
                'format' => 'html',
                'value' =>function($model){
                    return ($model->status == 1)?'<span class="font-weight-bold btn btn-success">Active Service <i class="fa fa-laptop-code"></i></span> ':'<span class="btn btn-danger font-weight-bold">In Active Service <i class="fas fa-code"></i></span>';
                }
            ],
            'view',
            'image',
            'created',
        ],
    ]) ?>

</div>
