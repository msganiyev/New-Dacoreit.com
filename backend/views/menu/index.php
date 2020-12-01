<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\MenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Menus');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-index">
    <p class="float-right">
        <?= Html::a(Yii::t('app', '<i class="fa fa-plus"></i> Create Menu'), ['create'], ['class' => 'btn btn-info']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],

            // 'id',
            // [
            //     'attribute' =>'parent_id',
            //     'value' =>function($model){
            //         return $model->parent->name_uz;
            //     }
            // ],
            // [
            //     'attribute' =>'page_id',
            //     'value' =>function($model){
            //         return $model->page->name_uz;
            //     }
            // ],
            // 'page_id',
            'name_uz',
            'name_en',
            //'name_ru',
            'link:url',
            //'c_order',
            //'target_blank',
            // 'status',
            [
                'attribute' =>'status',
                'format' => 'html',
                'value' =>function($model){
                    return ($model->status == 1)?'<span class="font-weight-bold btn btn-success">Active Menu <i class="fa fa-laptop-code"></i></span> ':'<span class="btn btn-danger font-weight-bold">In Active Menu <i class="fas fa-code"></i></span>';
                }
            ],
            //'visible_top',
            //'visible_side',
            //'slug_uz',
            //'slug_en',
            //'slug_ru',

            // ['class' => 'yii\grid\ActionColumn'],
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
