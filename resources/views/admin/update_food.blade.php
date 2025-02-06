<!DOCTYPE html>
<html>
  <head> 

    <base href="/public">

   @include('admin.css')

   <style>
    .div_deg{
        padding: 10px;
    } 

    label{
        display:inline-block;
        width: 200px;
    }
   </style>
  </head>
  <body>
    
    
        @include('admin.header')
  
        @include('admin.sidebar')


      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <h1>Update Food</h1>

            <form action="">
                <div class="div_deg">
                    <label for="">Food Title</label>
                    <input type="text" name="title" value="{{ $food->title }}">
                </div>

                <div class="div_deg">
                    <label for="">Details</label>

                    <textarea name="details" id="" cols="30" rows="10">{{ $food->detail }}</textarea>
                    
                </div>

                <div class="div_deg">
                    <label for="">Price</label>
                    <input type="text" name="price" value="{{ $food->price }}">
                </div>
            </form>


           </div>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>