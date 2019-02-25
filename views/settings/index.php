<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\db\Search\SettingsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Settings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php // echo Html::a('Create Settings', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="row">
        <div class="col-md-6">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

//            'id',
                    'name',
                    [
                        'attribute' => 'value',
                        'value' => function($model){
                            if($model->type == "bool"){
                                return ($model->value) ? "Yes" : "No";
                            }
                            return $model->value;
                        }

                    ],
//            'type',
//            'created_at',
                    //'updated_at',

                    ['class' => 'yii\grid\ActionColumn' , 'template' => '{update} {view}'],
                ],
                'layout'=> "{items}\n{summary}\n{pager}",
                'tableOptions' => [
                    'class'=>'table table-striped table-bordered table-responsive'
                ],
            ]); ?>
        </div>
    </div>


</div>
