<?php

use common\models\LoginForm;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model LoginForm */

$this->title = 'Sign In';

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='form-control-feedback'></span>"
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='form-control-feedback'></span>"
];
?>

<div class="login-box">
    <div class="login-logo">
        <a href="#"><img class="logo" style=" " src="images/logo-black.png"></a>
    </div>

    <div class="login-wrap">
        <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>

        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Si<span style="color: #EF4836">g</span>n In</label>
            <input id="tab-2" type="hidden" name="tab" class="sign-up"><label for="tab-2" class="tab" style="display: none">Sign Up</label>
            <div class="login-form">
                <div class="sign-in-htm">
                    <div class="group">
                        <?= $form
                            ->field($model, 'username', $fieldOptions1)
                            ->label(false)
                            ->textInput(['placeholder' => $model->getAttributeLabel('username'),'class' => 'input']) ?>
                    </div>
                    <div class="group">
                        <?= $form
                            ->field($model, 'password', $fieldOptions2)
                            ->label(false)
                            ->passwordInput(['placeholder' => $model->getAttributeLabel('password'),'class' => 'input']) ?>
                    </div>
                    <div class="group">
                        <input id="check" type="checkbox" class="check" checked>
                        <label for="check"><span class="icon"></span> Keep me Signed in</label>
                        <?= $form->field($model, 'rememberMe')->checkbox(['class' => 'check','id' => 'check','checked'])->label(false) ?>
                    </div>
                    <div class="group">
                        <?= Html::submitButton('Si<span style="color: #EF4836">g</span>n In', ['class' => ' button', 'name' => 'login-button']) ?>
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <a href="#forgot">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div><!-- /.login-box -->
