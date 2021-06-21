 @extends('inc.userlayout')

 @section('content')
        <!-- /#page-wrapper -->
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				@include('inc.messages')
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Dashboard</h3>
							 
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3">
									<a href="#">
									<div class="metric">
										<span class="icon"><i class="fa fa-file"></i></span>
										<p>
											<span class="number"><b> </b></span>
											<span class="title">Total Contents</span>
										</p>
									</div>
								</a>
								</div>
								<div class="col-md-3">
									<a href="#">
									<div class="metric">
										<span class="icon"><i class="fa fa-envelope-open-o"></i></span>
										<p>
											<span class="number"><b> </b></span>
											<span class="title">Read Contents</span>
										</p>
									</div>
								</a>
								</div>
								<div class="col-md-3">
									<a href="#">
									<div class="metric">
										<span class="icon"><i class="fa fa-envelope"></i></span>
										<p>
											<span class="number"><b> </b></span>
											<span class="title">Pending to Read</span>
										</p>
									</div>
								</a>
								</div>
								 
							</div>
						 
						</div>
					</div>
					<!-- END OVERVIEW -->
		 
	  
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>


    </div>
    @endsection
 