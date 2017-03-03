<?php

class MemberController extends Controller
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
				'actions'=>array('allmember','addmember','editmember','search','deletemember'),
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
	public function actionallmember()
	{
		$member = Member::model();
		  $criteria = new CDbCriteria;
		  $banyakdata = $member->count($criteria);
		  $pages = new CPagination($banyakdata);
		  $pages->pageSize = 3;
		  
		  $pages->applyLimit($criteria);
		  $sort                    = new CSort('id');
		  $sort->defaultOrder      ='id DESC';
		  $sort->applyOrder($criteria);
		  $rows = $member->findAll($criteria);
          $this->render('allmember', array(
									  'rows' => $rows,
									  'tabel' => $member,
									  'pages' => $pages,
									  'ket' => 'View Member',
                                                                          'keyword'=>''
									  ));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionaddmember()
	{
		$model=new Member;

		// Uncomment the following line if AJAX validation is needed

		// $this->performAjaxValidation($model);
		if(isset($_POST['Member']))
		{
			$model->attributes = $_POST['Member'];
			if($model->save()){
				$this->redirect(array('member/allmember','id'=>$model->id));
			}
		}
		$this->render('addmember',array(
			'model'=>$model,
		));

		
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actioneditmember($id)
	{
		$model=Member::model()->findByPk($id);
		//$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Member']))
		{
			$model->attributes=$_POST['Member'];
		
			if($model->save())
			{
					$this->redirect(array('member/allmember','status'=>'success'));
		
			}
		}
		
		$this->render('addmember',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actiondeletemember($id)
	{
		$model = Member::model()->findByPk($id);
		$model->delete();
		 $this->redirect(array('member/allmember'));
	}
	
	public function actionsearch()
	{
		  $namakat = $_GET['keyword'];
		  $member = Member::model();
		  $criteria = new CDbCriteria;
		  $criteria->condition = "nama Like :kat OR alamat like :kat";
		  $criteria->params = array('kat'=>"%$namakat%");
		  $banyakdata = $member->count($criteria);
		  $pages = new CPagination($banyakdata);
		  $pages->pageSize = 3;
		  
		  $pages->applyLimit($criteria);
		  $sort                    = new CSort('id');
		  $sort->defaultOrder      ='id DESC';
		  $sort->applyOrder($criteria);
		  $rows = $member->findAll($criteria);
          $this->render('allmember', array(
									  'rows' => $rows,
									  'tabel' => $member,
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
		$dataProvider=new CActiveDataProvider('Member');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Member('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Member']))
			$model->attributes=$_GET['Member'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Member the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Member::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Member $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='member-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
