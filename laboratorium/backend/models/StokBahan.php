<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "stok_bahan".
 *
 * @property integer $id_stok_bahan
 * @property integer $bahan_id
 * @property integer $jumlah
 *
 * @property Bahan $bahan
 */
class StokBahan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stok_bahan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bahan_id', 'jumlah'], 'required'],
            [['bahan_id', 'jumlah'], 'integer'],
            [['bahan_id'], 'exist', 'skipOnError' => true, 'targetClass' => Bahan::className(), 'targetAttribute' => ['bahan_id' => 'id_bahan']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_stok_bahan' => 'Id Stok Bahan',
            'bahan_id' => 'Bahan ID',
            'jumlah' => 'Jumlah',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBahan()
    {
        return $this->hasOne(Bahan::className(), ['id_bahan' => 'bahan_id']);
    }
}
