<?
    class ClassificacoesController extends AppController {

        public $helpers = array('Html', 'Form', 'Session');
        public $components = array('Session');

        var $layout = 'admin';
        var $scaffold = 'admin';

        public function admin_add() {
            try {
                $this->loadModel('Dogueiro');
                $this->set('dogueiros',$this->Dogueiro->find('list', array(
                    'fields' => array('Dogueiro.id', 'Dogueiro.nome')
                )));

                if ($this->request->is('post')) {
                    $this->Classificacao->create();
                    if ($this->request->is('post') || $this->request->is('put')) {
                        Debugger::dump($this->request->data);
                        if ($this->Classificacao->save($this->request->data)) {
                            $this->Session->setFlash('Classificação salva com sucesso!', 'default', array('class' => 'message success'));
                            $this->redirect(array('action' => 'index'));
                        } else {
                            $this->Session->setFlash('Não foi possível salvar a Classificação.');
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
                    throw new NotFoundException(__('Invalid Classificacao'));
                }

                $Classificacao = $this->Classificacao->findById($id);
                if (!$Classificacao) {
                    throw new NotFoundException(__('Invalid Classificacao'));
                }

                $this->loadModel('Dogueiro');
                $this->set('Dogueiros', $this->Dogueiro->find('list'));

                if ($this->request->is('post') || $this->request->is('put')) {
                    $this->Classificacao->id = $id;
                    Debugger::dump($this->Classificacao->id);
                    if ($this->Classificacao->save($this->request->data)) {
                        $this->Session->setFlash('Classificação salva com sucesso!', 'default', array('class' => 'message success'));
                        $this->redirect(array('action' => 'index'));
                    } else {
                        $this->Session->setFlash('Não foi possível salvar a Classificação.');
                    }
                }

                if (!$this->request->data) {
                    $this->request->data = $Classificacao;
                }
            }
            catch (Exception $ex) {
                $this->Session->setFlash($ex->getMessage());
            }
        }

    }
?>
