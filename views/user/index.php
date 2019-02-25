<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\db\search\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add Users', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
            'username',
            'email:email',
//            'password',
            'elite_points',
            //'remember_token',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn' , 'template' => '{update} {view}'],
        ],
        'layout'=> "{items}\n{summary}\n{pager}",
        'tableOptions' => [
            'class'=>'table table-striped table-bordered table-responsive'
        ],
    ]); ?>
</div>
