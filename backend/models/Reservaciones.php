<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reservaciones".
 *
 * @property double $idReserva
 * @property string $servicio
 * @property string $fllegada
 * @property int $adulto
 * @property int $nino
 * @property int $bebe
 * @property int $pax
 * @property string $hotel
 * @property string $localizado
 * @property string $cliente
 * @property string $email
 * @property string $telefono
 * @property string $celulaar
 * @property string $pais
 * @property string $direccion
 * @property string $ciudad
 * @property string $aerolineallegada
 * @property double $vuelollegada
 * @property string $horallegada
 * @property string $aerolineasalida
 * @property double $vuelosalida
 * @property string $comentarios
 * @property string $idproveedor
 * @property int $Activo
 * @property string $fsalida
 * @property string $idApoyo
 * @property string $Amenidades
 * @property string $fecha_captura
 * @property string $customer_service
 * @property string $costo
 * @property string $tipo_unidad
 * @property string $status
 */
class Reservaciones extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reservaciones';
    }
    public static function primaryKey()
    {
        return ['idReserva'];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idReserva', 'servicio', 'fllegada', 'adulto', 'nino', 'bebe', 'pax', 'hotel', 'localizado', 'cliente', 'email', 'telefono', 'celulaar', 'pais', 'direccion', 'ciudad', 'aerolineallegada', 'vuelollegada', 'horallegada', 'aerolineasalida', 'vuelosalida', 'comentarios', 'idproveedor', 'Activo', 'fsalida', 'idApoyo', 'status'], 'required'],
            [['idReserva', 'vuelollegada', 'vuelosalida'], 'number'],
            [['adulto', 'nino', 'bebe', 'pax', 'Activo'], 'integer'],
            [['fecha_captura'], 'safe'],
            [['servicio', 'hotel', 'localizado', 'email', 'pais', 'aerolineallegada', 'aerolineasalida'], 'string', 'max' => 50],
            [['fllegada', 'horallegada', 'idproveedor', 'fsalida', 'costo'], 'string', 'max' => 10],
            [['cliente', 'direccion', 'ciudad'], 'string', 'max' => 100],
            [['telefono', 'celulaar'], 'string', 'max' => 40],
            [['comentarios'], 'string', 'max' => 350],
            [['idApoyo', 'tipo_unidad', 'status'], 'string', 'max' => 200],
            [['Amenidades'], 'string', 'max' => 255],
            [['customer_service'], 'string', 'max' => 120],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idReserva' => Yii::t('app', 'Id Reserva'),
            'servicio' => Yii::t('app', 'Servicio'),
            'fllegada' => Yii::t('app', 'Fllegada'),
            'adulto' => Yii::t('app', 'Adulto'),
            'nino' => Yii::t('app', 'Nino'),
            'bebe' => Yii::t('app', 'Bebe'),
            'pax' => Yii::t('app', 'Pax'),
            'hotel' => Yii::t('app', 'Hotel'),
            'localizado' => Yii::t('app', 'Localizado'),
            'cliente' => Yii::t('app', 'Cliente'),
            'email' => Yii::t('app', 'Email'),
            'telefono' => Yii::t('app', 'Telefono'),
            'celulaar' => Yii::t('app', 'Celulaar'),
            'pais' => Yii::t('app', 'Pais'),
            'direccion' => Yii::t('app', 'Direccion'),
            'ciudad' => Yii::t('app', 'Ciudad'),
            'aerolineallegada' => Yii::t('app', 'Aerolineallegada'),
            'vuelollegada' => Yii::t('app', 'Vuelollegada'),
            'horallegada' => Yii::t('app', 'Horallegada'),
            'aerolineasalida' => Yii::t('app', 'Aerolineasalida'),
            'vuelosalida' => Yii::t('app', 'Vuelosalida'),
            'comentarios' => Yii::t('app', 'Comentarios'),
            'idproveedor' => Yii::t('app', 'Idproveedor'),
            'Activo' => Yii::t('app', 'Activo'),
            'fsalida' => Yii::t('app', 'Fsalida'),
            'idApoyo' => Yii::t('app', 'Id Apoyo'),
            'Amenidades' => Yii::t('app', 'Amenidades'),
            'fecha_captura' => Yii::t('app', 'Fecha Captura'),
            'customer_service' => Yii::t('app', 'Customer Service'),
            'costo' => Yii::t('app', 'Costo'),
            'tipo_unidad' => Yii::t('app', 'Tipo Unidad'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
