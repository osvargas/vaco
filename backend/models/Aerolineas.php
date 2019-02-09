<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aerolineas".
 *
 * @property int $id
 * @property string $aerolinea
 * @property int $terminal
 * @property string $acronimo
 */
class Aerolineas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aerolineas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['terminal'], 'integer'],
            [['aerolinea'], 'string', 'max' => 100],
            [['acronimo'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app','ID'),
            'aerolinea' => Yii::t('app','Aerolinea'),
            'terminal' => Yii::t('app','Terminal'),
            'acronimo' => Yii::t('app','Acronimo'),
        ];
    }
}
