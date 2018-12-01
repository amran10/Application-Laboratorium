<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\StokAlat */

$this->title = 'Create Stok Alat';
$this->params['breadcrumbs'][] = ['label' => 'Stok Alats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stok-alat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
