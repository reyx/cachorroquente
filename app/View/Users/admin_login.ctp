<?
    $this->Html->css('web/form', null, array('inline' => false));
?>

<ul class="breadcrumb">
    <li>Acesso</li>
</ul>

<div class="row-fluid">
<?
    echo $this->Form->create('User');
        echo $this->Form->input('email', array('label' => 'Email', 'class' => 'span12'));
        echo $this->Form->input('password', array('label' => 'Senha', 'class' => 'span12'));
        echo $this->Html->tag('hr');
        echo $this->Form->submit('Enviar', array('class' => 'btn btn-large'));
    echo $this->Form->end();
?>
</div>
