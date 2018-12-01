<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Hotel */

$this->title = 'Edit Gambar Lab: ' . $model->id_lab;
$this->params['breadcrumbs'][] = ['label' => 'Lab', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_lab, 'url' => ['view', 'id' => $model->id_lab]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="hotel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formgambar', [
        'model' => $model,
    ]) ?>

</div>
