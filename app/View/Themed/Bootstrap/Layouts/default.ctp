<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php //echo $title_for_layout; ?>
		Company CMS
	</title>
	<?php
		echo $this->Html->meta(array("name"=>"viewport","content"=>"width=device-width,  initial-scale=1.0"));
		echo $this->Html->meta('icon');
		echo $this->Html->css('custom.css');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('bootstrap-responsive.min');
		// docs.css is only for this exapmple, remove for app dev
		echo $this->Html->css('docs');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->Html->script('libs/modernizr.min');
		echo $this->Html->script('libs/jquery');
		echo $this->Html->script('libs/bootstrap.min');
		echo $this->Html->script('bootstrap/application');
		echo $this->fetch('script');
	?>
	
</head>
<body data-spy="scroll" data-target=".subnav" data-offset="50">

	<header class="container">


    </header> <!-- /container -->

	<div id="container">
		<div id="content">
		<?php echo $this->element('menu/top_menu'); ?>
			 <div class="container-fluid">
			 <?php if($this->Session->read('Auth.User')){?>
				<div id="cake-breadcrumbs"><?php echo $this->Html->getCrumbs(' > ','Home');?></div>	
			<?php }?>
      
	  <div class="row-fluid">
	   <?php if($this->Session->read('Auth.User')){?>
        <div class="span3">
          <div class="well sidebar-nav">
		  <h4 style="padding:4px;margin:0px;border-bottom:1px solid #ccc;"><i class="icon-home"></i> <?php echo $this->Html->link('Dashboard', array('controller' => 'pages', 'action' => 'dashboard')); ?></h4>
			
		   <ul class="nav nav-list">
              <li class="nav-header">Product</li>
				  <li class="sidebar-indent"><a href="#">Products</a></li>
				  <li class="sidebar-indent"><?php echo $this->Html->link('Series', array('controller' => 'series', 'action' => 'index')); ?></li>
              <li class="nav-header">Product Tools</li>
				  <li class="sidebar-indent"><a href="#">Categories</a></li>
				  <li class="sidebar-indent"><a href="#">Downloads</a></li>
				  <li class="sidebar-indent"><a href="#">High Res</a></li>
              <li class="nav-header">Customer Service</li>
				  <li class="sidebar-indent"><a href="#buttonGroups">Registration</a></li>
				  <li class="sidebar-indent"><a href="#">Customer Reviews</a></li>
				  <li class="sidebar-indent"><a href="#">Monthly Sweepstakes</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
		 <?php }?>
        <div class="span9">				
				<?php if($this->Session->read('Auth.User')){?>
					
				<?php }?>
				<?php echo $this->Session->flash(); ?>
		
				<?php echo $this->fetch('content'); ?>
			</div>
		</div>
	</div>
	<br><br>
	<div class="navbar-inverse navbar-fixed-bottom">
		<div class="navbar-inner">
			<div id="footer-text">
				&copy<?php echo date("Y")?> All Rights Reserved
			</div>
		</div>
	</div>
	
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
