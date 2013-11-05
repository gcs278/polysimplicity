<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
	public function authenticate()
	{
		$record=Users::model()->findByAttributes(array('username'=>$this->username));
		if($record===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if(!$record->check($this->password))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
		{
			$this->_id=$record->id;
			//$this->setState('title', $record->title);
			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
	}

	public function getId()
	{
		return $this->_id;
	}
// This is a function that checks the field 'role'
  // in the User model to be equal to 1, that means it's admin
  // access it by Yii::app()->user->isAdmin()
  function isAdmin(){
    $user = $this->loadUser(Yii::app()->user->id);
    return intval($user->role) == 1;
  }
/**
     * Returns the static model of the specified AR class.
     * @return CActiveRecord the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
 
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'User';
    }
}
