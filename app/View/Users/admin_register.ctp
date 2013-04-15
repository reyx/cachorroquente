<?
    $this->Html->css('web/form', null, array('inline' => false));
?>

<ul class="breadcrumb">
    <li>Cadastro</li>
</ul>

<strong>
    Cadastro de usuários
</strong>

<div class="row-fluid">
<?
    echo $this->Form->create('User');
        echo $this->Form->input('email', array('class' => 'span12'));
        echo $this->Form->password('senha', array('class' => 'span12', 'data-mask' => 'cpf'));
        echo $this->Html->tag('hr');
        echo $this->Form->submit('Enviar', array('class' => 'btn btn-large'));
    echo $this->Form->end();
?>
</div>
