<?
    App::uses('BrValidation', 'Localized.Validation');

    class Dogueiro extends AppModel {

        var $hasMany = array('Classificacoes' => array('className' => 'Classificacao'));

        public $_schema = array(
            'numero' => array('type' => 'string', 'length' => 11),
            'nome' => array('type' => 'string', 'length' => 155),
            'email' => array('type' => 'string', 'length' => 155),
            'foto' => array('type' => 'string', 'length' => 255, 'null' => true),
            'foto_dir' => array('type' => 'string', 'length' => 255, 'null' => true),
            'cpf' => array('type' => 'string', 'length' => 11),
            'telefone' => array('type' => 'string', 'length' => 20)
        );

        public $validate = array(
            'email' => array(
                'rule' => 'isUnique',
                'message' => 'Email já existente.'
            ),
            'nome' => array('allowEmpty' => false),
            'cpf' => array(
                'allowEmpty' => false,
                'valid' => array(
                    'rule' => array('ssn', null, 'br'),
                    'message' => 'CPF inválido'
                )
            )
        );

    }
?>
