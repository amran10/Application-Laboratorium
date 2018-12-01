<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Bahan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bahan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'lab_id')->textInput() ?>

    <?= $form->field($model, 'nama_bahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan_bahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_bahan')->textInput() ?>

    <?= $form->field($model, 'stok_bahan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
