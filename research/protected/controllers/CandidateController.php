<?php

class CandidateController extends Controller
{
	
	public function actionDemographics()
	{
		$model = new CandidateDemographics;
	if(isset($_POST['CandidateDemographics']))
    {
        $model->attributes=$_POST['CandidateDemographics'];
        if($model->validate())
        {
            // form inputs are valid, do something here
            return;
        }
    }
    $this->render('demographics',array('model'=>$model));	
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

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
	public function actionCreate()
{
    	$model=new CandidateDemographics;

    		if(isset($_POST['CandidateDemographics']))
    		{
        	$model->attributes=$_POST['CandidateDemographics'];
        	if($model->save())
                    {
                        $this->redirect(Yii::app()->user->returnUrl);
                    }   
   		}
		
    		$this->render('create',array(
        	'model'=>$model,
   	 ));
                      
}
}
