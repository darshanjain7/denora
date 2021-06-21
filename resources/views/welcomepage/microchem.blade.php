
 @extends('inc.userlayout')

 @section('content')

 


  <div style="background-color: #f8f9fa !important; z-index: 9; position: relative;">
    <div class="grid">
      <div class="">
        <ol class="breadcrumb bef">
          <li style="background-color: #6cc04a;color: #fff;"><a href="/"style="color:#fff" >HOME</a></li>
          
          <li class="relative drop-container">
             @foreach($data1 as $news_data1)
            <a style="padding: 7px;" href="../userview/{{ $news_data1->product_group_id }}">
              
          {{ $news_data1->group_name }}
          </a>
           @endforeach
 
            </span>
            </li> 
            <li class="active "><a href="#" style="padding: 7px;">
                 @foreach($data1 as $news_data1)
          {{ $news_data1->product_type }}
           @endforeach

            </a></li>
          </ol>
      </div>
    </div>
  </div>



  <div class="bg-light">

    

    

  <div class="container"  style="margin-top: 76px;">

    <div class="section">

      <div class="row">

      	 @foreach($data1 as $news_data1)

      <div class="col-md-6" style="  margin-top: 56px; "> 

        	{!!html_entity_decode($news_data1->product_master_image_html_code)!!} 

        

        </div>

      @endforeach

      <div class="col-md-6" style="padding-left: 47px;">

        <h1 style="color: #6cc04a;">

          @foreach($data1 as $news_data1)

          {{ $news_data1->product_type }}

           @endforeach

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

            
            <tr>

              <td style="padding: 20px 16px;">{{ ++$value123 }}</td>
              
              <td style="padding: 20px 16px;"> ----  </td>

              <td><a href="../microchem/3" style="color: #000;">O&M Manual and Parts List  </a></td>

              

             </tr>

  

          </tbody>

        </table>

      </div> 
   
       

    </div>

    </div>

  </div>

  </div>
 
@endsection