<?php

namespace app\controllers;

use Yii;
use app\models\Entradasbitacora;
use app\models\Tipoentradasbitacora;
use app\models\EntradasbitacoraSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\data\SqlDataProvider;

/**
 * EntradasbitacoraController implements the CRUD actions for Entradasbitacora model.
 */
class EntradasbitacoraController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Entradasbitacora models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EntradasbitacoraSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

/*public function actionIndex()
    {
    $totalCount = Yii::$app->db->createCommand('SELECT COUNT(*) FROM entradasbitacora ')
            ->queryScalar();

$dataProvider = new SqlDataProvider([
    'sql' => 'SELECT * FROM entradasbitacora ',
    'totalCount' => $totalCount,
    //'sort' =>false, to remove the table header sorting
    'sort' => [
        'attributes' => [
            'title' => [
                'asc' => ['title' => SORT_ASC],
                'desc' => ['title' => SORT_DESC],
                'default' => SORT_DESC,
                'label' => 'Post Title',
            ],
            'author' => [
                'asc' => ['author' => SORT_ASC],
                'desc' => ['author' => SORT_DESC],
                'default' => SORT_DESC,
                'label' => 'Name',
            ],
            'created_on'
        ],
    ],
    'pagination' => [
        'pageSize' => 10,
    ],
]);

return $dataProvider;
}*/

    /**
     * Displays a single Entradasbitacora model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Entradasbitacora model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
 /*   public function actionCreate()
    {
        $model = new Entradasbitacora();
        $items=ArrayHelper::map(Tipoentradasbitacora::find()->all(),'idtipoentradabitacora','tipoentradabitacora');
       // error_log ('en actionCreate');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
           // error_log ('en actionCreate 1');
            return $this->redirect(['index']);
           // return $this->redirect(['view', 'id' => $model->identradabitacora]);
        } else {
          //  error_log ('en actionCreate 2');
            return $this->render('create', [
                'model' => $model, 'items'=> $items 
            ]);
        }
    }*/

  /**
     * Creates a new Entradasbitacora model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Entradasbitacora();
        ini_set('date.timezone','Europe/Madrid');  
        $model->fechaentrada = date("Y-m-d H:i:s");  //'1960-01-12';
        // error_log ('DEBUG JAVIER: en actionCreate 1');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
           // \yii\caching\TagDependency::invalidate(Yii::$app->cache, 'books');
            // error_log ('en actionCreate 2');
            return $this->redirect(['index']);
           //return $this->redirect(['view', 'id' => $model->id]);
        } else {
           /* echo ('<pre>');
            print_r($model->getErrors());
            echo ('</pre>');*/
           //  error_log ('en actionCreate 3 ');
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Entradasbitacora model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
           //return $this->redirect(['view', 'id' => $model->identradabitacora]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Entradasbitacora model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Entradasbitacora model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Entradasbitacora the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Entradasbitacora::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
