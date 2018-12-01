<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Alat */

$this->title = $model->id_alat;
$this->params['breadcrumbs'][] = ['label' => 'Alats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_alat',
            'nama_alat',
            'jumlah_alat',
            'katagori_alat',
            'stok_alat',
            'lab_id',
        ],
    ]) ?>

</div>
