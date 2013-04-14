<? echo $this->Html->link(
    $this->Html->image("web/logo.png", array("alt" => "2º Festival do Cachorro Quente de Osasco - SP", "title" => "2º Festival do Cachorro Quente de Osasco - SP", "id" => "lateral_logo")),
    "/",
    array('escape' => false)
) ?>
<? # <a href="top30"><img id="lateral_botao" src="images/menu_button_top30.png" alt="Os 30 Finalistas" title="Os 30 Finalistas" border="0" /></a> ?>
<? # <a href="votacao"><img id="lateral_botao" src="images/menu_button_votacao_aberta.png" alt="Vote no seu dogueiro" title="Vote no seu dogueiro" border="0" /></a> ?>
<? echo $this->Html->link(
    $this->Html->image("web/menu_button_vencedores.png", array("alt" => "Os Vencedores de 2012", "title" => "Os Vencedores de 2012", "id" => "lateral_botao")),
    "/pages/vencedores",
    array('escape' => false)
) ?>
<? # <a href="http://www.peticaopublica.com.br/?pi=FCQO" target="_blank"><img id="lateral_botao" src="images/menu_button_abaixoassinado.png" alt="Assine a petição" title="Assine a petição" border="0" /></a> ?>
<ul class="nav">
    <li><? echo $this->Html->link('Os 30 melhores de Osasco', array('controller' => 'dogueiros', 'action' => 'top30')) ?><? /*
    <li><? echo $this->Html->link('Nossos Apoiadores', array('controller' => 'apoiadores', 'action' => 'index')) ?></li> */ ?>
    <li><? echo $this->Html->link('Seja um apoiador', array('controller' => 'apoiadores', 'action' => 'cadastro')) ?></li>
    <li><? echo $this->Html->link('Sobre o Festival', array('controller' => 'pages', 'action' => 'index')) ?></li>
    <ul>
        <li><? echo $this->Html->link('Introdução', array('controller' => 'sobre', 'action' => 'introducao')) ?></li>
        <li><? echo $this->Html->link('Repercussão 2012', array('controller' => 'pages', 'action' => 'index')) ?></li>
        <li><? echo $this->Html->link('Bastidores / Making-Ofs 2012', array('controller' => 'web', 'action' => 'bastidores')) ?></li>
        <li><? echo $this->Html->link('O Concurso', array('controller' => 'sobre', 'action' => 'concurso')) ?></li>
        <li><? echo $this->Html->link('Programação', array('controller' => 'sobre', 'action' => 'programacao')) ?></li>
        <li><? echo $this->Html->link('Premiações', array('controller' => 'sobre', 'action' => 'premiacoes')) ?></li>
        <li><? echo $this->Html->link('Localização', array('controller' => 'sobre', 'action' => 'localizacao')) ?></li>
        <li><? echo $this->Html->link('Equipe', array('controller' => 'sobre', 'action' => 'equipe')) ?></li>
    </ul>
    <li><? echo $this->Html->link('Fale Conosco', array('controller' => 'pages', 'action' => 'contato')) ?></li>
</ul>

<small>Veja também:</small>
<ul class="nav">
    <li><? echo $this->Html->link('História do Cachorro Quente', array('controller' => 'pages', 'action' => 'historia')) ?></li>
    <li><? echo $this->Html->link('O Município de Osasco', array('controller' => 'pages', 'action' => 'osasco')) ?></li>
</ul>

<div class="addthis_toolbox addthis_32x32_style addthis_default_style">
    <a class="addthis_button_facebook_follow" addthis:userid="festivaldocachorroquente"></a>
    <a class="addthis_button_twitter_follow" addthis:userid="hotdogosasco"></a>
</div>
<br>

<small>Criação e desenvolvimento:</small> <br>
<? # <a href="http://www.temperini.com.br" target="_blank"><img src="images/evandro_temperini.png" alt="Evandro Temperini" title="Evandro Temperini" border="0"/></a></span> ?>
<? echo $this->Html->link(
    $this->Html->image("web/evandro_temperini.png", array("alt" => "Evandro Temperini", "title" => "Evandro Temperini", "target" => "_blank")),
    "http://br.linkedin.com/in/temperini",
    array('escape' => false)
) ?>
