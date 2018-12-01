<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Alat */

$this->title = $model->id_alat;
$this->params['breadcrumbs'][] = ['label' => 'Alats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php if (Yii::$app->user->identity->role==1) { 
       echo Html::a('Update', ['update', 'id' => $model->id_alat], ['class' => 'btn btn-primary']);
       echo Html::a('Delete', ['delete', 'id' => $model->id_alat], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]);
        } else{
            echo '';
            } 
        ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_alat',
            'nama_alat',
            'stok_alat',
            'katagori_alat',
            'lab_id',
        ],
    ]) ?>

</div>
