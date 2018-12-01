<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Peminjaman;
use backend\models\PeminjamanAlat;
use backend\models\Pengembalian;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Pengembalian */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengembalian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pinjam_id')->dropDownList(ArrayHelper::map(PeminjamanAlat::find()->all(),'id_pinjam','tgl_pinjam'),['prompt'=>' Pilih Tanggal Peminjaman'])->label('Pilih Tanggal Peminjaman') ?>

    <?= $form->field($model, 'tgl_kembali')->hiddenInput()->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        
    </div>

    <?php ActiveForm::end(); ?>

</div>
