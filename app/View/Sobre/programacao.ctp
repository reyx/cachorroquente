<? $this->set("title_for_layout", "Batata"); ?>

<ul class="breadcrumb">
    <li><a href="/sobre/introducao/">Sobre o Festival</a> <span class="divider">&raquo;</span></li>
    <li>Programação</li>
</ul>

<? foreach ($schedule as $index => $agenda): ?>
    <p><? echo date("H:i", strtotime($agenda['Schedule']['time'])) . ' - ' . $agenda['Schedule']['event'] ?></p>
<? endforeach; ?>

<br>
<br>

<p><a href="/sobre/premiacoes/">Saiba mais...</a></p>

<br>

<blockquote>Além das atrações o evento terá cobertura de emissoras de <strong>televisão</strong>,
    <strong>mídia impressa</strong> e <strong>emissoras de rádio</strong>.
</blockquote>

<blockquote>Atrações e horários sujeitos à alterações.</blockquote>
