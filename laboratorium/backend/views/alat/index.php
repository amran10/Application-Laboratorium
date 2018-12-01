<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AlatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Alat';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alat-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php if (Yii::$app->user->identity->role==1) { 
        echo Html::a('Create Alat', ['create'], ['class' => 'btn btn-success']);
    } else {
        echo '';
    }
    ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_alat',
            'nama_alat',
            'katagori_alat',
            'stok_alat',
            // 'lab_id',

            ['class' => 'yii\grid\ActionColumn',
            'visible' => Yii::$app->user->identity->role==1,],
            
        ],
    ]); ?>
</div>
