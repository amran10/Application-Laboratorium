<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Lab */

$this->title = 'Update Lab: ' . $model->id_lab;
$this->params['breadcrumbs'][] = ['label' => 'Labs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_lab, 'url' => ['view', 'id' => $model->id_lab]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lab-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
