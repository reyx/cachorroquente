<?
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', '2º Festival do Cachorro Quente - Osasco - SP');
?>
<!DOCTYPE html>
<html>
<head>
	<title><? echo $title_for_layout . ' | '; ?><? echo $cakeDescription ?></title>

	<?
		echo $this->Html->meta(array('charset' => 'utf-8'));
		echo $this->Html->meta(array('viewport' => 'width=device-width, initial-scale=1.0'));
		echo $this->Html->meta(array('description' => '2º festival do cachorro quente de Osasco'));
		echo $this->Html->meta(array('keywords' => 'osasco, cachorro, quente, hotdog, hot, dog'));
		echo $this->Html->meta(array('author' => 'Evandro Temperini, Regis Silva'));
		echo $this->fetch('meta');

		echo $this->Less->css('bootstrap/bootstrap');
		echo $this->Less->css('web/base');
		echo $this->fetch('css');

		echo $this->Html->meta('icon');
	?>
</head>
<body>
	<div class="container">
		<div class="row">
	        <div class="span4">
	            <div id="lateral">
	                <? echo $this->element('menu'); ?>
	            </div>
	        </div>
	        <div class="span8">
	            <div id="conteudo">
	            	<? echo $this->element('banner'); ?>
	            	<? echo $content_for_layout; ?>
					<? echo $this->element('release'); ?>
	            </div>
	        </div>
	    </div>
	</div>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<?
		echo $this->Html->script('jquery-migrate-1.1.1.min');
		echo $this->Html->script('bootstrap.min');
	?>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-511990aa6baa8232"></script>
	<? echo $this->fetch('script'); ?>
	<? #echo $this->element('sql_dump'); ?>
</body>
</html>
