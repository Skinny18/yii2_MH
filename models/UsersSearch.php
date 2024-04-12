<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Users;

/**
 * UsersSearch represents the model behind the search form of `app\models\Users`.
 */
class UsersSearch extends Users
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'alergia_id', 'doenca_id', 'cirurgia_id', 'ist_id', 'endereco_id', 'medicamento_id'], 'integer'],
            [['nome', 'email', 'password', 'diabetes', 'contato_emergencia1', 'parentesco1', 'contato_emergencia2', 'parentesco2', 'tipo_sangue', 'historico_familiar'], 'safe'],
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
        $query = Users::find();

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
            'alergia_id' => $this->alergia_id,
            'doenca_id' => $this->doenca_id,
            'cirurgia_id' => $this->cirurgia_id,
            'ist_id' => $this->ist_id,
            'endereco_id' => $this->endereco_id,
            'medicamento_id' => $this->medicamento_id,
        ]);

        $query->andFilterWhere(['ilike', 'nome', $this->nome])
            ->andFilterWhere(['ilike', 'email', $this->email])
            ->andFilterWhere(['ilike', 'password', $this->password])
            ->andFilterWhere(['ilike', 'diabetes', $this->diabetes])
            ->andFilterWhere(['ilike', 'contato_emergencia1', $this->contato_emergencia1])
            ->andFilterWhere(['ilike', 'parentesco1', $this->parentesco1])
            ->andFilterWhere(['ilike', 'contato_emergencia2', $this->contato_emergencia2])
            ->andFilterWhere(['ilike', 'parentesco2', $this->parentesco2])
            ->andFilterWhere(['ilike', 'tipo_sangue', $this->tipo_sangue])
            ->andFilterWhere(['ilike', 'historico_familiar', $this->historico_familiar]);

        return $dataProvider;
    }
}
