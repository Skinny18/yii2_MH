<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\UsersSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="users-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'password') ?>

    <?= $form->field($model, 'alergia_id') ?>

    <?php // echo $form->field($model, 'doenca_id') ?>

    <?php // echo $form->field($model, 'cirurgia_id') ?>

    <?php // echo $form->field($model, 'ist_id') ?>

    <?php // echo $form->field($model, 'diabetes') ?>

    <?php // echo $form->field($model, 'contato_emergencia1') ?>

    <?php // echo $form->field($model, 'parentesco1') ?>

    <?php // echo $form->field($model, 'contato_emergencia2') ?>

    <?php // echo $form->field($model, 'parentesco2') ?>

    <?php // echo $form->field($model, 'endereco_id') ?>

    <?php // echo $form->field($model, 'tipo_sangue') ?>

    <?php // echo $form->field($model, 'medicamento_id') ?>

    <?php // echo $form->field($model, 'historico_familiar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
