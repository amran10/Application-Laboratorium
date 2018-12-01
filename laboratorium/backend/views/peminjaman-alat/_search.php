<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PeminjamanAlatSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="peminjaman-alat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pinjam') ?>

    <?= $form->field($model, 'alat_id') ?>

    <?= $form->field($model, 'tgl_pinjam') ?>

    <?= $form->field($model, 'tgl_kembali') ?>

    <?= $form->field($model, 'jumlah_pinjam') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
