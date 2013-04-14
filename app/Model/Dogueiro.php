<?
    class Dogueiro extends AppModel {

        public $_schema = array(
            'numero' => array('type' => 'string', 'length' => 11),
            'nome' => array('type' => 'string', 'length' => 155),
            'email' => array('type' => 'string', 'length' => 155),
            'foto' => array('type' => 'string', 'length' => 255, 'null' => true),
            'foto_dir' => array('type' => 'string', 'length' => 255, 'null' => true),
            'cpf' => array('type' => 'string', 'length' => 11),
            'telefone' => array('type' => 'string', 'length' => 20)
        );

        public $actsAs = array(
            'Upload.Upload' => array(
                'foto' => array(
                    'fields' => array(
                        'dir' => 'foto_dir'
                    ),
                    # 'pathMethod' => 'flat'
                    'thumbnailMethod' => 'php',
                    'thumbnailSizes' => array(
                        'thumb' => '[120x120]'
                    )
                )
            )
        );

        public $validate = array(
            'numero' => array(
                'rule' => 'notEmpty'
            ),
            'nome' => array(
                'rule' => 'notEmpty'
            ),
            'email' => array(
                'rule' => 'notEmpty'
            ),
            'cpf' => array(
                'rule' => 'notEmpty'
            ),
            'telefone' => array(
                'rule' => 'notEmpty'
            )
        );

    }
?>
