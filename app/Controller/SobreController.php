<?
    class SobreController extends AppController {

        public function index() {

        }

        public function introducao() {

        }

        public function concurso() {

        }

        public function programacao() {
            $this->loadModel('Schedule');

            $schedule = $this->set('schedule', $this->Schedule->find('all'));
        }

        public function premiacoes() {

        }

        public function localizacao() {

        }

        public function equipe() {

        }

    }
?>
