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

$cakeDescription = __d('cake_dev', '2º Festival do Cachorro quante de Osasco: Ambiente administrativo.');
?>
<!DOCTYPE html>
<html>
<head>
    <? echo $this->Html->charset(); ?>
    <title>
        <? echo $cakeDescription ?>:
        <? echo $title_for_layout; ?>
    </title>
    <?
        echo $this->Html->meta('icon');

        echo $this->Html->css('cake.generic');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>
</head>
<body>
    <div id="container">
        <div id="header">
            <h1><? echo $this->Html->link($cakeDescription, 'http://www.festivaldocachorroquente.com.br'); ?></h1>
        </div>
        <div id="content">

            <? echo $this->Session->flash(); ?>

            <? echo $this->fetch('content'); ?>
        </div>
        <div id="footer">
            <? echo $this->Html->link(
                'ReyX',
                'http://www.reyx.com.br/',
                array('target' => '_blank', 'escape' => false));
            ?>
        </div>
    </div>
</body>
</html>
