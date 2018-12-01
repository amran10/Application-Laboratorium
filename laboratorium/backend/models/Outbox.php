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
class Outbox extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'outbox';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DestinationNumber', 'TextDecoded', 'CreatorID'], 'required'],
            [['UpdatedInDB','InsertIntoDB','SendingDateTime','SendBefore','SendAfter','Text','DestinationNumber','Coding','UDH','Class','TextDecoded','ID','MultiPart','RelativeValidity','SenderID','SendingTimeOut','DeliveryReport','CreatorID','Retries','Priority','Status'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'UpdateInDB' => 'UpdateInDB',
            'TextDecoded' => 'TextDecoded',
            'CreatorID' => 'CreatorID',
            'UpdatedInDB' => 'UpdateInDB',
            'InsertIntoDB' => 'InsertIntoDB',
            'SendingDateTime' => 'SendingDateTime',
            'SendBefore' => 'SendBefore',
            'SendAfter' => 'SendAfter',
            'Text' => 'Text',
            'DestinationNumber' => 'DestinationNumber',
            'Coding' => 'Coding',
            'UDH' => 'UDH',
            'Class' => 'Class',
            'TextDecoded' => 'TextDecoded',
            'ID' => 'ID',
            'MultiPart' => 'MultiPart',
            'RelativeValidity' => 'RelativeValidity',
            'SenderID' => 'SenderID',
            'SendingTimeOut' => 'SendingTimeOut',
            'DeliveryReport' => 'DeliveryReport',
            'CreatorID' => 'CreatorID',
            'Retries' => 'Retries',
            'Priority' => 'Priority',
            'Status' => 'Status',
        ];
    }
}
