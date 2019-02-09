<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hoteles".
 *
 * @property int $id
 * @property string $value
 * @property string $Location
 */
class Hoteles extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hoteles';
    }
    public static function primaryKey()
    {
        return ['id'];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['value', 'Location'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'value' => Yii::t('app', 'Value'),
            'Location' => Yii::t('app', 'Location'),
        ];
    }
}
