<?
    class ApoiadoresController extends AppController {
        public $helpers = array('Html', 'Form', 'Session');
        public $components = array('Session');

        public function index() {

        }

        public function cadastro() {
            if ($this->request->is('post')) {
                $this->Apoiador->create();
                if ($this->Apoiador->save($this->request->data)) {
                    $this->Session->setFlash('Your post has been saved.');
                    $this->redirect(array('action' => 'thanks'));
                } else {
                    $this->Session->setFlash('Unable to add your post.');
                }
            }
        }

        public function thanks() {

        }

    }
?>
