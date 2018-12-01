<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Lab;
use backend\models\stokbahan;

/* @var $this yii\web\View */
/* @var $model backend\models\Bahan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bahan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'lab_id')->dropDownList(ArrayHelper::map(Lab::find()->all(),'id_lab','nama_lab'),['prompt'=>' Pilih Laboratorium'])->label('Laboratorium') ?>

    <?= $form->field($model, 'nama_bahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan_bahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_bahan')->hiddenInput(['value'=>0])->label(false) ?>

    <?= $form->field($model, 'stok_bahan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
