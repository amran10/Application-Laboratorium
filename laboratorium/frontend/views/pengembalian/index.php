<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PengembalianSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Input Pengembalian Alat/Bahan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengembalian-index">
<center>
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Input Sekarang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
</center>
</div>
