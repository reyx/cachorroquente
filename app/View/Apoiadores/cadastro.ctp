<? $this->set("title_for_layout", "Batata"); ?>

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
    echo $this->Form->create('Apoiador');
        echo $this->Form->input('email', array('class' => 'span12'));
        echo $this->Form->input('telefone', array('class' => 'span12 phone'));
        echo $this->Form->input('responsavel', array('class' => 'span12'));
        echo $this->Form->input('empresa', array('class' => 'span12'));
        echo $this->Html->tag('hr');
        echo $this->Form->submit('Enviar', array('class' => 'btn btn-large'));
    echo $this->Form->end();
?>
</div>
