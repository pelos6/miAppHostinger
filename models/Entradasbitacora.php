<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "entradasbitacora".
 *
 * @property string $id
 * @property string $id_tipoentradabitacora
 * @property string $fechaentrada
 * @property string $entrada
 *
 * @property Tipoentradasbitacora $tipoentradabitacora
 */
class Entradasbitacora extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'entradasbitacora';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
           // [['id', 'entrada'], 'required'],
        // el id lo da mySql
            [['entrada'], 'required'],
            [['id'], 'integer'],
            [['fechaentrada'], 'safe'],
            [['tipoentradabitacora_id'], 'integer'],
            [['tipoentradabitacora_id'], 'exist', 'targetClass'=>'\app\models\Tipoentradasbitacora', 'targetAttribute'=>'id', 'message'=> 'This tipoentradabitacora doesn\'t exist'],
            [['entrada'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
         return [
            'id' => 'Cod. Entrada',
            'tipoentradabitacora_id' => 'Cod. Tipo Entrada',
            'fechaentrada' => 'Fecha Entrada',
            'entrada' => 'Entrada',
        ];
 /* --The message file for category 'app' does not exist:  
      return [
            'id' => Yii::t('app', 'Cod. Entrada'),
            'tipoentradabitacora_id' => Yii::t('app', 'Cod. Tipo Entrada'),
            'fechaentrada' => Yii::t('app', 'Fecha Entrada'),
            'entrada' => Yii::t('app', 'Entrada'),
        ];*/
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoentradabitacora()
    {
        return $this->hasOne(Tipoentradasbitacora::className(), ['id' => 'tipoentradabitacora_id']);
    }
}
