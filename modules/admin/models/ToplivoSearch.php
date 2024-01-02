<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Toplivo;

/**
 * ToplivoSearch represents the model behind the search form of `app\modules\admin\models\Toplivo`.
 */
class ToplivoSearch extends Toplivo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_topliva', 'cena'], 'integer'],
            [['vid_topliva', 'ed_izmirenia'], 'safe'],
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
        $query = Toplivo::find();

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
            'id_topliva' => $this->id_topliva,
            'cena' => $this->cena,
        ]);

        $query->andFilterWhere(['like', 'vid_topliva', $this->vid_topliva])
            ->andFilterWhere(['like', 'ed_izmirenia', $this->ed_izmirenia]);

        return $dataProvider;
    }
}
