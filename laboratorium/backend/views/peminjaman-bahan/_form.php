<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Alat;
use backend\models\Bahan;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\PeminjamanBahan */
/* @var $form yii\widgets\ActiveForm */
?> 

<div class="peminjaman-bahan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bahan_id')->dropDownList(ArrayHelper::map(Bahan::find()->all(),'id_bahan','nama_alat'),['prompt'=>' Pilih Bahan'])->label('Bahan') ?>

    <?= $form->field($model, 'tgl_pinjam')->hiddenInput()->label(false) ?>

    <b><p>Tanggal Pengembalian</p></b>
    <?= DatePicker::widget([
        'model' => $model,
        'attribute' => 'tgl_kembali',
        'template' => '{addon}{input}',
        'clientOptions' => [
        'startDate' => date('yyyy-m-d'),
        'autoclose' => true,
        'format' => 'yyyy-m-d'
            ]
    ]);?></p>

    <?= $form->field($model, 'jumlah_pinjam')->textInput() ?>

    <?= $form->field($model, 'user_id')->hiddenInput()->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
