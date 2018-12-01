<?php

use yii\helpers\Html;
use yii\grid\GridView;
?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pinjam',
            'alat.nama_alat',
            'tgl_pinjam:date',
            'tgl_kembali:date',
            'jumlah_pinjam',
            'nisn',
            'nama_siswa',
            'jk',
            'alamat',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>