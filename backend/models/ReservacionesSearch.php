<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Reservaciones;

/**
 * ReservacionesSearch represents the model behind the search form of `app\models\Reservaciones`.
 */
class ReservacionesSearch extends Reservaciones
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idReserva', 'vuelollegada', 'vuelosalida'], 'number'],
            [['servicio', 'fllegada', 'hotel', 'localizado', 'cliente', 'email', 'telefono', 'celulaar', 'pais', 'direccion', 'ciudad', 'aerolineallegada', 'horallegada', 'aerolineasalida', 'comentarios', 'idproveedor', 'fsalida', 'idApoyo', 'Amenidades', 'fecha_captura', 'customer_service', 'costo', 'tipo_unidad', 'status'], 'safe'],
            [['adulto', 'nino', 'bebe', 'pax', 'Activo'], 'integer'],
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
        $query = Reservaciones::find();

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
            'idReserva' => $this->idReserva,
            'adulto' => $this->adulto,
            'nino' => $this->nino,
            'bebe' => $this->bebe,
            'pax' => $this->pax,
            'vuelollegada' => $this->vuelollegada,
            'vuelosalida' => $this->vuelosalida,
            'Activo' => $this->Activo,
            'fecha_captura' => $this->fecha_captura,
        ]);

        $query->andFilterWhere(['like', 'servicio', $this->servicio])
            ->andFilterWhere(['like', 'fllegada', $this->fllegada])
            ->andFilterWhere(['like', 'hotel', $this->hotel])
            ->andFilterWhere(['like', 'localizado', $this->localizado])
            ->andFilterWhere(['like', 'cliente', $this->cliente])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'telefono', $this->telefono])
            ->andFilterWhere(['like', 'celulaar', $this->celulaar])
            ->andFilterWhere(['like', 'pais', $this->pais])
            ->andFilterWhere(['like', 'direccion', $this->direccion])
            ->andFilterWhere(['like', 'ciudad', $this->ciudad])
            ->andFilterWhere(['like', 'aerolineallegada', $this->aerolineallegada])
            ->andFilterWhere(['like', 'horallegada', $this->horallegada])
            ->andFilterWhere(['like', 'aerolineasalida', $this->aerolineasalida])
            ->andFilterWhere(['like', 'comentarios', $this->comentarios])
            ->andFilterWhere(['like', 'idproveedor', $this->idproveedor])
            ->andFilterWhere(['like', 'fsalida', $this->fsalida])
            ->andFilterWhere(['like', 'idApoyo', $this->idApoyo])
            ->andFilterWhere(['like', 'Amenidades', $this->Amenidades])
            ->andFilterWhere(['like', 'customer_service', $this->customer_service])
            ->andFilterWhere(['like', 'costo', $this->costo])
            ->andFilterWhere(['like', 'tipo_unidad', $this->tipo_unidad])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
