<?
    class Apoiador extends AppModel {
        public $validate = array(
            'email' => array(
                'rule' => 'notEmpty'
            ),
            'telefone' => array(
                'rule' => 'notEmpty'
            ),
            'responsavel' => array(
                'rule' => 'notEmpty'
            )
        );
    }
?>
