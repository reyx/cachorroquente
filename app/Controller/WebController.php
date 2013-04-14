<?
    class WebController extends AppController {

        public function index() {
            $this->loadModel('Materia');

            $destaques = $this->Materia->find('all',
                array(
                    'conditions' => array('Materia.type <' => 3),
                    'order' => array('position')
                )
            );
            $chamadas = $this->Materia->find('all', array('conditions' => array('Materia.type =' => 3)));

            $this->set('destaques', $destaques);
            $this->set('chamadas', $chamadas);
        }

        public function bastidores() {
            $this->loadModel('Makingof');

            $this->set('makingofs', $this->Makingof->find('all'));
        }
    }
?>
