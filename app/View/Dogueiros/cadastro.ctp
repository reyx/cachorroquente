<? $this->set("title_for_layout", "Batata"); ?>

<?
    $this->Html->css('web/form', null, array('inline' => false));
    $this->Html->script('jquery.maskedinput.min.js', array('inline' => false));
    $this->Html->scriptBlock('
        $("[data-mask=\"phone\"]").mask("(99) 9999-9999");
        $("[data-mask=\"cpf\"]").mask("999.999.999-99");
        ', array('inline' => false)
    );
?>

<ul class="breadcrumb">
    <li>Faça parte deste evento</li>
</ul>

<strong>
    Quer participar do evento que mudou a história de Osasco? Preencha o formulário
    abaixo e um representante entrará em contato. Será um prazer tê-lo conosco.
</strong>

<div class="row-fluid">
<?
    echo $this->Form->create('Dogueiro', array(
        'type' => 'file',
        'inputDefaults' => array(
            'format' => array('before', 'label', 'between', 'input', 'error', 'after'),
            'div' => array('class' => 'control-group'),
            'label' => array('class' => 'control-label'),
            'between' => '<div class="controls">',
            'after' => '</div>',
            'error' => array('attributes' => array('wrap' => 'span', 'class' => 'help-inline')),
        )));

        echo $this->Form->input('nome', array('label' => 'Nome completo', 'class' => 'span12'));
        echo $this->Form->input('cpf', array('label' => 'CPF', 'class' => 'span12', 'data-mask' => 'cpf'));
        echo $this->Form->input('telefone', array('label' => 'Telefone de contato', 'class' => 'span6', 'data-mask' => 'phone'));
        echo $this->Form->input('email', array('label' => 'Email', 'class' => 'span12'));
        echo $this->Form->input('foto', array('label' => 'Foto', 'type' => 'file'));
        echo $this->Form->input('foto_dir', array('type' => 'hidden'));
        echo $this->Form->input('numero', array('type' => 'hidden', 'default' => $numero));
        echo $this->Html->tag('hr');
        echo $this->Form->submit('Enviar', array('class' => 'btn btn-large'));
    echo $this->Form->end();
?>
</div>
