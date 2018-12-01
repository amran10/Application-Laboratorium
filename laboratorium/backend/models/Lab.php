<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "lab".
 *
 * @property integer $id_lab
 * @property string $nama_lab
 *
 * @property Alat[] $alat
 * @property Bahan[] $bahan
 */
class Lab extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lab';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['nama_lab', 'required'],
            [['nama_lab'], 'string', 'max' => 20],
            [['gambar'], 'file','maxSize' => 3000 * 3000 * 5, 'skipOnEmpty' => true, 'extensions' => ['gif', 'jpg', 'png', 'jpeg', 'JPG', 'JPEG', 'PNG', 'GIF'],'checkExtensionByMimeType'=>false,],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_lab' => 'Id Lab',
            'nama_lab' => 'Nama Lab',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlats()
    {
        return $this->hasMany(Alat::className(), ['lab_id' => 'id_lab']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBahans()
    {
        return $this->hasMany(Bahan::className(), ['lab_id' => 'id_lab']);
    }

      /**
     * @return \yii\db\ActiveQuery
     */

     public function getPeminjamanalat()
    {
        return $this->hasMany(PeminjamanAlat::className(), ['lab_id' => 'id_lab']);
    }
}
