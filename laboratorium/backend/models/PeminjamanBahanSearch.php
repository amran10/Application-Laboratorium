<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PeminjamanBahan;

/**
 * PeminjamanBahanSearch represents the model behind the search form of `backend\models\PeminjamanBahan`.
 */
class PeminjamanBahanSearch extends PeminjamanBahan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pinjam', 'bahan_id', 'jumlah_pinjam', 'user_id'], 'integer'],
            [['tgl_pinjam', 'tgl_kembali'], 'safe'],
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
        $query = PeminjamanBahan::find();

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
            'bahan_id' => $this->bahan_id,
            'tgl_pinjam' => $this->tgl_pinjam,
            'tgl_kembali' => $this->tgl_kembali,
            'jumlah_pinjam' => $this->jumlah_pinjam,
            'user_id' => $this->user_id,
        ]);

        return $dataProvider;
    }
}
