<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\db\Settings */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row">
    <div class="col-md-6">
        <div class="settings-form">

            <?php $form = ActiveForm::begin(); ?>
            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                </div>

                <div class="col-md-6">
                    <?= $form->field($model, 'type')->dropDownList([ 'bool' => 'Bool', 'integer' => 'Integer', 'textbox' => 'Text', 'textarea' => "Textarea"], ['prompt' => '']) ?>
                </div>
            </div>

            <div class="row">
                    <?php if($model->type == "bool") {?>
                        <div class="col-md-6">
                            <?= $form->field($model, 'value')->checkbox() ?>
                        </div>
                    <?php } else if($model->type == 'integer') { ?>
                        <div class="col-md-6">
                            <?= $form->field($model, 'value')->textInput(['type' => 'number']) ?>
                        </div>
                    <?php }else if($model->type == 'textarea') { ?>
                        <div class="col-md-12">
                            <?= $form->field($model, 'value')->textarea(['maxlength' => true, 'rows' =>5]) ?>
                        </div>
                    <?php }else { ?>
                        <div class="col-md-12">
                            <?= $form->field($model, 'value')->textInput(['maxlength' => true]) ?>
                        </div>
                    <?php } ?>
            </div>
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>




