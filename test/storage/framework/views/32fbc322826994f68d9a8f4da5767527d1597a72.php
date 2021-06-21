<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="<?php echo url('/admingo');?>"  class="<?php echo e(Str::startsWith(Route::currentRouteName(), 'admingo') ? 'active' : ''); ?>"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed <?php echo e(Str::startsWith(Route::currentRouteName(), 'createproductgroup') ? 'active' : ''); ?>"><i class="lnr lnr-enter"></i> <span>Product Group</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="<?php echo url('createproductgroup');?>" class="<?php echo e(Str::startsWith(Route::currentRouteName(), 'createproductgroup') ? 'active' : ''); ?>">Create Product Group</a></li>
									<li><a href="<?php echo url('createproductgroup/show');?>" class="">View Product Group</a></li>
								 </ul>
							</div>
						</li>
						<li>
							<a href="#subPages1" data-toggle="collapse" class="collapsed <?php echo e(Str::startsWith(Route::currentRouteName(), 'producttype') ? 'active' : ''); ?>"><i class="lnr lnr-enter"></i> <span>Product Type</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages1" class="collapse ">
								<ul class="nav">
									<li><a href="<?php echo url('producttype');?>" class="">Create Product Type</a></li>
									<li><a href="<?php echo url('producttype/show');?>" class="">View Product Type</a></li>
								 </ul>
							</div>
						</li>
						<li>
							<a href="#subPages2" data-toggle="collapse" class="collapsed <?php echo e(Str::startsWith(Route::currentRouteName(), 'producthtml') ? 'active' : ''); ?>"><i class="lnr lnr-enter"></i> <span>Product HTML</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages2" class="collapse ">
								<ul class="nav">
									<li><a href="<?php echo url('producthtml/create');?>" class="">Create Product HTML</a></li>
									<li><a href="<?php echo url('producthtml/show');?>" class="">View Product HTML</a></li>
								 </ul>
							</div>
						</li>
						<li>
							<a href="#subPages2q3" data-toggle="collapse" class="collapsed <?php echo e(Str::startsWith(Route::currentRouteName(), 'productscategory') ? 'active' : ''); ?>"><i class="lnr lnr-enter"></i> <span>Product Category</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages2q3" class="collapse ">
								<ul class="nav">
									<li><a href="<?php echo url('productscategory/create');?>" class="">Create Category</a></li>
									<li><a href="<?php echo url('productscategory/show');?>" class="">View Category</a></li>
								 </ul>
							</div>
						</li>
						<li>
							<a href="#subPages2q" data-toggle="collapse" class="collapsed <?php echo e(Str::startsWith(Route::currentRouteName(), 'productsknumber') ? 'active' : ''); ?>"><i class="lnr lnr-enter"></i> <span>Product SK-numbers</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages2q" class="collapse ">
								<ul class="nav">
									<li><a href="<?php echo url('productsknumber');?>" class="">Create SK-Numbers</a></li>
									<li><a href="<?php echo url('productsknumber/show');?>" class="">View SK-Numbers</a></li>
								 </ul>
							</div>
						</li>
						<li>
							<a href="#subPages3" data-toggle="collapse" class="collapsed <?php echo e(Str::startsWith(Route::currentRouteName(), 'sknumberdrowing') ? 'active' : ''); ?>"><i class="lnr lnr-enter"></i> <span>Product Drawing</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages3" class="collapse ">
								<ul class="nav">
									<li><a href="<?php echo url('sknumberdrowing');?>" class="">Create Product Drawing</a></li>
									<li><a href="<?php echo url('sknumberdrowing/show');?>" class="">View Product Drawing</a></li>
								 </ul>
							</div>
						</li>
						<li>
							<a href="#subPages4" data-toggle="collapse" class="collapsed <?php echo e(Str::startsWith(Route::currentRouteName(), 'sknumberdatasheet') ? 'active' : ''); ?>"><i class="lnr lnr-enter"></i> <span>Data Sheet</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages4" class="collapse ">
								<ul class="nav">
									<li><a href="<?php echo url('sknumberdatasheet');?>" class="">Create Data Sheet</a></li>
									<li><a href="<?php echo url('sknumberdatasheet/show');?>" class="">View Data Sheet</a></li>
								 </ul>
							</div>
						</li>
						<li>
							<a href="#subPages401" data-toggle="collapse" class="collapsed <?php echo e(Str::startsWith(Route::currentRouteName(), 'contactus') ? 'active' : ''); ?>"><i class="lnr lnr-envelope"></i> <span>User Forms</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages401" class="collapse ">
								<ul class="nav">
									<li><a href="<?php echo url('contactus');?>" class="">Contact Us</a></li>
									<li><a href="<?php echo url('customersfeedback');?>" class="">Customer Feedback</a></li>
									<li><a href="<?php echo url('enquirydetails');?>" class="">Product Enquiry</a></li>
								 </ul>
							</div>
						</li>
					 	 
							<!--<li>
							<a href="#subPages1" data-toggle="collapse" class="collapsed"><i class="lnr lnr-user"></i> <span>User</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages1" class="collapse ">
								<ul class="nav">
									<li><a href="<?php echo url('createusr/create');?>" class="">Create User</a></li>
									<li><a href="<?php echo url('createusr/show');?>" class="">View User Details</a></li>
								 </ul>
							</div>
						</li> -->

							<!--<li>
							<a href="#subPage2" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Assign Contents</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPage2" class="collapse ">
								<ul class="nav">
									<li><a href="<?php echo url('adminassigncontent');?>" class="">Assign Content</a></li>
									<li><a href="<?php echo url('adminassigncontent/show');?>" class="">View Assigned Content</a></li>
								 </ul>
							</div>
						</li> -->

						<!--<li><a href="charts.html" class=""><i class="lnr lnr-chart-bars"></i> <span>Charts</span></a></li>
						<li><a href="panels.html" class=""><i class="lnr lnr-cog"></i> <span>Panels</span></a></li>
						<li><a href="notifications.html" class=""><i class="lnr lnr-alarm"></i> <span>Notifications</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="page-profile.html" class="">Profile</a></li>
									<li><a href="page-login.html" class="">Login</a></li>
									<li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
								</ul>
							</div>
						</li>
						<li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
						<li><a href="typography.html" class=""><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li>
						<li><a href="icons.html" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li>-->
					</ul>
				</nav>
			</div>
		</div>
<?php /**PATH /home/gaschlorinationd/public_html/test/resources/views/theme/menu.blade.php ENDPATH**/ ?>