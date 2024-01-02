<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Prodigy;

/**
 * ProdigySearch represents the model behind the search form of `app\modules\admin\models\Prodigy`.
 */
class ProdigySearch extends Prodigy
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'card_chet_klient', 'id_avtozapravki', 'id_topliva', 'kolichestvo'], 'integer'],
            [['date_prodag'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Prodigy::find();

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
            'id' => $this->id,
            'card_chet_klient' => $this->card_chet_klient,
            'id_avtozapravki' => $this->id_avtozapravki,
            'id_topliva' => $this->id_topliva,
            'kolichestvo' => $this->kolichestvo,
        ]);

        $query->andFilterWhere(['like', 'date_prodag', $this->date_prodag]);

        return $dataProvider;
    }
}
