<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\lab;
use backend\models\StokAlat;

/* @var $this yii\web\View */
/* @var $model backend\models\Alat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_alat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_alat')->hiddenInput(['value'=>0])->label(false) ?>

    <?= $form->field($model, 'katagori_alat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stok_alat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lab_id')->dropDownList(ArrayHelper::map(Lab::find()->all(),'id_lab','nama_lab'),['prompt'=>' Pilih Laboratorium'])->label('Laboratorium') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
