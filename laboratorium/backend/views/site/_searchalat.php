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
        'action' => ['peminjamanalat'],
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
    ]);?></p>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Cetak Peminjaman Alat', ['cetakpeminjamanalat', 'tgl_pinjam' => $model->tgl_pinjam], ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
