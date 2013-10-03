<?php

class CandidateController extends Controller
{
	public $layout = '//layouts/column2';
	public function actionDemographics()
	{
		$model = new CandidateDemographics;
                $dataProvider=new CActiveDataProvider('CandidateDemographics');
                
		if(isset($_POST['CandidateDemographics']))
                {
                	$model->attributes=$_POST['CandidateDemographics'];
                	if($model->save())
                    	{
                       		$this->redirect(Yii::app()->user->returnUrl);
                    	}
                }

                $this->render('demographics',array(
                'model'=>$model,
		'dataProvider'=>$dataProvider,
		));
	}

        public function accessRules()
        {
                return array(
                        array('allow', // allow authenticated user to perform 'create' and 'update' actions
                                'actions'=>array('update','view','index','demographics'),
                                'roles'=>array('authenticated'),
                        ),
                        array('allow', // allow admin user to perform 'admin' and 'delete' actions
                                'actions'=>array('delete','view','index','update','demographics'),
                                'roles'=>array('admin'),
                        ),
                        array('deny',  // deny all users
                                'users'=>array('*'),
                        ),
                );
        }

	// Uncomment the following methods and override them if needed
	
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'accessControl',
			'postOnly + delete',	
		);
	}
	/*
	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
        public function loadModel($id)
        {
                $model=CandidateDemographics::model()->findByPk($id);
                if($model===null)
                        throw new CHttpException(404,'The requested page does not exist.');
                return $model;
        }

        public function actionView($id)
        {
                $this->render('view',array(
                        'model'=>$this->loadModel($id),
                ));
        }

        /**
         * Lists all models.
         */
        public function actionIndex()
        {
		$model = new CandidateDemographics('search');
		$model->unsetAttributes();

		if(isset($_GET['CandidateDemographics']))
			$model->attributes=$_GET['CandidateDemographics'];		

                $dataProvider=new CActiveDataProvider('CandidateDemographics');
                $this->render('index',array(
			'model'=>$model,
                        'dataProvider'=>$dataProvider,
                ));
        }
	
        /**
         * Updates a particular model.
         * If update is successful, the browser will be redirected to the 'view' page.
         * @param integer $id the ID of the model to be updated
         */
        public function actionUpdate($id)
        {
                $model=$this->loadModel($id);

                // Uncomment the following line if AJAX validation is needed
                // $this->performAjaxValidation($model);

                if(isset($_POST['CandidateDemographics']))
                {
                        $model->attributes=$_POST['CandidateDemographics'];
                        if($model->save())
                                $this->redirect(array('view','id'=>$model->id));
                }
                $this->render('update',array(
                        'model'=>$model,
                ));
        }
        public function actionDelete($id)
        {
                $this->loadModel($id)->delete();

                // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
                if(!isset($_GET['ajax']))
                        $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        }


}
