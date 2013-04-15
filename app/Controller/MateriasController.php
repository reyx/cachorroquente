<?
    class MateriasController extends AppController {

        public $helpers = array('Html', 'Form', 'Session');
        public $components = array('Session');

        var $layout = 'admin';
        var $scaffold = 'admin';

        public function admin_add() {
            try {
                $this->set('types',array('Link', 'Youtube', 'Chamada'));

                if ($this->request->is('post')) {
                    $this->Materia->create();
                    if ($this->request->is('post') || $this->request->is('put')) {
                        if ($this->Materia->save($this->request->data)) {
                            $this->Session->setFlash('Matéria salva com sucesso!', 'default', array('class' => 'message success'));
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

                $materia = $this->Materia->findById($id);
                if (!$materia) {
                    throw new NotFoundException(__('Invalid Image'));
                }

                $this->set('types',array('Link', 'Youtube', 'Chamada'));

                if ($this->request->is('post') || $this->request->is('put')) {
                    $this->Materia->id = $id;
                    Debugger::dump($this->Materia->id);
                    if ($this->Materia->save($this->request->data)) {
                        $this->Session->setFlash('Matéria salva com sucesso!', 'default', array('class' => 'message success'));
                        $this->redirect(array('action' => 'index'));
                    } else {
                        $this->Session->setFlash('Não foi possível salvar a imagem.');
                    }
                }

                if (!$this->request->data) {
                    $this->request->data = $materia;
                }
            }
            catch (Exception $ex) {
                $this->Session->setFlash($ex->getMessage());
            }
        }

    }
?>
