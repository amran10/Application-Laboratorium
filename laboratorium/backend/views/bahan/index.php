<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BahanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bahan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bahan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php if (Yii::$app->user->identity->role==1) { 
        echo Html::a('Create Bahan', ['create'], ['class' => 'btn btn-success']);
    } else {
        echo '';
    }
    ?>

    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_bahan',
            //'lab_id',
            'nama_bahan',
            'keterangan_bahan',
            'jumlah_bahan',
            // 'stok_bahan',

            [
                'class' => 'yii\grid\ActionColumn',
                'visible' => Yii::$app->user->identity->role==1,
            ],
        ],
    ]); ?>
</div>
