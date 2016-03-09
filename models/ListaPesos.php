<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "listaPesos".
 *
 * @property string $fecha
 * @property string $peso
 */
class ListaPesos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
       // return 'PESO';
        return 'listaPesos';
    }


    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pesos' => 'Peso',
        ];
    }
}
