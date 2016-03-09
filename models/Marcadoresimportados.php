<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "marcadoresimportados".
 *
 * @property integer $idMarcador
 * @property string $urlMarcador
 * @property string $conceptoMarcador
 * @property integer $usoMarcador
 */
class Marcadoresimportados extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vmarcadoresimportados';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['urlMarcador', 'conceptoMarcador', 'usoMarcador'], 'required'],
            [['usoMarcador'], 'integer'],
            [['urlMarcador', 'conceptoMarcador'], 'string', 'max' => 400]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idMarcador' => 'Id Marcador',
            'urlMarcador' => 'Url Marcador',
            'conceptoMarcador' => 'Concepto Marcador',
            'usoMarcador' => 'Uso Marcador',
        ];
    }
}
