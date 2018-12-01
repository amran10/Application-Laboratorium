<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Alat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_alat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_alat')->textInput() ?>

    <?= $form->field($model, 'katagori_alat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stok_alat')->textInput() ?>

    <?= $form->field($model, 'lab_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
