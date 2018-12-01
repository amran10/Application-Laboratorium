<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '<b></b>Laboratorium',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } elseif (Yii::$app->user->identity->role==1) {
        $menuItems = [
            ['label' => 'Home', 'url' => ['/site/index']],
            [
                'label' => 'Laboratorium',
                'items' => [
                    ['label' => 'Laboratorium', 'url' => ['/lab/index']],
                    ['label' => 'Alat', 'url' => ['/alat/index']],
                    ['label' => 'Bahan', 'url' => ['/bahan/index']],
                    ['label' => 'Kelas', 'url' => ['/kelas/index']],
                    ['label' => 'Jadwal', 'url' => ['/jadwal/index']],
                ],
            ],
        
            [
                'label' => 'Transaksi Laboratorium',
                'items' => [
                    //['label' => 'Peminjaman Alat Siswa', 'url' => ['/peminjaman/index']],
                    //['label' => 'Peminjaman Alat Guru', 'url' => ['/peminjaman-alat/index']],
                    //['label' => 'Peminjaman Bahan', 'url' => ['/peminjaman-bahan/index']],
                    ['label' => 'Pengembalian', 'url' => ['/pengembalian/index']],
                    //['label' => 'Pengembalian Guru', 'url' => ['/pengembalian-guru/index']],
                ],
            ],
                    ['label' => 'Laporan', 'url' => ['/site/cetak']],
                    ['label' => 'Signup', 'url' => ['/site/signup']],
        ];
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')', ///USER
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    } else {
        $menuItems = [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'Informasi Jadwal Kelas', 'url' => ['/jadwal/index']],

            [
                'label' => 'Info Laboratorium',
                'items' => [
                    ['label' => 'Laboratorium', 'url' => ['/lab/index']],
                    ['label' => 'Alat', 'url' => ['/alat/index']],
                    ['label' => 'Bahan', 'url' => ['/bahan/index']],
                ],
            ],
            [
                'label' => 'Transaksi Laboratorium',
                'items' => [
                    ['label' => 'Peminjaman Alat', 'url' => ['/peminjaman-alat/index']],
                    //['label' => 'Peminjaman Bahan', 'url' => ['/peminjaman-bahan/index']],
                    //['label' => 'Pengembalian', 'url' => ['/pengembalian-guru/index']],
                ],
            ],
        ];
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>


<footer class="footer fotter">
    <div class="container">
        <p class="pull-left"><b>SMA Pasundan 8 Bandung || &copy; Laboratorium || </b><?= date('Y') ?></p>

        <p class="pull-right">&copy; Project IT 2 </p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
