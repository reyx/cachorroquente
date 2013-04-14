<?
    echo $this->Form->create('Image', array('type' => 'file'));
        echo $this->Form->input('label');
        echo $this->Form->input('makingof_id', array('type'=>'select','options'=>$makingofs));
        echo $this->Form->input('img', array('type' => 'file'));
        echo $this->Form->input('tmb', array('type' => 'hidden'));
    echo $this->Form->end('Enviar');
?>
