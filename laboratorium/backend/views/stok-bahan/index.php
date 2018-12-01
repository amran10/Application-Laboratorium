<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\StokBahanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stok Bahan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stok-bahan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Stok Bahan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_stok_bahan',
            'bahan_id',
             [
              'label' => 'Nama Bahan',
              'attribute' => 'bahan.nama_bahan',
            ],
            'jumlah',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
