<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')

   <style>
    table{
        border: 1px solid;
        margin: auto;
        width: 800px;
    }

    th
    {
        background:skyblue;
         color:white;
         padding:10px;
         margin: 10px;

    }
    td{
        color:white;
        padding:10px;

    }
   </style>
  </head>
  <body>
    
    
        @include('admin.header')
  
        @include('admin.sidebar')


      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <h1>All Foods</h1>

            <div>
                <table >
                    <tr>
                        <th>Food Title</th>
                        <th>Details</th>
                        <th>Price</th>
                        <th>Image</th>

                    </tr>

                    <tr>
                        <td>Abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>

                    </tr>
                </table>
            </div>

           </div>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>