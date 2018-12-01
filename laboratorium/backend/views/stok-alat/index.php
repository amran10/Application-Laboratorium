<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\StokAlatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stok Alat';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stok-alat-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Stok Alat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_stok_alat',
            'alat_id',
             [
              'label' => 'Nama Alat',
              'attribute' => 'alat.nama_alat',
            ],
            'jumlah',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
