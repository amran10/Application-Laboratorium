<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\StokAlat */

$this->title = $model->id_stok_alat;
$this->params['breadcrumbs'][] = ['label' => 'Stok Alats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stok-alat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_stok_alat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_stok_alat], [
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
            'id_stok_alat',
            'alat_id',
            'jumlah',
        ],
    ]) ?>

</div>
