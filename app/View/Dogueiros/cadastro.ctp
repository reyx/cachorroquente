<? $this->Html->css('web/form', null, array('inline' => false)); ?>

<ul class="breadcrumb">
    <li>Faça parte deste evento</li>
</ul>

<strong>
    Quer participar do evento que mudou a história de Osasco? Preencha o formulário
    abaixo e um representante entrará em contato. Será um prazer tê-lo conosco.
</strong>

<div class="row-fluid">
<?
    echo $this->Form->create('Dogueiro', array('type' => 'file'));
        echo $this->Form->input('nome', array('class' => 'span12'));
        echo $this->Form->input('cpf', array('class' => 'span12'));
        echo $this->Form->input('telefone', array('class' => 'span6 phone'));
        echo $this->Form->input('email', array('class' => 'span12'));
        echo $this->Form->input('foto', array('type' => 'file'));
        echo $this->Form->input('foto_dir', array('type' => 'hidden'));
        echo $this->Form->input('numero', array('type' => 'hidden', 'default' => $numero));
        echo $this->Html->tag('hr');
        echo $this->Form->submit('Enviar', array('class' => 'btn btn-large'));
    echo $this->Form->end();
?>
</div>
