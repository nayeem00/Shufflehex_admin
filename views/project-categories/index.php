<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\db\Search\ProjectCategoriesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Project Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-categories-index">

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
        <?= Html::a('Create Project Categories', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'category',
            'created_at',
            'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
