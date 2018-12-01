<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Pengembalian */

$this->title = $model->id_kembali;
$this->params['breadcrumbs'][] = ['label' => 'Pengembalian', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengembalian-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_kembali], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_kembali], [
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
            'id_kembali',
            'pinjam_id',
            'tgl_kembali',
        ],
    ]) ?>

</div>
