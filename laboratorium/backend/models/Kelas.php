<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kelas".
 *
 * @property integer $id_kelas
 * @property string $nama_kelas
 *
 * @property Jadwal[] $jadwals
 */
class Kelas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kelas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_kelas'], 'required'],
            [['nama_kelas'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kelas' => 'Id Kelas',
            'nama_kelas' => 'Nama Kelas',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJadwal()
    {
        return $this->hasMany(Jadwal::className(), ['kelas_id' => 'id_kelas']);
    }
}
