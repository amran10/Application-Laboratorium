<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pengembalian */

$this->title = 'Update Pengembalian: ' . $model->id_kembali;
$this->params['breadcrumbs'][] = ['label' => 'Pengembalians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kembali, 'url' => ['view', 'id' => $model->id_kembali]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengembalian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
