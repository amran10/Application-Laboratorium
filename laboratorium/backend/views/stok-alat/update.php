<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\StokAlat */

$this->title = 'Update Stok Alat: ' . $model->id_stok_alat;
$this->params['breadcrumbs'][] = ['label' => 'Stok Alats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_stok_alat, 'url' => ['view', 'id' => $model->id_stok_alat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stok-alat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
