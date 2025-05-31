<!DOCTYPE html>
<html>
  <head> 
     @include('admin.css')
  </head>

        <style type="text/css">
            input[type='text']
            {
                width: 200px;
                height: 50px;
            }
            
            #submit
            {
                width: auto;
                height: 50px;
                color: white;
                border: none;
                cursor: pointer;
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
                border-spacing: 16px;
            }
            table {
                border-collapse: collapse;
                 border-spacing: 16px;
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
                height: 300px;
                top: 20px;
                padding: 50px;
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
                
            }
            .container-text{
                padding: 80px;
                text-align: center;
                color: #f0f0f0;
                text-align: center;
                font-weight: bold;
                border-radius: 12px;
                position: relative;
                box-shadow:
                    0 4px 12px rgba(255, 255, 255, 0.1), /* Soft white outer glow */
                    inset 0 2px 6px rgba(0, 0, 0, 0.6);
            }
            
        </style>

  <body>
     @include('admin.header')
     @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

        

            <h1 style=""> Add Brand</h1>


        <div class="div_design">
         <form action="{{url('add_category')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="container-text">

                <input type="file" name="image" accept="image/*" id="previewImage">
                
                <input type="text" name="category" placeholder="Enter category name">
            
                <input type="submit" id ="submit" class="btn btn-primary" value="Add Category">
            </div>

         </form>
        </div>  

        @php
    $columns = 3; // number of items per row
    $chunks = collect($data)->chunk($columns);
@endphp

    <table class="table_design">
        <thead>
            <tr>
                <th colspan="{{ $columns }}">Category Brand</th>
            </tr>
        </thead>
        <tbody>
            @foreach($chunks as $chunk)
                <tr>
                    @foreach($chunk as $item)
                        <td>
                        @if($item->image)
                            <img src="{{ asset('storage/' . $item->image) }}" alt="Category Image" width="150" style="margin-bottom: 20px; ">
                        @endif
                        
                        {{ $item->category_name }}
                       
                        </td>
                    @endforeach

                    {{-- Fill remaining cells if row has less than 3 items --}}
                    @for($i = 0; $i < $columns - $chunk->count(); $i++)

                    @endfor
                </tr>
            @endforeach
        </tbody>
    </table>
               

                <br>
                <br>

<br>
                <br>



        </div>
      </div>
    </div>
    @include('admin.footer')
    
   <script>
    document.getElementById('imageInput').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const preview = document.getElementById('previewImage');
                preview.src = e.target.result;
                preview.style.display = 'block';
            }
            reader.readAsDataURL(file);
        }
    });
</script>

  </body>
</html>