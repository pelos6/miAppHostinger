<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "salidas".
 *
 * @property string $fecha
 * @property string $distancia
 */
class Salidas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'salidas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha'], 'required'],
            [['fecha'], 'safe'],
            [['distancia'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fecha' => 'Fecha',
            'distancia' => 'Distancia',
        ];
    }
}
