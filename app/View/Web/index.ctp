<? $this->Html->css('web/base', null, array('inline' => false)); ?>

<ul class="breadcrumb">
    <li><a href="/sobre/introducao">Sobre o Festival</a> <span class="divider">&raquo;</span></li>
    <li>Repercussão em 2012</li>
</ul>

<p><a href="/media/web/release2013.pdf" class="super" target="_blank">Baixe o release completo (.PDF)</a></p>

<p class="align-center">
    <object width="560" height="315">
        <param name="movie" value="http://www.youtube.com/v/Inek0d0ZhqM?version=3&amp;hl=pt_BR">
        <param name="allowFullScreen" value="true">
        <param name="allowscriptaccess" value="always">
        <param name="wmode" value="transparent">
        <embed src="http://www.youtube.com/v/Inek0d0ZhqM?version=3&amp;hl=pt_BR" width="560" type="application/x-shockwave-flash" height="315" allowscriptaccess="always" allowfullscreen="true" movie="http://www.youtube.com/v/Inek0d0ZhqM?version=3&amp;hl=pt_BR" wmode="transparent">
    </object>
</p>

<p>
    A fama do cachorro quente de Osasco cruzou o Oceano Atlântico, chegando
    até a Itália, de onde recebemos a visita de “Stefano Marras” <em>(Ph.D.,
    Research Fellow Department of Sociology and Social Research – Università
    degli Studi di Milano-Bicocca)</em> que vem percorrendo o mundo com um
    documentário sobre comidas de rua que será apresentado em um livro e um
    vídeo, por ocasião da <strong> <em>Expo Milão 2015</em></strong>, sobre
    o tema <em>"Alimentação do planeta. Energia para a vida“</em>.
</p>

<p>
    Em fevereiro de 2012, a poderosa <strong>TV Globo</strong> (Programa SPTV
    11/2) assestou suas objetivas para a realização, proclamando Osasco como
    <em> <strong>“A segunda cidade que mais consome cachorro-quente no mundo,
    atrás apenas de Nova Iorque”</strong> </em> – <em>Revista Viver
    Osasco</em>
</p>

<p>Outras emissoras seguiram o mesmo caminho, apresentado Osasco como a <strong>“Capital do Cachorro Quente”</strong>...</p>

<p class="align-center">
    <img src="/img/web/logos_emissoras.jpg" alt="Globo, Record, Band, SBT, Rede TV!, TV Osasco, NGT" title="Globo, Record, Band, SBT, Rede TV!, TV Osasco, NGT" class="img-polaroid">
</p>

<p>
    O evento ocupou espaço nas principais emissoras do país, em programas de
    grande audiência e em horários nobres, sendo alguns deles: SPTV, Claquete
    (Otavio Mesquita), Dia a Dia, Jornal do SBT, Programa Manhã Maior,
    Programa Hoje em Dia, Programa Amaury Jr... dentre outros.
</p>

<p>
    No total, foram mais de <strong>3 horas no ar</strong>, nas principais
    emissoras do Brasil, sem contar a <strong>entrevista de 25 minutos</strong>
    concedida à TV Osasco, que foi reprisada 8 vezes a pedido de telespectadores!
</p>

<br>

<p>
    <strong>Confira alguns destes momentos...</strong>
</p>

<? foreach ($destaques as $index => $materia): ?>
    <? if ($index == 0): ?>
    <div class="row-fluid">
    <? endif ?>
        <div class="span6">
            <div class="materia">
                <strong><? echo $materia['Materia']['title'] ?> <span class="label"><? echo $materia['Materia']['label'] ?></span></strong>
                <br>
                <? if ($materia['Materia']['type'] == 1): ?>
                <a href="<? echo $materia['Materia']['link'] ?>" target="_blank">
                    <img src="<? echo $materia['Materia']['img'] ?>" alt="<? echo $materia['Materia']['program'] ?>" title="<? echo $materia['Materia']['program'] ?>">
                </a>
                <? else: ?>
                <object width="250" height="199">
                    <param name="movie" value="<? echo $materia['Materia']['link'] ?>">
                    <param name="allowFullScreen" value="true">
                    <param name="allowscriptaccess" value="always">
                    <param name="wmode" value="transparent">
                    <embed src="<? echo $materia['Materia']['link'] ?>" type="application/x-shockwave-flash" width="250" height="199" allowscriptaccess="always" allowfullscreen="true" wmode="transparent">
                </object>
                <? endif; ?>
            </div>
        </div>
    <? if ($index & 1 == 1): ?>
    </div>
    <div class="row-fluid">
    <? endif ?>
    <? if ($index == sizeof($destaques) - 1): ?>
    </div>
    <? endif ?>
<? endforeach; ?>

<br>
<br>

<h4>VEJA TAMBÉM</h4>

<br>

<? foreach ($chamadas as $materia): ?>
<div class="media">
    <a class="pull-left" href="<? echo $materia['Materia']['link'] ?>">
        <img class="media-object" src="<? echo $materia['Materia']['img'] ?>" alt="<? echo $materia['Materia']['label'] ?>" title="<? echo $materia['Materia']['label'] ?>">
    </a>
    <div class="media-body">
        <h4 class="media-heading"><? echo $materia['Materia']['title'] ?> <span class="label"><? echo $materia['Materia']['label'] ?></span></h4>
        <br>
        <a href="<? echo $materia['Materia']['link'] ?>" target="_blank">Leia aqui...</a>
    </div>
</div>
<br>
<? endforeach; ?>

<p><a href="/web/bastidores">Saiba mais...</a></p>
