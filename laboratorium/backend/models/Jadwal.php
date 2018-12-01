<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "jadwal".
 *
 * @property integer $id_jadwal
 * @property string $jam
 * @property string $hari
 * @property integer $kelas_id
 *
 * @property Kelas $kelas
 */
class Jadwal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jadwal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jam', 'hari', 'kelas_id'], 'required'],
            [['jam'], 'safe'],
            [['kelas_id'], 'integer'],
            [['hari'], 'string', 'max' => 20],
            [['kelas_id'], 'exist', 'skipOnError' => true, 'targetClass' => Kelas::className(), 'targetAttribute' => ['kelas_id' => 'id_kelas']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_jadwal' => 'Id Jadwal',
            'jam' => 'Jam',
            'hari' => 'Hari',
            'kelas_id' => 'Kelas ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKelas()
    {
        return $this->hasOne(Kelas::className(), ['id_kelas' => 'kelas_id']);
    }
}
