<? $this->set("title_for_layout", "Batata"); ?>

<?
    $this->Html->css('web/form', null, array('inline' => false));
?>

<ul class="breadcrumb">
    <li>Qual o melhor Cachorro Quente de Osasco?</li>
</ul>

<strong>
    Os **20** finalistas participarão do 2º Festival do Cachorro Quente de Osasco e concorrerão a prêmios de milhares de reais.
</strong>

<div class="row-fluid">
<?
    echo $this->Form->create('Voto');
        echo $this->Form->input('email', array('label' => 'Seu e-mail (precisa ser válido)', 'class' => 'span12'));
?>
        <div class="row-fluid">
            <div class="span4">
                <? echo $this->Form->input('numero', array('label' => 'Nº de inscrição do dogueiro (encontrado em seu carrinho)', 'class' => 'span12 text-right')); ?>
                <div class="row-fluid text-center">
                    <input type="button" class="btn btn-large" value="7">
                    <input type="button" class="btn btn-large" value="8">
                    <input type="button" class="btn btn-large" value="9">
                </div>
                <br>
                <div class="row-fluid text-center">
                    <input type="button" class="btn btn-large" value="4">
                    <input type="button" class="btn btn-large" value="5">
                    <input type="button" class="btn btn-large" value="6">
                </div>
                <br>
                <div class="row-fluid text-center">
                    <input type="button" class="btn btn-large" value="1">
                    <input type="button" class="btn btn-large" value="2">
                    <input type="button" class="btn btn-large" value="3">
                </div>
                <br>
                <div class="row-fluid text-center">
                    <input type="button" class="btn btn-large" value="0">
                    <input type="button" class="btn btn-success btn-large" value="Validar">
                </div>
            </div>
            <div class="span6 offset1">
                <img src="http://celiaembalagens.com.br/sobrenos/01.jpg" alt="" class="img-polaroid span12">
                <strong>Claudio Junqueira</strong>
            </div>
        </div>
        <br>
        <hr>
        <small>Você pode votar apenas <span style="color:#FF0000; font-weight:bold;">uma vez por dia</span>. Qualquer outro voto no mesmo dia será invalidado.</small>

<?
        echo $this->Form->submit('Enviar', array('class' => 'btn btn-large'));
    echo $this->Form->end();
?>
</div>
<span style="background:#F2F2F2; font-style:italic; padding:5px;">Sistema de votação desenvolvido por: <a class="super" href="http://br.linkedin.com/pub/roberto-junior/22/b9a/447" target="_blank">Regis Silva</a></span>
