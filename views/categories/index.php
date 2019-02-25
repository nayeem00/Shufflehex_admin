<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\db\Search\CategoriesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categories-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <ul class="nav nav-tabs">
        <li class="active">
            <?= Html::a('Stories', ['categories/index']) ?>
        </li>
        <li>
            <?= Html::a('Projects',['product-categories/index']) ?>
        </li>
        <li>
            <?= Html::a('Products',['project-categories/index']) ?>
        </li>
    </ul>
    <br>
    <p>
        <?= Html::a('Add Story Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'category',
            [
                'attribute' => 'category',
                'label'     => 'Name',
            ],
            'shortcode',

//            'is_deleted',
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
