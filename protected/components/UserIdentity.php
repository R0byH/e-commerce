<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
   private $_id;
   private $_idrol;
   private $_idpaciente;
    
    public function authenticate()
    {
        $usuario=strtolower($this->username);
        $password=strtolower($this->password);
        $sql="SELECT idusuario, idrol fROM usuario WHERE usuario='".$usuario."' and clave='".$password."' and estado=1";
        //$sql="{call autentificar( :usuario, :password)}";
        
        //$password_hash = md5('$cristina$'.$this->password);
        $connection = Yii::app()->db;
        $command=$connection->createCommand($sql);
        $command->bindParam(":usuario",$usuario,PDO::PARAM_STR);
        $command->bindParam(":password",$password,PDO::PARAM_STR);
        $filas = $command->queryAll();
        
        if (isset($filas[0])) 
           {  
            $this->errorCode=self::ERROR_NONE;
            Yii::app()->session['idusuario'] =$filas[0]['idusuario'];
            Yii::app()->session['idrol'] =$filas[0]['idrol'];
            Yii::app()->session['idpaciente'] = 0;
            //$this->setState('id_rol', $filas[0]['idrol']->id_rol);
           if ($filas[0]['idusuario']==0)
           {
           $this->errorCode=self::ERROR_USERNAME_INVALID;                            
           }       
            else {       
            $this->_id=$filas[0]['idusuario'];
            $this->_idrol=trim($filas[0]['idrol']);
            $this->_idpaciente=0;
            }
            }
        else
            {
            $this->errorCode=self::ERROR_USERNAME_INVALID;                        
            }
        return $this->errorCode==self::ERROR_NONE;
    }
 
    public function getId()
    {
        return $this->_id;
    }
    
    /*
	public function authenticate()
	{
		$users=array(
			// username => password
			'demo'=>'demo',
			'cherbas'=>'123',
                        //'cherbas'=>'123','admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}
    
    
    
 }
*/
}