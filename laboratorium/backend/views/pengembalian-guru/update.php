<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PengembalianGuru */

$this->title = 'Update Pengembalian Guru: ' . $model->id_kembali;
$this->params['breadcrumbs'][] = ['label' => 'Pengembalian Gurus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kembali, 'url' => ['view', 'id' => $model->id_kembali]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengembalian-guru-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
