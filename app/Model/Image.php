<?
    class Image extends AppModel {

        var $belongsTo = array('Makingof'=>array('className'=>'Makingof'));

        public $actsAs = array(
            'Upload.Upload' => array(
                'img' => array(
                    'fields' => array(
                        'dir' => 'img_dir'
                    ),
                    # 'pathMethod' => 'flat'
                    # 'thumbnailMethod' => 'php',
                    'thumbnailSizes' => array(
                        'thumb' => '[130x77]'
                    )
                )
            )
        );

        public $validate = array(
            'img' => array(
                'rule' => 'isUnderPhpSizeLimit',
                'message' => 'File exceeds upload filesize limit'
            ),
            'img' => array(
                'rule' => 'isUnderFormSizeLimit',
                'message' => 'File exceeds form upload filesize limit'
            ),
            'img' => array(
                'rule' => 'tempDirExists',
                'message' => 'The system temporary directory is missing'
            ),
            'img' => array(
                'rule' => 'isSuccessfulWrite',
                'message' => 'File was unsuccessfully written to the server'
            ),
            'img' => array(
                'rule' => array('isWritable'),
                'message' => 'File upload directory was not writable'
            ),
            'img' => array(
                'rule' => array('isValidDir'),
                'message' => 'File upload directory does not exist'
            ),
            'img' => array(
                'rule' => array('isBelowMaxSize', 101024),
                'message' => 'File is larger than the maximum filesize'
            )
        );

    }
?>
