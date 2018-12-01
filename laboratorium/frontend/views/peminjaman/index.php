<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PeminjamanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Input Peminjaman Alat/Bahan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peminjaman-index">
<center>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Input Sekarang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
</center>
</div>
