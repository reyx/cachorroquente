<? $this->set("title_for_layout", "Batata"); ?>

<ul class="breadcrumb">
    <li>Os 30 Melhores de Osasco em 2012</li>
</ul>

<? if ($list): ?>
<ul>
<? foreach ($list as $index => $dogueiro): ?>
    <li><? echo $dogueiro['Dogueiro']['nome'] ?></li>
<? endforeach; ?>
</ul>
<? endif; ?>

<p class="label label-warning">* Os dogueiros estão listados em ordem alfabética.</p>
