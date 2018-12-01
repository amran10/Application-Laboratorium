<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PengembalianGuru */

$this->title = 'Create Pengembalian Guru';
$this->params['breadcrumbs'][] = ['label' => 'Pengembalian Guru', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengembalian-guru-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
