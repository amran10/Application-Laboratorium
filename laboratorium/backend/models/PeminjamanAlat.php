<?php

namespace backend\models;

use Yii;
use common\models\User;

/**
 * This is the model class for table "peminjaman_alat".
 *
 * @property integer $id_pinjam
 * @property integer $alat_id
 * @property string $tgl_pinjam
 * @property string $tgl_kembali
 * @property integer $jumlah_pinjam
 * @property integer $user_id
 *
 * @property Alat $alat
 */
class PeminjamanAlat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'peminjaman_alat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alat_id', 'tgl_pinjam', 'tgl_kembali', 'jumlah_pinjam', 'user_id'], 'required'],
            [['alat_id', 'jumlah_pinjam', 'user_id'], 'integer'],
            [['tgl_pinjam', 'tgl_kembali'], 'safe'],
            [['alat_id'], 'exist', 'skipOnError' => true, 'targetClass' => Alat::className(), 'targetAttribute' => ['alat_id' => 'id_alat']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pinjam' => 'Id Pinjam',
            'alat_id' => 'Alat ID',
            'tgl_pinjam' => 'Tgl Pinjam',
            'tgl_kembali' => 'Tgl Kembali',
            'jumlah_pinjam' => 'Jumlah Pinjam',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlat()
    {
        return $this->hasOne(Alat::className(), ['id_alat' => 'alat_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPengembalian()
    {
        return $this->hasMany(Alat::className(), ['pinjam_id' => 'id_pinjam']);
    }
}
