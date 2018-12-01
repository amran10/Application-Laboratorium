<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\StokBahan */

$this->title = $model->id_stok_bahan;
$this->params['breadcrumbs'][] = ['label' => 'Stok Bahans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stok-bahan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_stok_bahan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_stok_bahan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_stok_bahan',
            'bahan_id',
            'jumlah',
        ],
    ]) ?>

</div>
