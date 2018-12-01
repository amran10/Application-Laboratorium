<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\StokBahan */

$this->title = 'Update Stok Bahan: ' . $model->id_stok_bahan;
$this->params['breadcrumbs'][] = ['label' => 'Stok Bahans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_stok_bahan, 'url' => ['view', 'id' => $model->id_stok_bahan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stok-bahan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
