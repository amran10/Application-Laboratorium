<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Bahan;

/**
 * BahanSearch represents the model behind the search form of `backend\models\Bahan`.
 */
class BahanSearch extends Bahan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_bahan', 'lab_id', 'jumlah_bahan', 'stok_bahan'], 'integer'],
            [['nama_bahan', 'keterangan_bahan'], 'safe'],
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
        $query = Bahan::find();

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
            'id_bahan' => $this->id_bahan,
            'lab_id' => $this->lab_id,
            'jumlah_bahan' => $this->jumlah_bahan,
            'stok_bahan' => $this->stok_bahan,
        ]);

        $query->andFilterWhere(['like', 'nama_bahan', $this->nama_bahan])
            ->andFilterWhere(['like', 'keterangan_bahan', $this->keterangan_bahan]);

        return $dataProvider;
    }
}
