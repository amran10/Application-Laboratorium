<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use janisto\timepicker\TimePicker;
use yii\helpers\ArrayHelper;
use backend\models\Kelas;

/* @var $this yii\web\View */
/* @var $model backend\models\Jadwal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jadwal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= TimePicker::widget([
     //'language' => 'fi',
    'model' => $model,
    'attribute' => 'jam',
    'mode' => 'time',
    'clientOptions'=>[
        'dateFormat' => 'yy-mm-dd',
        'timeFormat' => 'HH:mm:ss',
        'showSecond' => true,
    ]
	]) ?>

    <?= $form->field($model, 'hari')->dropDownList([
    'Senin' => 'Senin', 
    'Selasa' => 'Selasa', 
    'Rabu' => 'Rabu',
    'Kamis' => 'Kamis',
    'Jumat' => 'Jumat',
    'Sabtu' => 'Sabtu',
    'Minggu' => 'Minggu']) ?>

    <?= $form->field($model, 'kelas_id')->dropDownList(ArrayHelper::map(Kelas::find()->all(),'id_kelas','nama_kelas'),['prompt'=>' Pilih Kelas'])->label('Kelas') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
