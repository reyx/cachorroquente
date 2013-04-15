<?
    class ImagesController extends AppController {

        public $helpers = array('Html', 'Form', 'Session');
        public $components = array('Session');

        var $layout = 'admin';
        var $scaffold = 'admin';

        public function admin_add() {
            try {
                $this->loadModel('Makingof');
                $this->set('makingofs',$this->Makingof->find('list'));

                if ($this->request->is('post')) {
                    $this->Image->create();
                    if ($this->request->is('post') || $this->request->is('put')) {
                        if ($this->Image->save($this->request->data)) {
                            $this->Session->setFlash('Imagem salva com sucesso!', 'default', array('class' => 'message success'));
                            $this->redirect(array('action' => 'index'));
                        } else {
                            $this->Session->setFlash('Não foi possível salvar a imagem.');
                        }
                    }
                }
            }
            catch(Exception $ex) {
                $this->Session->setFlash($ex->getMessage());
            }
        }

        public function admin_edit($id = null) {
            try {
                if (!$id) {
                    throw new NotFoundException(__('Invalid Image'));
                }

                $image = $this->Image->findById($id);
                if (!$image) {
                    throw new NotFoundException(__('Invalid Image'));
                }

                $this->loadModel('Makingof');
                $this->set('makingofs', $this->Makingof->find('list'));

                if ($this->request->is('post') || $this->request->is('put')) {
                    $this->Image->id = $id;
                    Debugger::dump($this->Image->id);
                    if ($this->Image->save($this->request->data)) {
                        $this->Session->setFlash('Imagem salva com sucesso!', 'default', array('class' => 'message success'));
                        $this->redirect(array('action' => 'index'));
                    } else {
                        $this->Session->setFlash('Não foi possível salvar a imagem.');
                    }
                }

                if (!$this->request->data) {
                    $this->request->data = $image;
                }
            }
            catch (Exception $ex) {
                $this->Session->setFlash($ex->getMessage());
            }
        }

    }
?>
