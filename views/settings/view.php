<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\db\Settings */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Settings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <div class="row">
        <div class="col-md-6">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
//                    'id',
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
                    'type'
//                    'created_at',
//                    'updated_at',
                ],
            ]) ?>
        </div>
    </div>



</div>
