<?
    echo $this->Form->create('Materia', array('type' => 'file'));
        echo $this->Form->input('label', array('label' => 'Descrição'));
        echo $this->Form->input('type', array('label' => 'Formato de exibição', 'type'=>'select','options'=>$types));
        echo $this->Form->input('link', array('label' => 'Link'));
        echo $this->Form->input('program', array('label' => 'Programa'));
        echo $this->Form->input('position', array('label' => 'Posição'));
        echo $this->Form->input('title', array('label' => 'Título'));

        echo $this->Form->input('img', array('type' => 'file'));
        echo $this->Form->input('tmb', array('type' => 'hidden'));
    echo $this->Form->end('Enviar');
?>
