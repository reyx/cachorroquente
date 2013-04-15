<?
    class DogueirosController extends AppController {

        var $layout = 'admin';
        var $scaffold = 'admin';
        var $components = array('Auth');

        function beforeFilter(){
            $this->Auth->userModel = 'User';
            $this->Auth->allow(array('index', 'view'));
            $this->Auth->allow(array('obrigado', 'view'));
            $this->Auth->allow(array('cadastro', 'view'));
            $this->Auth->allow(array('voto', 'view'));
            $this->Auth->allow(array('top30', 'view'));
        }

        public function index() {
            $this->layout = 'default';
        }

        public function obrigado($id) {
            $this->layout = 'default';
            $dogueiro = $this->Dogueiro->find('first', array(
                'conditions' => array('id' => $id)
            ));
            $this->set('dogueiro', $dogueiro);
        }

        public function cadastro() {
            try {
                $this->layout = 'default';
                $this->set('numero', 400 + $this->Dogueiro->find('count'));

                if ($this->request->is('post')) {

                    $cpf = $this->request->data['Dogueiro']['cpf'];
                    $cpf = preg_replace("/[^a-zA-Z0-9]+/", "", $cpf);

                    $this->request->data['Dogueiro']['cpf'] = $cpf;

                    $conditions = array(
                        "cpf" => $cpf,
                        "OR" => array("email" => $this->request->data['Dogueiro']["email"])
                    );

                    if ($this->Dogueiro->hasAny($conditions)) {
                        $this->Dogueiro->set($this->Dogueiro->find('first', array(
                            'conditions' => $conditions
                        )));

                        $this->redirect(array('action' => 'obrigado', $this->Dogueiro->id));
                    }

                    $this->Dogueiro->create();
                    if ($this->request->is('post') || $this->request->is('put')) {
                        if ($this->Dogueiro->save($this->request->data)) {
                            $this->redirect(array('action' => 'obrigado', $this->Dogueiro->id));
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

        public function voto() {
            try {
                $this->layout = 'default';

                if ($this->request->is('post')) {
                    $this->Voto->create();
                    if ($this->request->is('post') || $this->request->is('put')) {
                        if ($this->Voto->save($this->request->data)) {
                            $this->redirect(array('action' => 'obrigado'));
                        } else {
                            $this->Session->setFlash('Não foi possível registrar o voto. Tente novamente.');
                        }
                    }
                }
            }
            catch(Exception $ex) {
                $this->Session->setFlash($ex->getMessage());
            }
        }

        public function top30($ano) {
            try {
                $this->layout = 'default';
                $this->loadModel('Classificacao');
                $list = $this->Classificacao->find('all',
                    array(
                        'conditions' => array('Classificacao.ano = ' => $ano),
                        'order' => array('Dogueiro.nome', 'Classificacao.posicao'),
                        'limit' => 30
                    )
                );
                $this->set('list', $list);
            }
            catch(Exception $ex) {
                $this->Session->setFlash($ex->getMessage());
                $this->set('list', null);
            }
        }

        private function getIP() {
            if (getenv("HTTP_CLIENT_IP"))
                return getenv("HTTP_CLIENT_IP");

            else if (getenv("HTTP_X_FORWARDED_FOR"))
                return getenv("HTTP_X_FORWARDED_FOR");

            else if (getenv("REMOTE_ADDR"))
                return getenv("REMOTE_ADDR");

            return "UNKNOWN";
        }

    }
?>
