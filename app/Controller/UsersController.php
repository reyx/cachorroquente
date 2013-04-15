<?
    class UsersController extends AppController {

        var $name = 'Users';
        var $scaffold = 'admin';
        var $components = array('Auth');

        function beforeFilter() {
            $this->Auth->userModel = 'User';
            $this->Auth->allow('*');
        }

        function admin_register() {
            if(!empty($this->data)) {
                // Here you should validate the username (min length, max length, to not include special chars, not existing already, etc)
                // As well as the password
                if($this->User->validates()) {
                    $this->User->save($this->data);
                    // Let's read the data we just inserted
                    $data = $this->User->read();
                    // Use it to authenticate the user
                    $this->Auth->login($data);
                    // Then redirect
                    $this->redirect('/');
                }
            }
        }

        function admin_login() {
            if(!empty($this->data)) {
                // If the username/password match
                if($this->Auth->login($this->data)) {
                    $this->redirect('/admin');
                } else {
                    $this->User->invalidate('email', 'Usuário ou senha inválidos!');
                }
            }
        }

        function admin_logout() {
            $this->Auth->logout();
            $this->redirect('/');
        }
    }
?>
