<?php
use yii\helpers\Html;
use yii\helpers\Markdown;
?>
<?php /** @var $model \common\models\Product */ ?>
<style type="text/css">
    .image-new {
        height: 150px;
        width: 200px;
    }
    .padding-anyar {
        padding-top: 20px;
    }
</style>
<div class="col s6 m6">
<center>
<div class="thumbnail shadow">
    <div class="col-lg-5">
        <h4><?= Html::img(Yii::getAlias('@imageurl')."/".$model->gambar, ['class' => 'image-new']) ?></h4>
    </div>
    <div class="padding-anyar">
    <p>
        <h5><b><?= Html::encode($model->nama_lab) ?></b></h5>
        <div class="row">
                <p>
                <center>

            <?php if (Yii::$app->user->identity->role==1) { 
                   echo Html::a('Lihat Lab' , ['view', 'id' => $model->id_lab], ['class' => 'btn btn-primary']);
                   echo Html::a('Edit Gambar' , ['updategambar', 'id' => $model->id_lab], ['class' => 'btn btn-primary']);
                    } else {

                   echo Html::a('Lihat Lab' , ['view', 'id' => $model->id_lab], ['class' => 'btn btn-primary']);
                    }
                    ?>
                </center>
                </p>
        </div>
    </p>
    </div>
    </div>
    </center>
</div>