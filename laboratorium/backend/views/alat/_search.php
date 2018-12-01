<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AlatSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_alat') ?>

    <?= $form->field($model, 'nama_alat') ?>

    <?= $form->field($model, 'jumlah_alat') ?>

    <?= $form->field($model, 'katagori_alat') ?>

    <?= $form->field($model, 'stok_alat') ?>

    <?php // echo $form->field($model, 'lab_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
