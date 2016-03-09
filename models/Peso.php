<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "peso".
 *
 * @property string $fecha
 * @property string $peso
 */
class Peso extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
       // return 'PESO';
        return 'peso';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha'], 'required'],
            [['fecha'], 'safe'],
            [['peso'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fecha' => 'Fecha',
            'peso' => 'Peso',
        ];
    }
}
