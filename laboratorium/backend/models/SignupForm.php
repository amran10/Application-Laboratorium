<?php
namespace backend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $nik;
    public $jadwal_id;
    public $nama;
    public $alamat;
    public $telepon;
    public $jabatan;
    public $jk;
    public $role;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            //['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            //  ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],

            [['nik','jadwal_id','nama','alamat','telepon','jabatan','jk','role'],'required'],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->nik = $this->nik;
        $user->jadwal_id = $this->jadwal_id;
        $user->nama = $this->nama;
        $user->alamat = $this->alamat;
        $user->telepon = $this->telepon;
        $user->jabatan = $this->jabatan;
        $user->jk = $this->jk;
        $user->role = $this->role;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }
}
