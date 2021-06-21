 @extends('inc.userlayout')



 @section('content')



 

<div style="background-color: #f8f9fa !important; z-index: 9; position: relative;">

  <div class="grid">

    <div class="">

      <ol class="breadcrumb bef">

        <li style="background-color: #6cc04a;color: #fff;" ><a href="/test" style="color:#fff">HOME</a></li>

           <li class="relative drop-container">

       @foreach($data1 as $news_data1)
  
  <a href="../userview/{{ $news_data1->product_group_id }}"  style="padding-left:0; padding-right:0;">

              

          {{ $news_data1->group_name }}

          </a>



            @endforeach

            

          </span>

          </li> 

        <li class="relative drop-container">

          @foreach($data1 as $news_data11)

          <a href="../productmap/{{ $news_data11->product_type_id }}" style="padding-left:0; padding-right:0;"> 

             {{ $news_data11->sku }} 

            @endforeach</a>

            

          </span>

          </li> 

          <li class="active "><a href="#" style="padding-left:0;">

          @foreach($data1 as $news_data1)

             {{ $news_data1->o_m_name }} 

            @endforeach </a></li>

        </ol>

       

    </div>

  

  </div>

</div>







<div class="bg-light" style="height:100%">

<div class="container"  style="margin-top: 76px;">

    <div class="section">

        <div class="row">

        @if(count($data1)>0)

          @foreach($data1 as $news_data1)
 <div class="col-md-6">
            <h2 style="position: absolute;">{{ $proname=$news_data1->o_m_name }}</h2>
            </div>
             <div class="col-md-6">
            <a class="nav-link customer" href="../sendenquiry/{{ $news_data1->sku }}" style="color: #1b1717 !important;text-align: end;"><i class="fa fa-commenting" aria-hidden="true"></i> Send Enquiry </a>

            @endforeach

 </div>
  <div class="col-md-12">
<?php if($proname=="Microchem")
{?>
            <ul class="nav nav-tabs" role="tablist">

              <li class="nav-item">

                <a class="nav-link active" style="width:555px;" data-toggle="tab" href="#tabs-1" role="tab">O & M Manual</a>

              </li>

              <li class="nav-item">

                <a class="nav-link" data-toggle="tab" style="width:555px;" href="#tabs-2" role="tab">Parts List</a>

              </li>

             
            </ul><!-- Tab panes -->
            
            <?php }
            else
            {?>
                   <ul class="nav nav-tabs" role="tablist">

              <li class="nav-item">

                <a class="nav-link active" style="width:555px;" data-toggle="tab" href="#tabs-1" role="tab">Drawing</a>

              </li>

              <li class="nav-item">

                <a class="nav-link" data-toggle="tab" style="width:555px;" href="#tabs-2" role="tab">Data Sheet</a>

              </li>

             
            </ul><!-- Tab panes -->
            <?php } ?>

            <div class="tab-content">

              <div class="tab-pane active" id="tabs-1" role="tabpanel">

                <div class="row">

                   <div class="col-md-12">
 
                   @foreach($data as $news_data)

                   <iframe src="../storage/app/public/documents/{{ $news_data->drowing_pdf }}" frameborder="0" style="width:100%;min-height:740px;"></iframe>



                 



                    @endforeach

                  </div>

                  

                </div>

               

                

              </div>

              <div class="tab-pane" id="tabs-2" role="tabpanel">

                <div class="row" id="row1"> 

                   <div class="col-md-12">

                    <div class="mag1">

                    @foreach($data1 as $news_data1)

                   <iframe src="../storage/app/public/documents/{{ $news_data1->o_m_pdf }}" frameborder="0" style="width:100%;min-height:740px;"></iframe>



                 



                    @endforeach
                   
                    @else
                    <?php echo "No record found...!"; ?>
                    @endif
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

