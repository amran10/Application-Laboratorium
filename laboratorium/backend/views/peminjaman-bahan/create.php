<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PeminjamanBahan */

$this->title = 'Create Peminjaman Bahan';
$this->params['breadcrumbs'][] = ['label' => 'Peminjaman Bahans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peminjaman-bahan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
