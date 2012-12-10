<?php 
	
	$current_page = $this->params['action'];

?>

<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" href="<?php echo $this->base?>">CMS</a>
			<div class="nav-collapse">
			<?php if($this->Session->read('Auth.User')){?>
				<a id="login-info" href="<?php echo $this->base?>/users/logout"><button type="button" class="btn btn-inverse"> <i class="icon-white icon-user"></i> logout <?php echo $this->Session->read('Auth.User.username');?></button></a>
			
				<ul class="nav nav-pills">
					<!--<li <?php if($current_page=="index"){echo'class="active"';} ?>>
						<?php echo $this->Html->link('Scaffolding', array('controller' => 'app', 'action' => 'index')); ?>
					</li>
					<li <?php if($current_page=="base_css"){echo'class="active"';} ?>>
						<?php echo $this->Html->link('Base CSS', array('controller' => 'app', 'action' => 'base_css')); ?>
					</li>
					<li <?php if($current_page=="components"){echo'class="active"';} ?>>
						<?php echo $this->Html->link('Components', array('controller' => 'app', 'action' => 'components')); ?>
					</li>
					<li <?php if($current_page=="javascript"){echo'class="active"';} ?>>
						<?php echo $this->Html->link('Javascript plugins', array('controller' => 'app', 'action' => 'javascript')); ?>
					</li>-->
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Products <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#buttonGroups">Products</a></li>
							<li><?php echo $this->Html->link('Series', array('controller' => 'series', 'action' => 'index')); ?></li>
						</ul>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Product Tools <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#buttonGroups">Categories</a></li>
							<li><a href="#buttonDropdowns">Downloads</a></li>
							<li><a href="#buttonDropdowns">Spec Attributes</a></li>
							<li><a href="#buttonDropdowns">Finishes/Color</a></li>
							<li><a href="#buttonDropdowns">High Res Images</a></li>
						</ul>
					</li>
					
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Press & Partners <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#buttonGroups">News</a></li>
							<li><a href="#buttonDropdowns">Pro Reviews</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Customer Service <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#buttonGroups">Registration</a></li>
							<li><a href="#buttonDropdowns">Customer Reviews</a></li>
							<li><a href="#buttonDropdowns">Monthly Sweepstakes</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Eductation <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#buttonGroups">FAQs</a></li>
							<li><a href="#buttonDropdowns">Articles</a></li>
						</ul>
					</li>
				<?php }?>

				</ul>
			</div>
		</div>
	</div>
</div><br><br>