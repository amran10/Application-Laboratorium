<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\BahanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bahan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_bahan') ?>

    <?= $form->field($model, 'lab_id') ?>

    <?= $form->field($model, 'nama_bahan') ?>

    <?= $form->field($model, 'keterangan_bahan') ?>

    <?= $form->field($model, 'jumlah_bahan') ?>

    <?php // echo $form->field($model, 'stok_bahan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
