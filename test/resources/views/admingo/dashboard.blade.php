 @extends('inc.adminlayout123')

 @section('content')
 				
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				@include('inc.messages')
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
					@if(Session::has('flash_message'))
    <div class="alert alert-success"  data-expires="5000"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif
						<div class="panel-heading">
							<h3 class="panel-title">Dashboard</h3>
							 
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-eye"></i></span>
										<p><a href="createproductgroup/show">
											<span class="number">{{ $count }}</span>
											<span class="title">Total Product Groups</span>
											</a>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-eye"></i></span>
										<p><a href="producttype/show">
											<span class="number">{{ $count1 }}</span>
											<span class="title">Total Product Types</span>
										</a></p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-eye"></i></span>
										<p><a href="productscategory/show">
											<span class="number">{{ $count2 }}</span>
											<span class="title">Total Product Category</span>
										</a></p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-eye"></i></span>
										<p><a href="productsknumber/show">
											<span class="number">{{ $count3 }}</span>
											<span class="title">Total SK Numbers</span>
										</a></p>
									</div>
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
 