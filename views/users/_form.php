<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Users $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alergia_id')->textInput() ?>

    <?= $form->field($model, 'doenca_id')->textInput() ?>

    <?= $form->field($model, 'cirurgia_id')->textInput() ?>

    <?= $form->field($model, 'ist_id')->textInput() ?>

    <?= $form->field($model, 'diabetes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contato_emergencia1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parentesco1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contato_emergencia2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parentesco2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'endereco_id')->textInput() ?>

    <?= $form->field($model, 'tipo_sangue')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'medicamento_id')->textInput() ?>

    <?= $form->field($model, 'historico_familiar')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
