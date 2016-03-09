<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Marcadoresimportados;

/**
 * MarcadoresimportadoSearch represents the model behind the search form about `app\models\Marcadoresimportados`.
 */
class MarcadoresimportadoSearch extends Marcadoresimportados
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idMarcador', 'usoMarcador'], 'integer'],
            [['urlMarcador', 'conceptoMarcador'], 'safe'],
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
        $query = Marcadoresimportados::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'idMarcador' => $this->idMarcador,
            'usoMarcador' => $this->usoMarcador,
        ]);

        $query->andFilterWhere(['like', 'urlMarcador', $this->urlMarcador])
            ->andFilterWhere(['like', 'conceptoMarcador', $this->conceptoMarcador]);

        return $dataProvider;
    }
}
