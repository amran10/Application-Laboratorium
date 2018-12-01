<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PeminjamanAlatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Peminjaman Bahan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peminjaman-alat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pinjam',
            'bahan_id',
            'tgl_pinjam:date',
            'tgl_kembali:date',
            'jumlah_pinjam',
            'user_id',

        ],
    ]); ?>
</div>
