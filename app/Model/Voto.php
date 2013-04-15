<?
    class Voto extends AppModel {

        public $validate = array(
            'dogueiro_id' => array(
                'required' => true
            ),
            'email' => array(
                'required' => true
            ),
            'ip' => array(
                'required' => true
            )
        );

    }
?>
