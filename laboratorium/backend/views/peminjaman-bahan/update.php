<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PeminjamanBahan */

$this->title = 'Update Peminjaman Bahan: ' . $model->id_pinjam;
$this->params['breadcrumbs'][] = ['label' => 'Peminjaman Bahan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pinjam, 'url' => ['view', 'id' => $model->id_pinjam]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="peminjaman-bahan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
