<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Posts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

    <p class="float-right">
        <?= Html::a(Yii::t('app', 'Create Post'), ['create'], ['class' => 'btn btn-info']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],

            // 'id',
            // 'post_cat_id',
            [
                'attribute'=>'post_cat_id',
                'value' =>function($model){
                    return $model->postCat->name_uz;
                }
            ],
            'title_uz',
            // 'title_ru',
            // 'title_en',
            [
                'class'=>'\kartik\grid\DataColumn',
                'attribute'=>'image',
                'format' => 'html',
                'value' => function($model){

                    return \yii\helpers\Html::img($model->getLogo(), ['width'=>129,'background'=>'black']);
                }
            ],
            [
                'attribute' =>'status',
                'format' => 'html',
                'value' =>function($model){
                    return ($model->status == 1)?'<span class="font-weight-bold btn btn-success">Active Service <i class="fa fa-laptop-code"></i></span> ':'<span class="btn btn-danger font-weight-bold">In Active Service <i class="fas fa-code"></i></span>';
                }
            ],
            //'description_uz',
            //'description_ru',
            //'description_en',
            //'body_uz:ntext',
            //'body_ru:ntext',
            //'body_en:ntext',
            //'status',
            //'view',
            //'image',
            //'created',

            [
                'class' => 'kartik\grid\ActionColumn',
                'template' => '{view} {update} {delete}',
                'noWrap' => true,
                'buttons' => [

                    'view' => function ($url, $model, $key) {
                        return Html::a('<i class="fas fa-eye"></i>', ['view', 'id' => $model->id],
                            [
                                'data-id' => $model->id,
                                // 'class' => 'btn btn-link',
                                'title' => 'Кўриш',
                                'aria-label' => 'Кўриш',

                            ]);
                    },

                    'update' => function ($url, $model, $key) {
                        return Html::a('<i class="fas fa-edit"></i>', ['update', 'id' => $model->id],
                            [
                                'data-id' => $model->id,
                                // 'class' => 'btn btn-link',
                                'title' => 'Таҳрирлаш',
                                'aria-label' => 'Таҳрирлаш',

                            ]);
                    },
                    'delete' => function ($url, $model, $key) {
                        return Html::a('<i class="fas fa-trash"></i>', ['delete', 'id' => $model->id],
                            [
                                'class' => 'label btn-link',
                                'data' => [
                                    'confirm' => 'Вы уверены, что хотите удалить этот элемент ?',
                                    'method' => 'post',
                                ],
                                'title' => 'Ўчириш',
                                'aria-label' => 'Ўчириш',

                            ]);
                    },
                ],
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
