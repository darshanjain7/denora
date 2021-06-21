  @extends('inc.userlayout')
 @section('content')
  <div style="background-color: #f8f9fa !important; z-index: 9; position: relative;">

    <div class="grid">

      <div class="">

        <ol class="breadcrumb bef">

          <li style="background-color: #6cc04a;color: #fff;"><a href="/test"style="color:#fff" >HOME</a></li>

          

          <li class="relative drop-container">

             @foreach($data1 as $news_data1)

            <a href="../userview/{{ $news_data1->product_group_id }}"  style="padding-left:0; padding-right:0;">

              

          {{ $news_data1->group_name }}

          </a>

           @endforeach

  <div class="drop">

                <ul class="list">
                    
                       @foreach($data2 as $news_data2)

        <li><a href="../productcategory/{{ $news_data2->sk_category_id }}"> {{ $news_data2->category_name }}</a> </li>

           @endforeach

  

                </ul>

              </div>

            </span>

            </li> 

            <li class="active "><a href="#"  style="padding-left:0;">

                 @foreach($data1 as $news_data1)

          {{ $news_data1->product_type }}

           @endforeach



            </a></li>

          </ol>

      </div>

    </div>

  </div>
 <div class="bg-light" style="height:100% !important;">
  <div class="container"  style="margin-top: 40px;">

    <div class="section">

      <div class="row">
@if(count($data1)>0)
      	 @foreach($data1 as $news_data1)

      <div class="col-md-6" style="  margin-top: 56px; "> 

        	{!!html_entity_decode($news_data1->product_master_image_html_code)!!} 

        

        </div>

      @endforeach
      @else
      <?php echo "No record found...!"; ?>
                    @endif

      <div class="col-md-6 smlrestab" style="padding-left: 47px;" >

        <h1 style="color: #6cc04a;">
@if(count($data1)>0)
          @foreach($data1 as $news_data1)

          {{ $news_data1->product_type }}

           @endforeach
           @else
           @endif

        </h1>

        

        <table class="table table-bordered">

          <thead>

            <tr>

              <th>#</th>

              <th style="width: 35%; text-align:center;">SK Number</th>

              <th>Descriptions</th>

              </tr>

          </thead>

          <tbody>

            <?php $value123=0;   ?>
            @if(count($data1)>0)
             @foreach($data as $news_data)



            <tr>

              <td style="padding-top:21px;">{{ ++$value123 }}</td>

              <td style="text-align:center;">
                  
                  <?php 
                  if($news_data->sk_spare=="1")
                  {?>
                  <a href="../sendenquiry/{{ $news_data->sku }}" style="color: #00000080; font-weight:700;" class="hovgrn">{{ $news_data->sku }}</a></td>
                  <?php 
                  }
                  else
                  {?>
                  <a href="../productskudetails/{{ $news_data->product_sku_id }}" style="color: #00000080; font-weight:700;" class="hovgrn">{{ $news_data->sku }}</a></td>
                 
                  <?php } ?>

              <td style="font-size: 13px;">{{ $news_data->description }}</td>

             </tr>

           @endforeach
           @else
       
                    @endif
    

          </tbody>

        </table>

      </div> 
 
    </div>

    </div>

  </div>

  </div>
 
@endsection