<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PeminjamanAlat */

$this->title = 'Create Peminjaman Alat';
$this->params['breadcrumbs'][] = ['label' => 'Peminjaman Alats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peminjaman-alat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
