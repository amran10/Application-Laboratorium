<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\StokBahan */

$this->title = 'Create Stok Bahan';
$this->params['breadcrumbs'][] = ['label' => 'Stok Bahans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stok-bahan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
