<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Jadwal;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'nik') ?>

                <?= $form->field($model, 'jadwal_id')->dropDownList(ArrayHelper::map(Jadwal::find()->all(),'id_jadwal','jam','hari'),['prompt'=>' Pilih Jadwal'])->label('Jadwal') ?>

                <?= $form->field($model, 'nama') ?>

                <?= $form->field($model, 'alamat') ?>

                <?= $form->field($model, 'telepon') ?>

                <?= $form->field($model, 'jabatan')->dropDownList([
                    'Guru' => 'Guru', 'Siswa' => 'Siswa'])->label('Jabatan') ?>

                <?= $form->field($model, 'jk')->dropDownList([
                    'Laki - Laki' => 'Laki - Laki', 
                    'Perempuan' => 'Perempuan',])->label('Jenis Kelamin') ?>

                <?= $form->field($model, 'role')->hiddenInput(['value'=>0])->label(false) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
