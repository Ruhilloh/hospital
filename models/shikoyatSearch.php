<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\shikoyat;

/**
 * shikoyatSearch represents the model behind the search form about `app\models\shikoyat`.
 */
class shikoyatSearch extends shikoyat
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_shikoyat', 'id_qism'], 'integer'],
            [['dard', 'pahnshavi', 'mavze', 'khislat_dard', 'khislat', 'digar_shikoyat', 'dilzani', 'sulfa', 'namud_sulfa', 'balgam', 'mavzei_dard', 'vaqti_roh_raftan', 'metr_roh', 'kori_jismoni', 'baromad_ba_zinapoya', 'digar_sabab'], 'safe'],
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
        $query = shikoyat::find();

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
            'id_shikoyat' => $this->id_shikoyat,
            'id_qism' => $this->id_qism,
        ]);

        $query->andFilterWhere(['like', 'dard', $this->dard])
            ->andFilterWhere(['like', 'pahnshavi', $this->pahnshavi])
            ->andFilterWhere(['like', 'mavze', $this->mavze])
            ->andFilterWhere(['like', 'khislat_dard', $this->khislat_dard])
            ->andFilterWhere(['like', 'khislat', $this->khislat])
            ->andFilterWhere(['like', 'digar_shikoyat', $this->digar_shikoyat])
            ->andFilterWhere(['like', 'dilzani', $this->dilzani])
            ->andFilterWhere(['like', 'sulfa', $this->sulfa])
            ->andFilterWhere(['like', 'namud_sulfa', $this->namud_sulfa])
            ->andFilterWhere(['like', 'balgam', $this->balgam])
            ->andFilterWhere(['like', 'mavzei_dard', $this->mavzei_dard])
            ->andFilterWhere(['like', 'vaqti_roh_raftan', $this->vaqti_roh_raftan])
            ->andFilterWhere(['like', 'metr_roh', $this->metr_roh])
            ->andFilterWhere(['like', 'kori_jismoni', $this->kori_jismoni])
            ->andFilterWhere(['like', 'baromad_ba_zinapoya', $this->baromad_ba_zinapoya])
            ->andFilterWhere(['like', 'digar_sabab', $this->digar_sabab]);

        return $dataProvider;
    }
}
