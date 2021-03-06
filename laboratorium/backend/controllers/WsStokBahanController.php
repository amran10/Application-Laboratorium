<?php
namespace backend\controllers;

use Yii;
use backend\models\StokBahan;
use yii\filters\auth\QueryParamAuth;
 
class WsStokBahanController extends \yii\rest\Controller
{
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => QueryParamAuth::className(),
        ];
        return $behaviors;
        return $behaviors;
    }
 
    protected function verbs()
    {
       return [
           'index' => ['GET', 'POST'],
           'create' => ['POST'],
       ];
    }
 
    public function actionIndex(){
        $result = StokBahan::find()->all();

        return [
            'user'=>Yii::$app->user->identity,
            'data'=>$result,
        ];
    }

    // public function actionCreate()
    // {
    //     $model = new PeminjamanAlat();
    //     $model->tgl_pinjam=date('Y-m-d');
    //     $model->user_id = Yii::$app->user->identity->id;
    //     $model->load(Yii::$app->request->post());
    //     $model->save();
    //     return [
    //         'user' => Yii::$app->user->identity,
    //         'data' => 'success',
    //     ];
    // }

    public function actionView($id)
    {   
        $result = $this->findModel($id);

        return $result;
    }

    protected function findModel($id)
    {
        if (($model = StokBahan::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}