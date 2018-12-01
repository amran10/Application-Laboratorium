
<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $model backend\models\Lab */

$this->title = $model->id_lab;
$this->params['breadcrumbs'][] = ['label' => 'Labs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lab-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
    <?php if (Yii::$app->user->identity->role==1) { 
        echo Html::a('Update', ['update', 'id' => $model->id_lab], ['class' => 'btn btn-primary']);
        echo Html::a('Delete', ['delete', 'id' => $model->id_lab], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]);
        } else {
            echo '';
            } ?>
    </p>

    <div class="col-lg-6">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_lab',
            'nama_lab',
            [
                'label' => 'Gambar',
                'value' => Html::img(Yii::getAlias('@imageurl')."uploads/".$model->gambar, ['width' => '300px']),
                'format' => 'raw'
            ],
        ],
    ]) ?>
    </div>

    <div class="col-lg-3">
    <h4><b>Alat</b></h4>
    <?= ListView::widget([
        'dataProvider' => $dataProvider1,
        'itemView' => '_alat',
        'summary' => false,
    ]) ?>
    </div>

    <div class="col-lg-3">
    <h4><b>Bahan</b></h4>
    <?= ListView::widget([
        'dataProvider' => $dataProvider2,
        'itemView' => '_bahan',
        'summary' => false,
    ]) ?>
    </div>
</div>
