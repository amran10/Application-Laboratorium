<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "peminjaman_bahan".
 *
 * @property integer $id_pinjam
 * @property integer $bahan_id
 * @property string $tgl_pinjam
 * @property string $tgl_kembali
 * @property integer $jumlah_pinjam
 * @property integer $user_id
 *
 * @property Bahan $bahan
 */
class PeminjamanBahan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'peminjaman_bahan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bahan_id', 'tgl_pinjam', 'tgl_kembali', 'jumlah_pinjam', 'user_id'], 'required'],
            [['bahan_id', 'jumlah_pinjam', 'user_id'], 'integer'],
            [['tgl_pinjam', 'tgl_kembali'], 'safe'],
            [['bahan_id'], 'exist', 'skipOnError' => true, 'targetClass' => Bahan::className(), 'targetAttribute' => ['bahan_id' => 'id_bahan']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pinjam' => 'Id Pinjam',
            'bahan_id' => 'Bahan ID',
            'tgl_pinjam' => 'Tgl Pinjam',
            'tgl_kembali' => 'Tgl Kembali',
            'jumlah_pinjam' => 'Jumlah Pinjam',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBahan()
    {
        return $this->hasOne(Bahan::className(), ['id_bahan' => 'bahan_id']);
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPengembalian()
    {
        return $this->hasMany(Bahan::className(), ['pinjam_id' => 'id_pinjam']);
    }
}
