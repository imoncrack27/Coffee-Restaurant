<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')

   <style>
    table
    {
        border:1px solid skyblue;
        margin: auto;
        width: 1000px;
        margin-top: 100px;
    }

    th
    {
        text-align: center;
        background-color: skyblue;
        padding: 20px;
        color: white;
        font-size: 18px;
    }

    td
    {
        color: white;
        font-weight: bold;
     
        text-align: center;
      
        padding: 20px;
    }
   </style>
  </head>
  <body>
    
    
        @include('admin.header')
  
        @include('admin.sidebar')


      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <table>
                <tr>
                    <th>Phone Number</th>
                    <th>No. of Guest</th>
                    <th>Time</th>
                    <th>Date</th>
                </tr>


                @foreach($book as $book)

                <tr>
                    <td>{{ $book->phone }}</td>
                    <td>{{ $book->guest }}</td>
                    <td>{{ $book->time }}</td>
                    <td>{{ $book->date }}</td>
                </tr>

                @endforeach
            </table>

           </div>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>