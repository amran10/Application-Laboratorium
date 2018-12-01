<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Alat;

/**
 * AlatSearch represents the model behind the search form of `backend\models\Alat`.
 */
class AlatSearch extends Alat
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_alat', 'jumlah_alat', 'stok_alat', 'lab_id'], 'integer'],
            [['nama_alat', 'katagori_alat'], 'safe'],
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
        $query = Alat::find();

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
            'id_alat' => $this->id_alat,
            'jumlah_alat' => $this->jumlah_alat,
            'stok_alat' => $this->stok_alat,
            'lab_id' => $this->lab_id,
        ]);

        $query->andFilterWhere(['like', 'nama_alat', $this->nama_alat])
            ->andFilterWhere(['like', 'katagori_alat', $this->katagori_alat]);

        return $dataProvider;
    }
}
