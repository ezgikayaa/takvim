<?php

namespace kouosl\takvim\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\takvim\models\Tatil;

/**
 * TatilSearch represents the model behind the search form about `kouosl\takvim\models\Tatil`.
 */
class TatilSearch extends Tatil
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tatil_id'], 'integer'],
            [['tatil_adi', 'tatil_tipi'], 'safe'],
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
        $query = Tatil::find();

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
            'tatil_id' => $this->tatil_id,
        ]);

        $query->andFilterWhere(['like', 'tatil_adi', $this->tatil_adi])
            ->andFilterWhere(['like', 'tatil_tipi', $this->tatil_tipi]);

        return $dataProvider;
    }
}
