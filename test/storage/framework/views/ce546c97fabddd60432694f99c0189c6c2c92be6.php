	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="<?php echo url('/admingo');?>"><img src="https://gaschlorination.denora.com/public/css/assets/img/new-logo-denora.png" class="logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				 
			 
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						 
					 
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="https://www.pngarts.com/files/3/Avatar-Free-PNG-Image.png" class="img-circle" alt="Avatar"> <span> <?php echo e(Auth::user()->name); ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
			<!-- 	<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li> -->
								 <li><a  href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                   <i class="lnr lnr-exit"></i> <span><?php echo e(__('Logout')); ?></span></a></li>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav><?php /**PATH D:\xampp\htdocs\gaschlorination\resources\views/theme/header.blade.php ENDPATH**/ ?>