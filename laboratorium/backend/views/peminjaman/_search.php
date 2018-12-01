<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PeminjamanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="peminjaman-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pinjam') ?>

    <?= $form->field($model, 'alat_id') ?>

    <?= $form->field($model, 'bahan_id') ?>

    <?= $form->field($model, 'tgl_pinjam') ?>

    <?= $form->field($model, 'tgl_kembali') ?>

    <?php // echo $form->field($model, 'jumlah_pinjam') ?>

    <?php // echo $form->field($model, 'nisn') ?>

    <?php // echo $form->field($model, 'nama_siswa') ?>

    <?php // echo $form->field($model, 'jk') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
