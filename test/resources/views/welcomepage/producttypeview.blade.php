 @extends('inc.userlayout')



 @section('content')

<div style="background-color: #f8f9fa !important; z-index: 9; position: relative;">

  <div class="grid">

    <div class="">

      <ol class="breadcrumb bef"  style="    margin-top: -87px;">

        <li style="background-color: #6cc04a;color: #fff;"><a href="/test" style="color:#fff">HOME</a></li>

        

        <li class="active relative drop-container">

          <a href="#" style="padding-left:0;">@foreach($data1 as $news_data1)

            {{ $news_data1->group_name  }}



            @endforeach



          </a>

          </span>

          </li> 

        </ol>

    </div>

  </div>

</div>



<div class="container" style="margin-top: 76px;">

    <div class="section">

        <div class="row" style="margin:70px 0; margin-top: 16px;">

        @if(count($data)>0)

        	 @foreach($data as $news_data)

            <div class="col-md-4">

                <a href="../productmap/{{$news_data->product_type_id}}">

                    <div class="imgbg3">

                    <img src="../storage/app/public/documents/{{ $news_data->product_type_image }}"  class="img3"/>

                </div>

                  <button class="box3but">{{ $news_data->product_type }}  <i class="fa fa-arrow-right soli-arr" style="float:right; margin-top:6px; margin-right:8px;" aria-hidden="true"></i></button> </a>

               </div>

               @endforeach
               @else
                    <?php echo "No record found...!"; ?>
                    @endif

        </div>

    </div>

</div>

 	

 @endsection