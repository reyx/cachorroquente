<?
    echo $this->Form->create('Classificacao', array('type' => 'file'));
        echo $this->Form->input('dogueiro_id', array('label' => 'Dogueiro', 'type'=>'select','options'=>$dogueiros));
        echo $this->Form->input('ano', array('label' => 'Ano'));
        echo $this->Form->input('posicao', array('label' => 'Posição'));
    echo $this->Form->end('Enviar');
?>
