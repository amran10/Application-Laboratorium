<?php

namespace backend\controllers;

use Yii;
use backend\models\Outbox;
use backend\models\PeminjamanAlat;
use backend\models\Alat;
use backend\models\PeminjamanAlatSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
use yii\helpers\Url;

/**
 * PeminjamanAlatController implements the CRUD actions for PeminjamanAlat model.
 */
class PeminjamanAlatController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all PeminjamanAlat models.
     * @return mixed
     */
    public function actionIndex()
    {
         if (Yii::$app->user->identity->role==1) {
        $searchModel = new PeminjamanAlatSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    } else {
        $dataProvider = new ActiveDataProvider([
            'query' => PeminjamanAlat::find()->where(['user_id' => Yii::$app->user->identity->id]),
        ]);

        return $this->render('index', [
            //'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    }

    /**
     * Displays a single PeminjamanAlat model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new PeminjamanAlat model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PeminjamanAlat();
        $model->tgl_pinjam=date('Y-m-d');
        $model->user_id = Yii::$app->user->identity->id;
        $nama = Yii::$app->user->identity->nama;
        $pinjam = $model->tgl_pinjam;
        $kembali = $model->tgl_kembali;
        $alat = $model->alat;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $models = new Outbox();
            $models->DestinationNumber = Yii::$app->user->identity->telepon;
            $models->TextDecoded = 'Hai,'.$nama.'. Anda telah melakukan peminjaman alat '.$alat.' di Laboratorium SMA Pasundan 8 Bandung Pada tanggal '.$pinjam.'. Terimakasih';
            $models->CreatorID = 'Muhammad Amran Hakim Siregar';
            $models->save();

            return $this->redirect(['view', 'id' => $model->id_pinjam]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing PeminjamanAlat model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_pinjam]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing PeminjamanAlat model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PeminjamanAlat model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PeminjamanAlat the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PeminjamanAlat::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
