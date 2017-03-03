<?php

class UserController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('alluser','adduser','edituser','search','deleteuser'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionalluser()
	{
		$user = User::model();
		  $criteria = new CDbCriteria;
		  $banyakdata = $user->count($criteria);
		  $pages = new CPagination($banyakdata);
		  $pages->pageSize = 3;
		  
		  $pages->applyLimit($criteria);
		  $sort                    = new CSort('id');
		  $sort->defaultOrder      ='id DESC';
		  $sort->applyOrder($criteria);
		  $rows = $user->findAll($criteria);
          $this->render('alluser', array(
									  'rows' => $rows,
									  'tabel' => $user,
									  'pages' => $pages,
									  'ket' => 'View Login User',
                                                                          'keyword'=>''
									  ));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionadduser()
	{
		$model=new User;

		// Uncomment the following line if AJAX validation is needed

		// $this->performAjaxValidation($model);
		if(isset($_POST['User']))
		{
			$model->attributes = $_POST['User'];
			if($model->save()){
				$this->redirect(array('user/alluser','id'=>$model->id));
			}
		}
		$this->render('adduser',array(
			'model'=>$model,
		));

		
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionedituser($id)
	{
		$model=User::model()->findByPk($id);
		//$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
		
			if($model->save())
			{
					$this->redirect(array('user/alluser','status'=>'success'));
		
			}
		}
		
		$this->render('adduser',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actiondeleteuser($id)
	{
		$model = User::model()->findByPk($id);
		$model->delete();
		 $this->redirect(array('user/alluser'));
	}
	
	public function actionsearch()
	{
		  $namakat = $_GET['keyword'];
		  $user = User::model();
		  $criteria = new CDbCriteria;
		  $criteria->condition = "nama Like :kat";
		  $criteria->params = array('kat'=>"%$namakat%");
		  $banyakdata = $user->count($criteria);
		  $pages = new CPagination($banyakdata);
		  $pages->pageSize = 3;
		  
		  $pages->applyLimit($criteria);
		  $sort                    = new CSort('id');
		  $sort->defaultOrder      ='id DESC';
		  $sort->applyOrder($criteria);
		  $rows = $user->findAll($criteria);
          $this->render('alluser', array(
									  'rows' => $rows,
									  'tabel' => $user,
									  'pages' => $pages,
									  'keyword' => $namakat,
									  'ket' => 'Search Result:'
									  ));

    }

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('User');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new User('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['User']))
			$model->attributes=$_GET['User'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return User the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=User::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param User $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
