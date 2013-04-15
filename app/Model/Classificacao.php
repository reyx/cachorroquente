<?
    class Classificacao extends AppModel {
        public $name = 'Classificacao';
        var $belongsTo = array('Dogueiro'=>array('className'=>'Dogueiro'));
    }
?>
