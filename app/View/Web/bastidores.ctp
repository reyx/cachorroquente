<ul class="breadcrumb">
    <li><a href="/sobre/introducao/">Sobre o Festival</a> <span class="divider">&raquo;</span></li>
    <li>Os Bastidores / Making-Ofs 2012</li>
</ul>

<? foreach ($makingofs as $makingof_index => $makingof): ?>
    <? if ($makingof['Images']): ?>
    <div class="row-fluid">
        <h4><? echo $makingof['Makingof']['title'] ?> <span class="label"><? echo $makingof['Makingof']['label'] ?></span></h4>

        <? foreach ($makingof['Images'] as $image_index => $image): ?>
            <a class="fancybox" rel="gallery<? echo $image['id'] ?>" href="<? echo $this->webroot . 'files/image/img/' . $image['img_dir'] . '/' . $image['img'] ?>" title="<? echo $makingof['Makingof']['title'] ?>">
                <img src="<? echo $this->webroot . 'files/image/img/' . $image['img_dir'] . '/thumb_' . $image['img'] ?>" alt="">
            </a>
        <? endforeach; ?>
    </div>
    <br>
    <br>
    <br>
    <? endif; ?>
<? endforeach; ?>

<p><? echo $this->Html->link('Saiba mais...', array('controller' => 'sobre', 'action' => 'concurso')) ?></p>
