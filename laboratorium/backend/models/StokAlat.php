<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "stok_alat".
 *
 * @property integer $id_stok_alat
 * @property integer $alat_id
 * @property integer $jumlah
 *
 * @property Alat $alat
 */
class StokAlat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stok_alat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alat_id', 'jumlah'], 'required'],
            [['alat_id', 'jumlah'], 'integer'],
            [['alat_id'], 'exist', 'skipOnError' => true, 'targetClass' => Alat::className(), 'targetAttribute' => ['alat_id' => 'id_alat']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_stok_alat' => 'Id Stok Alat',
            'alat_id' => 'Alat ID',
            'jumlah' => 'Jumlah',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlat()
    {
        return $this->hasOne(Alat::className(), ['id_alat' => 'alat_id']);
    }
}
