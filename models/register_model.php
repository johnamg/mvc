<?php

class Register_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function run()
    {
        $sth = $this->db->prepare("SELECT userid, role FROM user WHERE
                register = :register AND password = :password");
        $sth->execute(array(
            ':register' => $_POST['register'],
            ':password' => Hash::create('sha256', $_POST['password'], HASH_PASSWORD_KEY)
        ));

        $data = $sth->fetch();

        $count =  $sth->rowCount();
        if ($count > 0) {
            // register
            Session::init();
            Session::set('role', $data['role']);
            Session::set('loggedIn', true);
            Session::set('userid', $data['userid']);
            header('location: ../');
        } else {
            header('location: ../register');
        }

    }

    public function create($data)
    {
        $this->db->insert('user', array(
            'login' => $data['login'],
            'password' => Hash::create('sha256', $data['password'], HASH_PASSWORD_KEY),
            'role' => $data['role']
        ));
    }

}
