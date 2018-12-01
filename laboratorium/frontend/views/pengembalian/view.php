<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Pengembalian */

$this->title = $model->id_kembali;
$this->params['breadcrumbs'][] = ['label' => 'Pengembalians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengembalian-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_kembali',
            'pinjam_id',
            'tgl_kembali',
        ],
    ]) ?>

</div>
