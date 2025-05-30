<!DOCTYPE html>
<html>
  <head> 
     @include('admin.css')
  </head>

        <style type="text/css">
            input[type='text']
            {
                width: 400px;
                height: 50px;
            }
            
            body {
                cursor: auto;
            }
            .div_design
            {
                display: flex;
                justify-content: center;
                align-items: center;
                margin:30px;
            }
            .table_design
            {
                margin: auto;   
                margin-top: 50px;
            }
            table {
                border-collapse: collapse;
                }

            th {
                padding: 16px;
                width: 200px;
                color: #f0f0f0;
                text-align: center;
                font-weight: bold;
                border-radius: 12px;
                position: relative;
                box-shadow:
                    0 4px 12px rgba(255, 255, 255, 0.1), /* Soft white outer glow */
                    inset 0 2px 6px rgba(0, 0, 0, 0.6);   /* Deep inner shadow */
                transition: 0.3s ease;
            }
            td{
                top: 20px;
                padding: 70px;
                text-align: center;
                color: #f0f0f0;
                text-align: center;
                font-weight: bold;
                border-radius: 12px;
                position: relative;
                box-shadow:
                    0 4px 12px rgba(255, 255, 255, 0.1), /* Soft white outer glow */
                    inset 0 2px 6px rgba(0, 0, 0, 0.6);
                width: 50px;
                 /* Light gray background for table cells */
            }
        </style>

  <body>
     @include('admin.header')
     @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">


        <h1 style=""> Add Category</h1>


        <div class="div_design">
         <form action="{{url('add_category')}}" method="POST">
            @csrf

            <div>
                <input type="text" name="category">
            
                <input type="submit" class="btn btn-primary" value="Add Category">
            </div>
         </form>
        </div>  


            <table class="table_design">
                <thead>
                    <tr>
                        <th colspan="{{ count($data) }}">Category Brand</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach($data as $item)
                            <td>{{ $item->category_name }}</td>
                        @endforeach
                    </tr>
                </tbody>
            </table>

<br>
                <br>



        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('admincss/js/front.js') }}"></script>
  </body>
</html>