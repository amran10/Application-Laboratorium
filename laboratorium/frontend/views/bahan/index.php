<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\BahanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bahans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bahan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_bahan',
            'lab_id',
            'nama_bahan',
            'keterangan_bahan',
            'jumlah_bahan',
            // 'stok_bahan',
        ],
    ]); ?>
</div>
