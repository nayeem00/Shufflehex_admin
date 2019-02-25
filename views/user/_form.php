<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\db\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">
    <div class="row">
        <div class="col-md-6">
            <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

                </div>

                <div class="col-md-6">
                    <?= $form->field($model, 'elite_points')->textInput() ?>


                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'password')->passwordInput(['minlength' => 8]) ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'rePass')->passwordInput(['minlength' => 8]) ?>
                </div>
            </div>

            <div class="form-group">
                <?= Html::submitButton('Add', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>


    </div>

</div>
