<?php 
 
namespace app\models; 
 
use Yii; 
use yii\base\Model; 
 
/** 
 * LoginForm is the model behind the login form. 
 * 
 * @property-read User|null $user 
 * 
 */ 
class RegistrationForm extends Model 
{ 
    public $username; 
    public $password; 
    public $RepeatedPassword; 
    public $rememberMe = true; 
 
    private $_user = false; 
 
 
    /** 
     * @return array the validation rules. 
     */ 
    public function rules() 
    { 
        return [ 
            // username and password are both required 
            [['username', 'password','RepeatedPassword'], 'required'], 
            // rememberMe must be a boolean value 
            ['rememberMe', 'boolean'], 
            [['password','RepeatedPassword'], 'validatePassword'], 
            ['username', 'validateUsername'], 
        ]; 
    } 
 
    public function attributeLabels(){ 
        return[       
            'username' => 'Имя пользователя', 
            'password' => 'Пароль', 
            'RepeatedPassword' => 'Повторный пароль', 
        ]; 
    } 
 
    public function validateUsername($attribute) 
    { 
        // $user = $this->getUser(); 
        $user = User::findByUsername($this->username); 
        if ($user) { 
            return $this->addError($attribute, 'Логин уже используется'); 
        } 
        else { 
            return true; 
        } 
    } 
 
        /** 
     * Validates the password. 
     * This method serves as the inline validation for password. 
     * 
     * @param string $attribute the attribute currently being validated 
     * @param array $params the additional name-value pairs given in the rule 
     */ 
    public function validatePassword($attribute, $params) 
    { 
        if (!$this->hasErrors()) { 
            if ($this->password != $this->RepeatedPassword) { 
                $this->addError($attribute, 'Неверный логин или пароль'); 
            } 
        } 
    } 
 
      /** 
    * Logs in a user using the provided username and password. 
      * @return bool whether the user is logged in successfully 
      */ 
      public function Registration() 
      { 
         $myuser = new User(); 
        if ($this->validate()){ 
            $myuser->username = $this->username;   
            $myuser->password = Yii::$app->getSecurity()->generatePasswordHash($this->password);   
            $myuser->save(); 
            Yii::$app->user->login($this->getUser()); 
            return true; 
        } 
        else { 
            return false; 
        } 
      } 
 
    /** 
     * Finds user by [[username]] 
     * 
     * @return User|null 
     */ 
    public function getUser() 
    { 
        if ($this->_user === false) { 
            $this->_user = User::findByUsername($this->username); 
        } 
 
        return $this->_user; 
    } 
}