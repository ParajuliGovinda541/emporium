<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->

       
        <!-- partial -->
        <h2 class="">Add Category</h2>
        <hr class="h-1 mb-4 bg-blue-200">

    <form action="{{ route('category.store')}}" method="POST" class="mt-5">
@csrf
        <input type="text" placeholder="Category Name" name="category_name" class="w-full rounded-lg border-gray-300 my-2" value="{{old('category_name')}}">
        @error('category_name')
            <p class="text-red-600 text-xs -mt-2">{{$message}}</p>
        @enderror
        <input type="text" placeholder="Priority" name="priority" class="w-full rounded-lg border-gray-300 my-2"value="{{old('priority')}}">
        @error('priority')
        <p class="text-red-600 text-xs -mt-2">{{$message}}</p>
    @enderror
        <div class="flex">
    <input class="bg-amber-400 text-black px-4 py-2 rounded-lg shadow-md hover:shadow-amber-300" type="submit" value="Add Category">
    <a class="bg-red-600 text-black px-4 py-2 mx-2 rounded-lg shadow-md hover:shadow-amber-300"href="{{route('category.index')}}">Exit</a>



        </div>
        
    </form>

     
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')

  </body>
</html>