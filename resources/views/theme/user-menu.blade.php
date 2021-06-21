<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="<?php echo url('/usergo');?>" class="<?php if($_SERVER['REQUEST_URI']=='/usergo'){echo 'active';} ?>"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>

						<li><a href="<?php echo url('/readcontents');?>" class="<?php if($_SERVER['REQUEST_URI']=='/readcontents'){echo 'active';} ?>"><i class="fa fa-envelope-open-o"></i> <span>Read Contents</span></a></li>

						<li><a href="<?php echo url('/pendingcontents');?>" class="<?php if($_SERVER['REQUEST_URI']=='/pendingcontents'){echo 'active';} ?>"><i class="fa fa-envelope"></i> <span>Pending to Read</span></a></li>
						<!-- <li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Post Contents</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="<?php echo url('admincontent/create');?>" class="">Add Content</a></li>
									<li><a href="<?php echo url('admincontent/show');?>" class="">View Content</a></li>
								 </ul>
							</div>
						</li>
							<li>
							<a href="#subPages1" data-toggle="collapse" class="collapsed"><i class="lnr lnr-user"></i> <span>User</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages1" class="collapse ">
								<ul class="nav">
									<li><a href="<?php echo url('createusr/create');?>" class="">Create User</a></li>
									<li><a href="<?php echo url('createusr/show');?>" class="">View User Details</a></li>
								 </ul>
							</div>
						</li>

							<li>
							<a href="#subPage2" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Assign Contents</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPage2" class="collapse ">
								<ul class="nav">
									<li><a href="<?php echo url('adminassigncontent');?>" class="">Assign Content</a></li>
									<li><a href="<?php echo url('adminassigncontent/show');?>" class="">View Assigned Content</a></li>
								 </ul>
							</div>
						</li>-->
 
					</ul>
				</nav>
			</div>
		</div>
