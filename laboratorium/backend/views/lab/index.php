<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\LabSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lab';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lab-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php if (Yii::$app->user->identity->role==1) { 
         echo Html::a('Create Lab', ['create'], ['class' => 'btn btn-success']);
     } else {
        echo '';
        } ?>
    </p>

<div class="container-fluid">
  <div class="row">
          <?= ListView::widget([
              'dataProvider' => $dataProvider,
              'itemView' => '_lab',
          ]) ?>
  </div>
</div>
</div>
