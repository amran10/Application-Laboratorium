<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pengembalian_guru".
 *
 * @property integer $id_kembali
 * @property integer $pinjam_id
 * @property string $tgl_kembali
 * @property integer $user_id
 *
 * @property PeminjamanBahan $pinjam
 */
class PengembalianGuru extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pengembalian_guru';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pinjam_id', 'tgl_kembali', 'user_id'], 'required'],
            [['pinjam_id', 'user_id'], 'integer'],
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
            'tgl_kembali' => 'Tgl Kembali',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPinjam()
    {
        return $this->hasOne(PeminjamanBahan::className(), ['id_pinjam' => 'pinjam_id']);
    }
}
