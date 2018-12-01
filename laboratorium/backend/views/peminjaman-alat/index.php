<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PeminjamanAlatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'History Peminjaman Alat ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peminjaman-alat-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Peminjaman Alat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pinjam',
            'alat_id',
            'tgl_pinjam:date',
            [
              'label' => 'Nama Alat',
              'attribute' => 'alat.nama_alat',
            ],
            'tgl_kembali:date',
            'jumlah_pinjam',
            // 'user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
