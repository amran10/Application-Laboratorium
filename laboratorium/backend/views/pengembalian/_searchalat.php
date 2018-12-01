<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\PeminjamanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="peminjaman-search">

    <?php $form = ActiveForm::begin([
        'action' => ['Peminjaman'],
        'method' => 'get',
    ]); ?>

    <b><p>Tanggal Peminjaman</p></b>
    <?= DatePicker::widget([
        'model' => $model,
        'attribute' => 'tgl_pinjam',
        'template' => '{addon}{input}',
        'clientOptions' => [
        //'startDate' => date('yyyy-m-d'),
        'autoclose' => true,
        'format' => 'yyyy-m-d'
            ]
    ]);?>

    <?php ActiveForm::end(); ?>

</div>
