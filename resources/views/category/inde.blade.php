
<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
  </head>
  <body>

          <div class="content-wrapper">
      <!-- partial:partials/_sidebar.html -->
 @include('admin.sidebar')
      <!-- partial -->
 @include('admin.header')
       <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
</div>
        <!-- partial
        <h1 class="font-bold text-4xl text-blue-700"  >Categories</h1>
    <hr class="h-1 bg-blue-200">

<div class="my-4 text-right px-10">
    <a class="bg-amber-400 text-black px-4 py-2 rounded-lg shadow-md hover:shadow-amber-300"href="{{route('category.create')}}">Add Category</a>
</div>

    <table id="mytable">
        <thead>
            <th>S.N</th>
            <th>Category</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{$category->priority}}</td>
                <td>{{$category->name}}</td>
                <td>
                    <a href="{{route('category.edit',$category->id)}}"class="bg-blue-600 px-2 py-1 rounded text-white hover:shadow-blue-600">Edit</a>
                    <a onclick="return confirm('Are you sure want to delete ?')" href="{{route('category.destroy',$category->id)}}"class="bg-red-600 px-2 py-1 rounded text-white hover:shadow-blue-400">Delete</a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table> -->
     
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.css')

  </body>
  <script>
        let table = new DataTable('#mytable');
    </script>
</html>




-----------------------
<h2 class="">Add Category</h2>
        <hr class="h-1 mb-4 bg-blue-200">
<h1>kjdnsjld</h1>

    <form action="{{ route('category.store')}}" method="POST" class="mt-5">
@csrf
        <input type="text" placeholder="Category Name" name="name" class="w-full rounded-lg border-gray-300 my-2" value="{{old('name')}}">
        @error('name')
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

































    
    

