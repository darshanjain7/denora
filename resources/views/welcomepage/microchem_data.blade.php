 @extends('inc.userlayout')

 @section('content')


<div style="background-color: #f8f9fa !important; z-index: 9; position: relative;">
  <div class="grid">
    <div class="">
      <ol class="breadcrumb bef">
         <li style="background-color: #6cc04a;color: #fff;"><a href="/"style="color:#fff" >HOME</a></li>
        
         
          <li class="active "><a href="#">
         @foreach($data1 as $news_data1)
            {{ $news_data1->product_type  }}
                                     
            @endforeach</a></li>
        </ol>
        
    </div>
  
  </div>
</div>


 


<div class="bg-light"  style="height:100%">
<div class="container"  style="margin-top: 76px;">
    <div class="section">
        <div class="row">
         <div class="col-md-12">
         

            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" style=" width: 555px;" data-toggle="tab" href="#tabs-1" role="tab">O & M Manual</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" style=" width: 555px;" href="#tabs-2" role="tab">Parts List</a>
              </li>
              
            </ul><!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane active" id="tabs-1" role="tabpanel">
                <div class="row">
                  
                  <div class="col-md-12">
                   @foreach($data1 as $news_data)
                   <iframe src="http://denora.siydemo.com/storage/app/public/documents/{{ $news_data->om_manual}}" frameborder="0" style="width:100%;min-height:740px;"></iframe>



                 

                    @endforeach
                  </div>
                
                </div>
               
                
              </div>
              <div class="tab-pane" id="tabs-2" role="tabpanel">
                <div class="row" id="row1"> 
                  
                  <div class="col-md-12">
                    <div class="mag1">
                    @foreach($data1 as $news_data1)
                   <iframe src="http://denora.siydemo.com/storage/app/public/documents/{{ $news_data1->parts_list }}" frameborder="0" style="width:100%;min-height:740px;"></iframe>
                   <!-- <iframe src="http://denora.siydemo.com/storage/app/public/documents/{{ $news_data1->part_list_1 }}" frameborder="0" style="width:100%;min-height:740px;"></iframe>
-->
                 

                    @endforeach
                          </div>
                    </div>
                  </div>
                
                </div>
               
              </div>
              
            </div>
             
         </div>
        </div>

    </div>
</div>
</div>
@endsection
