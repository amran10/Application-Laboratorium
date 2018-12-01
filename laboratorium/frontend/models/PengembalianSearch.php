<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Pengembalian;

/**
 * PengembalianSearch represents the model behind the search form of `backend\models\Pengembalian`.
 */
class PengembalianSearch extends Pengembalian
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kembali', 'pinjam_id'], 'integer'],
            [['tgl_kembali'], 'safe'],
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
        $query = Pengembalian::find();

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
            'id_kembali' => $this->id_kembali,
            'pinjam_id' => $this->pinjam_id,
            'tgl_kembali' => $this->tgl_kembali,
        ]);

        return $dataProvider;
    }
}
