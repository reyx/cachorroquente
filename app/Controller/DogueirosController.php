<?
    class DogueirosController extends AppController {

        var $layout = 'admin';
        var $scaffold = 'admin';

        public function index() {
            $this->layout = 'default';

        }

        public function obrigado() {
            $this->layout = 'default';
            $dogueiro = $this->Dogueiro->find('first', array(
                'order' => array('id' => 'desc')
            ));
            $this->set('dogueiro', $dogueiro);
        }

        public function cadastro() {
            try {
                $this->layout = 'default';
                $this->set('numero', 400 + $this->Dogueiro->find('count'));

                if ($this->request->is('post')) {
                    $this->Dogueiro->create();
                    if ($this->request->is('post') || $this->request->is('put')) {
                        if ($this->Dogueiro->save($this->request->data)) {
                            $this->redirect(array('action' => 'obrigado'));
                        } else {
                            $this->Session->setFlash('Não foi possível concluir o cadastro. Tente novamente.');
                        }
                    }
                }
            }
            catch(Exception $ex) {
                $this->Session->setFlash($ex->getMessage());
            }
        }

        public function top30() {
            try {
                $this->layout = 'default';
                $this->loadModel('Classificacao');
                $list = $this->Classificacao->find('all',
                    array(
                        'conditions' => array('Classificacao.ano = ' => date('Y')),
                        'order' => array('Dogueiro.nome', 'Classificacao.posicao'),
                        'limit' => 30
                    )
                );
                $this->set('list', $list);
            }
            catch(Exception $ex) {
                $this->Session->setFlash($ex->getMessage());
                Debugger::dump($ex->getMessage());
                $this->set('list', null);
            }
        }

    }
?>
