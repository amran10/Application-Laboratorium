<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Peminjaman */

$this->title = $model->id_pinjam;
$this->params['breadcrumbs'][] = ['label' => 'Peminjamen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peminjaman-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_pinjam',
            'alat_id',
            'tgl_pinjam',
            'tgl_kembali',
            'jumlah_pinjam',
            'nisn',
            'nama_siswa',
            'jk',
            'alamat',
        ],
    ]) ?>

</div>
