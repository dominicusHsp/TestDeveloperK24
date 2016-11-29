<?php
class UserIdentity extends CUserIdentity
{
 private $_id;
 private $level;
 
 /**
 * Authenticates a user.
 * @return boolean whether authentication succeeds.
 */
 public function authenticate()
 {
 $username = strtolower($this->username);
 $user = User::model()->find('LOWER(nama_member)=?', array($username));
 
 if($user===null)
   $this->errorCode=self::ERROR_USERNAME_INVALID;
 
 else if(!$user->check($this->password))
   $this->errorCode = self::ERROR_PASSWORD_INVALID;
 
 else{
   // successful login
   $this->_id = $user->idUser;
   $this->username = $user->nama_member;
   $this->setState('level', $user->level); //untuk memanggil level di database menggunakan EWebUser.php nanti
   $this->errorCode = self::ERROR_NONE;
 }
 return $this->errorCode == self::ERROR_NONE;
 }
 
 public function getId()
 {
   return $this->_id;
 }
}