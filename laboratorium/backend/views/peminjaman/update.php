<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Peminjaman */

$this->title = 'Update Peminjaman: ' . $model->id_pinjam;
$this->params['breadcrumbs'][] = ['label' => 'Peminjamen', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pinjam, 'url' => ['view', 'id' => $model->id_pinjam]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="peminjaman-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
