<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\PeminjamanAlat */

$this->title = $model->id_pinjam;
$this->params['breadcrumbs'][] = ['label' => 'Peminjaman Alats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peminjaman-alat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_pinjam], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_pinjam], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id_pinjam',
            [
              'label' => 'Nama Alat',
              'attribute' => 'alat.nama_alat',
            ],
            //'alat_id',
            'tgl_pinjam:date',
            'tgl_kembali:date',
            'jumlah_pinjam',
            'user_id',
            'user.nama',
        ],
    ]) ?>

</div>
