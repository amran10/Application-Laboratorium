<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\SignupForm;
use backend\models\Peminjaman;
use backend\models\PeminjamanAlat;
use backend\models\PeminjamanSearch;
use backend\models\PeminjamanAlatSearch;
use backend\models\PeminjamanBahanSearch;
use backend\models\Outbox;
use yii\data\ActiveDataProvider;
use yii\helpers\Url;
use kartik\mpdf\Pdf;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public $successUrl = ''; //bikin variabel successUrl
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actionSendSMS() {
            $fields_string  =   "";
            $fields     =   array(
                                'api_key'       =>  '8ba65e67',
                                'api_secret'    =>  'b5ea2782f9597140',
                                'to'            =>  '+6287750930500',
                                'from'          =>  "NEXMO",
                                'text'          =>  "Testing SMS Dari Nexmo"
            );
            $url        =   "https://rest.nexmo.com/sms/json";
 
        //url-ify the data for the POST
        foreach($fields as $key=>$value) { 
                $fields_string .= $key.'='.$value.'&'; 
                }
        rtrim($fields_string, '&');
     
            //open connection
        $ch = curl_init();
     
        //set the url, number of POST vars, POST data
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_POST, count($fields));
        curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
     
        //execute post
        $result = curl_exec($ch);
        //close connection
        curl_close($ch);
    }



    /**
     * Lists all Peminjaman models.
     * @return mixed
     */
    public function actionCetak()
    {
        $searchModel = new PeminjamanSearch();
        $searchModelalat = new PeminjamanAlatSearch();
        $searchModelbahan = new PeminjamanBahanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvideralat = $searchModelalat->search(Yii::$app->request->queryParams);
        $dataProviderbahan = $searchModelbahan->search(Yii::$app->request->queryParams);

        return $this->render('cetak', [
            'searchModel' => $searchModel,
            'searchModelalat' => $searchModelalat,
            'searchModelbahan' => $searchModelbahan,
            'dataProvider' => $dataProvider,
            'dataProvideralat' => $dataProvideralat,
            'dataProviderbahan' => $dataProviderbahan,
        ]);
    }

    public function actionPeminjaman()
    {
        $searchModel = new PeminjamanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('peminjaman', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionPeminjamanalat()
    {
        $searchModelalat = new PeminjamanAlatSearch();
        $dataProvideralat = $searchModelalat->search(Yii::$app->request->queryParams);

        return $this->render('peminjamanalat', [
            'searchModelalat' => $searchModelalat,
            'dataProvideralat' => $dataProvideralat,
        ]);
    }

    public function actionPeminjamanbahan()
    {
        $searchModelbahan = new PeminjamanBahanSearch();
        $dataProviderbahan = $searchModelbahan->search(Yii::$app->request->queryParams);

        return $this->render('peminjamanbahan', [
            'searchModelbahan' => $searchModelbahan,
            'dataProviderbahan' => $dataProviderbahan,
        ]);
    }

    public function actionCetakpeminjaman($tgl_pinjam) {
 
        // get your HTML raw content without any layouts or scripts
        
        $model = Peminjaman::find()->where(['tgl_pinjam' => $tgl_pinjam]);
 
        $dataProvider = new ActiveDataProvider([
            'query' => $model,
        ]);

        $content =  $this->render('cetakpeminjaman',[
            'dataProvider' => $dataProvider,
        ]);
         
        // setup kartik\mpdf\Pdf component
        $pdf = new Pdf([
            // set to use core fonts only
            'mode' => Pdf::MODE_UTF8,
            // A4 paper format
            'format' => Pdf::FORMAT_A4,
            // portrait orientation
            'orientation' => Pdf::ORIENT_PORTRAIT,
            // stream to browser inline
            'destination' => Pdf::DEST_BROWSER,
            // your html content input
            'content' => $content, 
            // format content from your own css file if needed or use the
            // enhanced bootstrap css built by Krajee for mPDF formatting
            'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
             // call mPDF methods on the fly
            'methods' => [
                'SetHeader'=>['Laboratorium SMA Pasundan 8 Bandung'],
                'SetFooter'=>['Laboratorium.com'],
            ]
        ]);
        // http response
        $response = Yii::$app->response;
        $response->format = \yii\web\Response::FORMAT_RAW;
        $headers = Yii::$app->response->headers;
        $headers->add('Content-Type', 'application/pdf');
 
        // return the pdf output as per the destination setting
        return $pdf->render();
    }

    public function actionCetakpeminjamanalat($tgl_pinjam) {
 
        // get your HTML raw content without any layouts or scripts
        
        $model = PeminjamanAlat::find()->where(['tgl_pinjam' => $tgl_pinjam]);
 
        $dataProvider = new ActiveDataProvider([
            'query' => $model,
        ]);

        $content =  $this->render('cetakpeminjamanalat',[
            'dataProvider' => $dataProvider,
        ]);
         
        // setup kartik\mpdf\Pdf component
        $pdf = new Pdf([
            // set to use core fonts only
            'mode' => Pdf::MODE_UTF8,
            // A4 paper format
            'format' => Pdf::FORMAT_A4,
            // portrait orientation
            'orientation' => Pdf::ORIENT_PORTRAIT,
            // stream to browser inline
            'destination' => Pdf::DEST_BROWSER,
            // your html content input
            'content' => $content, 
            // format content from your own css file if needed or use the
            // enhanced bootstrap css built by Krajee for mPDF formatting
            'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
             // call mPDF methods on the fly
            'methods' => [
                'SetHeader'=>['Laboratorium SMA Pasundan 8 Bandung'],
                'SetFooter'=>['Laboratorium.com'],
            ]
        ]);
        // http response
        $response = Yii::$app->response;
        $response->format = \yii\web\Response::FORMAT_RAW;
        $headers = Yii::$app->response->headers;
        $headers->add('Content-Type', 'application/pdf');
 
        // return the pdf output as per the destination setting
        return $pdf->render();
    }

     /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        

        // Tambahkan ini aje.. session yang kita buat sebelumnya, MULAI
        $session = Yii::$app->session;
        if (!empty($session['attributes'])){
            $model->username = $session['attributes']['first_name'];
            $model->email = $session['attributes']['email'];
        }
        // SELESAI

        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
            $models = new Outbox();
            $models->DestinationNumber = Yii::$app->user->identity->telepon;
            $models->TextDecoded = 'Hai, Anda Telah terdaftar sebagai Pengguna Aktif di Laboratorium SMA Pasundan 8 Bandung.';
            $models->CreatorID = 'Muhammad Amran Hakim Siregar';
            $models->save();
            return $this->goHome();
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'auth' => [
                'class' => 'yii\authclient\AuthAction',
                'successCallback' => [$this, 'successCallback'],
                'successUrl' => $this->successUrl
            ],
    ],
        ];
    }
    public function successCallback($client)
    {
        $attributes = $client->getUserAttributes();
        // user login or signup comes here
         // user login or signup comes here
        /*
        Kalo di die(print_r($attributes));
        maka akan keluar
        Array ( [id] => https://www.google.com/accounts/o8/id?id=AItOawkSN3ecyrQAUOVyy9kuX-2oq-hahagake [namePerson/first] => Hafid [namePerson/last] => Mukhlasin [pref/language] => en [contact/email] => milisstudio@gmail.com [first_name] => Hafid [last_name] => Mukhlasin [email] => milisstudio@gmail.com [language] => en ) 
     
        Nah data ini bisa kita gunakan untuk check apakah si user udah terdaftar ato belum..
        */
 
    $user = \common\models\User::find()
        ->where([
            'email'=>$attributes['email'],
        ])
        ->one();
    if(!empty($user)){
        Yii::$app->user->login($user);
    }
    else{
        //Simpen disession attribute user dari Google
        $session = Yii::$app->session;
        $session['attributes']=$attributes;
        // redirect ke form signup, dengan mengset nilai variabell global successUrl
        $this->successUrl = \yii\helpers\Url::to(['signup']);
 
}
    }
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
