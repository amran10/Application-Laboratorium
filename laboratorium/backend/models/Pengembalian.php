<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pengembalian".
 *
 * @property integer $id_kembali
 * @property integer $pinjam_id
 * @property string $tgl_kembali
 */
class Pengembalian extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pengembalian';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pinjam_id', 'tgl_kembali'], 'required'],
            [['pinjam_id'], 'integer'],
            [['tgl_kembali'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kembali' => 'Id Kembali',
            'pinjam_id' => 'Pinjam ID',
            'tgl_kembali' => 'Tgl Pinjam',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeminjaman()
    {
        return $this->hasOne(Peminjaman::className(), ['id_pinjam' => 'pinjam_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeminjamanalat()
    {
        return $this->hasOne(PeminjamanAlat::className(), ['id_pinjam' => 'pinjam_id']);
    }
}
