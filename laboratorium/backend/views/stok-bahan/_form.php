<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Alat;
use backend\models\Bahan;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\StokBahan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stok-bahan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bahan_id')->dropDownList(ArrayHelper::map(Bahan::find()->all(),'id_bahan','nama_bahan'),['prompt'=>' Pilih Bahan'])->label('Bahan') ?>

    <?= $form->field($model, 'jumlah')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
