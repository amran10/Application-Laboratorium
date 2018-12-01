<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "peminjaman".
 *
 * @property integer $id_pinjam
 * @property integer $alat_id
 * @property integer $bahan_id
 * @property string $tgl_pinjam
 * @property string $tgl_kembali
 * @property integer $jumlah_pinjam
 * @property integer $nisn
 * @property string $nama_siswa
 * @property string $jk
 * @property string $alamat
 *
 * @property Bahan $bahan
 * @property Alat $alat
 */
class Peminjaman extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'peminjaman';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alat_id', 'tgl_pinjam', 'tgl_kembali', 'jumlah_pinjam', 'nisn', 'nama_siswa', 'jk', 'alamat'], 'required'],
            [['alat_id', 'jumlah_pinjam', 'nisn'], 'integer'],
            [['tgl_pinjam', 'tgl_kembali'], 'safe'],
            [['nama_siswa'], 'string', 'max' => 50],
            [['jk'], 'string', 'max' => 20],
            [['alamat'], 'string', 'max' => 100],
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
            'nisn' => 'Nisn',
            'nama_siswa' => 'Nama Siswa',
            'jk' => 'Jk',
            'alamat' => 'Alamat',
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
    public function getPengembalian()
    {
        return $this->hasMany(Alat::className(), ['pinjam_id' => 'id_pinjam']);
    }
}
