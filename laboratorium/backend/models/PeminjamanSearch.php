<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Peminjaman;

/**
 * PeminjamanSearch represents the model behind the search form about `backend\models\Peminjaman`.
 */
class PeminjamanSearch extends Peminjaman
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pinjam', 'alat_id', 'jumlah_pinjam', 'nisn'], 'integer'],
            [['tgl_pinjam', 'tgl_kembali', 'nama_siswa', 'jk', 'alamat'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Peminjaman::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_pinjam' => $this->id_pinjam,
            'alat_id' => $this->alat_id,
            'tgl_pinjam' => $this->tgl_pinjam,
            'tgl_kembali' => $this->tgl_kembali,
            'jumlah_pinjam' => $this->jumlah_pinjam,
            'nisn' => $this->nisn,
        ]);

        $query->andFilterWhere(['like', 'nama_siswa', $this->nama_siswa])
            ->andFilterWhere(['like', 'jk', $this->jk])
            ->andFilterWhere(['like', 'alamat', $this->alamat]);

        return $dataProvider;
    }
}
