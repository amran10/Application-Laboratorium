<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "alat".
 *
 * @property integer $id_alat
 * @property string $nama_alat
 * @property integer $jumlah_alat
 * @property string $katagori_alat
 * @property integer $stok_alat
 * @property integer $lab_id
 *
 * @property Lab $lab
 * @property Peminjaman[] $peminjamen
 */
class Alat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'alat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_alat', 'jumlah_alat', 'katagori_alat', 'stok_alat', 'lab_id'], 'required'],
            [['jumlah_alat', 'stok_alat', 'lab_id'], 'integer'],
            [['nama_alat'], 'string', 'max' => 50],
            [['katagori_alat'], 'string', 'max' => 20],
            [['lab_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lab::className(), 'targetAttribute' => ['lab_id' => 'id_lab']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_alat' => 'Id Alat',
            'nama_alat' => 'Nama Alat',
            'jumlah_alat' => 'Jumlah Alat',
            'katagori_alat' => 'Katagori Alat',
            'stok_alat' => 'Stok Alat',
            'lab_id' => 'Lab ID',
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
        return $this->hasMany(Peminjaman::className(), ['alat_id' => 'id_alat']);
    }
}
