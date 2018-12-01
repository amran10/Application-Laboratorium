<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Alat;
use backend\models\Bahan;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\StokAlat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stok-alat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'alat_id')->dropDownList(ArrayHelper::map(Alat::find()->all(),'id_alat','nama_alat'),['prompt'=>' Pilih Alat'])->label('Alat') ?>

    <?= $form->field($model, 'jumlah')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
