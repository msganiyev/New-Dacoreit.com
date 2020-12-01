<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\AboutSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Abouts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-index">


    <p class="float-right">
        <?//= Html::a(Yii::t('app', 'Create About'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],

            'key',
            'title_uz:ntext',
            'title_ru:ntext',
            'title_en:ntext',
            [
                'class'=>'\kartik\grid\DataColumn',
                'attribute'=>'image',
                'format' => 'html',
                'value' => function($model){

                    return \yii\helpers\Html::img($model->getLogo(), ['width'=>129,'background'=>'black']);
                }
            ],

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
//                    'delete' => function ($url, $model, $key) {
//                        return Html::a('<i class="fas fa-trash"></i>', ['delete', 'id' => $model->id],
//                            [
//                                'class' => 'label btn-link',
//                                'data' => [
//                                    'confirm' => 'Вы уверены, что хотите удалить этот элемент ?',
//                                    'method' => 'post',
//                                ],
//                                'title' => 'Ўчириш',
//                                'aria-label' => 'Ўчириш',
//
//                            ]);
//                    },
                ],
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
