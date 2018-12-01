<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Bahan */

$this->title = $model->id_bahan;
$this->params['breadcrumbs'][] = ['label' => 'Bahans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bahan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_bahan',
            'lab_id',
            'nama_bahan',
            'keterangan_bahan',
            'jumlah_bahan',
            'stok_bahan',
        ],
    ]) ?>

</div>
