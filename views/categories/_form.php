<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\db\Categories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="categories-form">
    <div class="row">
        <div class="col-md-6">
            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'shortcode')->textInput(['maxlength' => true]) ?>



            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>



</div>
