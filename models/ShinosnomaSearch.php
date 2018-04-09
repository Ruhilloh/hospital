<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Shinosnoma;

/**
 * ShinosnomaSearch represents the model behind the search form about `app\models\Shinosnoma`.
 */
class ShinosnomaSearch extends Shinosnoma
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_qism'], 'integer'],
            [['NNN', 'sol_tav', 'shahr', 'deha', 'kucha', 'jins', 'sanai_qabul', 'vaqt', 'harorat_badan', 'rohkhat', 'qabul_shud', 'dastras_gardid', 'bo_tashkhis'], 'safe'],
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
        $query = Shinosnoma::find();

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
            'id_qism' => $this->id_qism,
            'sol_tav' => $this->sol_tav,
            'sanai_qabul' => $this->sanai_qabul,
            'vaqt' => $this->vaqt,
        ]);

        $query->andFilterWhere(['like', 'NNN', $this->NNN])
            ->andFilterWhere(['like', 'shahr', $this->shahr])
            ->andFilterWhere(['like', 'deha', $this->deha])
            ->andFilterWhere(['like', 'kucha', $this->kucha])
            ->andFilterWhere(['like', 'jins', $this->jins])
            ->andFilterWhere(['like', 'harorat_badan', $this->harorat_badan])
            ->andFilterWhere(['like', 'rohkhat', $this->rohkhat])
            ->andFilterWhere(['like', 'qabul_shud', $this->qabul_shud])
            ->andFilterWhere(['like', 'dastras_gardid', $this->dastras_gardid])
            ->andFilterWhere(['like', 'bo_tashkhis', $this->bo_tashkhis]);

        return $dataProvider;
    }
}
