<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Avtozapravka;

/**
 * AvtozapravkaSearch represents the model behind the search form of `app\modules\admin\models\Avtozapravka`.
 */
class AvtozapravkaSearch extends Avtozapravka
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kolonki', 'id_avtozapravki'], 'integer'],
            [['name_firm', 'adress', 'vid_topliva', 'cena'], 'safe'],
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
        $query = Avtozapravka::find();

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
            'id_kolonki' => $this->id_kolonki,
            'id_avtozapravki' => $this->id_avtozapravki,
        ]);

        $query->andFilterWhere(['like', 'name_firm', $this->name_firm])
            ->andFilterWhere(['like', 'adress', $this->adress])
            ->andFilterWhere(['like', 'vid_topliva', $this->vid_topliva])
            ->andFilterWhere(['like', 'cena', $this->cena]);

        return $dataProvider;
    }
}
