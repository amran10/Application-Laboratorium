<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PeminjamanAlatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pengembalian Alat';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="Pengembalian-alat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php echo $this->render('_searchalat', ['model' => $searchModelalat]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvideralat,
        'filterModel' => $searchModelalat,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pinjam',
            'alat.nama_alat',
            'tgl_pinjam:date',
            'tgl_kembali:date',
            'jumlah_pinjam',
            'user.nama',

        ],
    ]); ?>
</div>
