<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\lab;
use backend\models\Alat;
use backend\models\Bahan;
use backend\models\Pengembalian;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\PeminjamanAlat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="peminjaman-alat-form">

    <?php $form = ActiveForm::begin(); ?>


 
    <?= $form->field($model, 'alat_id')->dropDownList(ArrayHelper::map(Alat::find()->all(),'id_alat','nama_alat'),['prompt'=>' Pilih Alat'])->label('Alat') ?>

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
