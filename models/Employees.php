<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "EMPLOYEES".
 *
 * @property integer $EMPLOYEE_ID
 * @property string $FIRST_NAME
 * @property string $LAST_NAME
 * @property string $EMAIL
 * @property string $PHONE_NUMBER
 * @property string $HIRE_DATE
 * @property string $JOB_ID
 * @property string $SALARY
 * @property string $COMMISSION_PCT
 * @property integer $MANAGER_ID
 * @property integer $DEPARTMENT_ID
 */
class EMPLOYEES extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'EMPLOYEES';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['EMPLOYEE_ID'], 'required'],
            [['EMPLOYEE_ID', 'MANAGER_ID', 'DEPARTMENT_ID'], 'integer'],
            [['SALARY', 'COMMISSION_PCT'], 'number'],
            [['FIRST_NAME', 'PHONE_NUMBER'], 'string', 'max' => 20],
            [['LAST_NAME', 'EMAIL'], 'string', 'max' => 25],
            [['HIRE_DATE'], 'string', 'max' => 7],
            [['JOB_ID'], 'string', 'max' => 10],
            [['EMAIL'], 'unique'],
            [['EMPLOYEE_ID'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'EMPLOYEE_ID' => 'Employee  ID',
            'FIRST_NAME' => 'First  Name',
            'LAST_NAME' => 'Last  Name',
            'EMAIL' => 'Email',
            'PHONE_NUMBER' => 'Phone  Number',
            'HIRE_DATE' => 'Hire  Date',
            'JOB_ID' => 'Job  ID',
            'SALARY' => 'Salary',
            'COMMISSION_PCT' => 'Commission  Pct',
            'MANAGER_ID' => 'Manager  ID',
            'DEPARTMENT_ID' => 'Department  ID',
        ];
    }
}
