<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Entradasbitacora;

/**
 * EntradasbitacoraSearch represents the model behind the search form about `app\models\Entradasbitacora`.
 */
class EntradasbitacoraSearch extends Entradasbitacora
{
    public $fecha_desde;
    public $fecha_hasta;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'tipoentradabitacora_id'], 'integer'],
            [['fechaentrada', 'fecha_desde', 'fecha_hasta', 'entrada'], 'safe'],
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
        $query = Entradasbitacora::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort'=> ['defaultOrder' => ['fechaentrada'=>SORT_DESC]]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'tipoentradabitacora_id' => $this->tipoentradabitacora_id,
           // 'fechaentrada' => $this->fechaentrada,
        ]);
        $query->andFilterWhere(['like', 'fechaentrada', $this->fechaentrada]);

        $query->andFilterWhere(['>=', 'fechaentrada', $this->fecha_desde]);

        $query->andFilterWhere(['<=', 'fechaentrada', $this->fecha_hasta]);
        
        $query->andFilterWhere(['like', 'entrada', $this->entrada]);

        return $dataProvider;
    }
}
