<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\AlatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Alats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alat-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_alat',
            'nama_alat',
            'jumlah_alat',
            'katagori_alat',
            'stok_alat',
            // 'lab_id',
        ],
    ]); ?>
</div>
