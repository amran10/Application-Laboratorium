<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PeminjamanAlat */

$this->title = 'Update Peminjaman Alat: ' . $model->id_pinjam;
$this->params['breadcrumbs'][] = ['label' => 'Peminjaman Alats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pinjam, 'url' => ['view', 'id' => $model->id_pinjam]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="peminjaman-alat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
