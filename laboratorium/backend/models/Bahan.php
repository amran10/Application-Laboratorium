<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "bahan".
 *
 * @property integer $id_bahan
 * @property integer $lab_id
 * @property string $nama_bahan
 * @property string $keterangan_bahan
 * @property integer $jumlah_bahan
 * @property integer $stok_bahan
 *
 * @property Lab $lab
 * @property Peminjaman[] $peminjamen
 */
class Bahan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bahan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lab_id', 'nama_bahan', 'keterangan_bahan', 'jumlah_bahan', 'stok_bahan'], 'required'],
            [['lab_id', 'jumlah_bahan', 'stok_bahan'], 'integer'],
            [['nama_bahan'], 'string', 'max' => 50],
            [['keterangan_bahan'], 'string', 'max' => 100],
            [['lab_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lab::className(), 'targetAttribute' => ['lab_id' => 'id_lab']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_bahan' => 'Id Bahan',
            'lab_id' => 'Lab ID',
            'nama_bahan' => 'Nama Bahan',
            'keterangan_bahan' => 'Keterangan Bahan',
            'jumlah_bahan' => 'Jumlah Bahan',
            'stok_bahan' => 'Stok Bahan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLab()
    {
        return $this->hasOne(Lab::className(), ['id_lab' => 'lab_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeminjamen()
    {
        return $this->hasMany(Peminjaman::className(), ['bahan_id' => 'id_bahan']);
    }
}
