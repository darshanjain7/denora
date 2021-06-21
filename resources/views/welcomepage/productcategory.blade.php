

 @extends('inc.userlayout')



 @section('content')



 





  <div style="background-color: #f8f9fa !important; z-index: 9; position: relative;">

    <div class="grid">

      <div class="">

        <ol class="breadcrumb bef">

          <li style="background-color: #6cc04a;color: #fff;"><a href="/"style="color:#fff" >HOME</a></li>

      
            

          <li class="relative drop-container">

           @foreach($data1 as $news_data1)

            <a href="../productmap/{{ $news_data1->product_type_id }}"  style="padding-left:0; padding-right:0;">

              

          {{ $news_data1->group_name }}

          </a>
              @endforeach
           </span>

            </li> 
     
          <li class="relative drop-container">

           @foreach($data1 as $news_data1)

          <a href="#">

          {{ $news_data1->category_name }}
          
          </a>

         
              @endforeach
           </span>

            </li> 

          </ol>

      </div>

    </div>

  </div>







  <div class="bg-light" style="height: 100% !important;">

    

    

  <div class="container"  style="margin-top: 76px;">

    <div class="section">

      <div class="row">
  <div class="col-md-2"></div>

      <div class="col-md-8" style="padding-left: 47px;">

        <h1 style="color: #6cc04a;">

      

        </h1>

        

        <table class="table table-bordered">

          <thead>

            <tr>

              <th>#</th>

              <th style="width: 25%;">SK Number</th>

              <th>Descriptions</th>

              </tr>

          </thead>

          <tbody>

            <?php $value123=0;   ?>

             @foreach($data as $news_data)



            <tr>

              <td>{{ ++$value123 }}</td>

              <td><a href="../productskudetails/{{ $news_data->product_sku_id }}" style="color: #000;">{{ $news_data->sku }}</a></td>

              <td>{{ $news_data->description }}</td>

             </tr>

           @endforeach

          </tbody>

        </table>

      </div> 
   
         <div class="col-md-2"></div>
        

    </div>

    </div>

  </div>
 <br><br><br><br> <br><br><br><br>
  </div>

@endsection