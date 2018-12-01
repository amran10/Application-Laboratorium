<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\PeminjamanAlat;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\PengembalianGuru */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengembalian-guru-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pinjam_id')->dropDownList(ArrayHelper::map(PeminjamanAlat::find()->all(),' ','tgl_pinjam'),['prompt'=>' Pilih Peminjaman'])->label('Peminjaman') ?>

    <?= $form->field($model, 'tgl_kembali')->hiddenInput()->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
