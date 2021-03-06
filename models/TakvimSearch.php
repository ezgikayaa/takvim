<?php

namespace kouosl\takvim\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\takvim\models\Takvim;

/**
 * TakvimSearch represents the model behind the search form about `kouosl\takvim\models\Takvim`.
 */
class TakvimSearch extends Takvim
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['takvim_date', 'gun', 'ay', 'yil'], 'integer'],
            [['saat', 'takvimtip'], 'safe'],
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
        $query = Takvim::find();

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
            'takvim_date' => $this->takvim_date,
            'gun' => $this->gun,
            'ay' => $this->ay,
            'yil' => $this->yil,
            'saat' => $this->saat,
        ]);

        $query->andFilterWhere(['like', 'takvimtip', $this->takvimtip]);

        return $dataProvider;
    }
}
