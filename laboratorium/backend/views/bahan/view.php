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

    <p>
        <?php if (Yii::$app->user->identity->role==1) { 
        echo Html::a('Update', ['update', 'id' => $model->id_bahan], ['class' => 'btn btn-primary']);
        echo Html::a('Delete', ['delete', 'id' => $model->id_bahan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]);
        } else {
            echo '';
            }
        ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_bahan',
            'lab_id',
            'nama_bahan',
            'keterangan_bahan',
            //'jumlah_bahan',
            'stok_bahan',
        ],
    ]) ?>

</div>
