<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
  </head>
  <body>

      <!-- partial:partials/_sidebar.html -->
 <div class="container-scroller">

 @include('admin.sidebar')
      <!-- body -->
 @include('admin.header')


 <div class="main-panel">

          <div class="content-wrapper">
 @include('layouts.message')

 <div class="my-4 text-right px-10">
    <a class="btn btn-primary text-white px-4 py-2 rounded-lg shadow-md hover:shadow-amber-300"href="{{route('category.create')}}">Add Category</a>
</div>
  <table class=" table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Category Name</th>
      <th scope="col">Priority</th>
    </tr>
    <tbody>
            @foreach($categories as $category)
            <tr>
            <td>{{$category->id}}</td>

            <td>{{$category->category_name}}</td>

                <td>{{$category->priority}}</td>
                <td>
                    <a href="{{route('category.edit',$category->id)}}"class="btn btn-success  px-2 py-1 rounded text-white hover:shadow-blue-600">Edit</a>
                    <a onclick="return confirm('Are you sure want to delete ?')" href="{{route('category.destroy',$category->id)}}"class="bg-red-600 px-2 py-1 rounded text-white hover:shadow-blue-400">Delete</a>

                </td>
            </tr>
            @endforeach
        </tbody>
  </thead>
  <tbody>
  
  </tbody>
</table>
</div>
</div>
</div>


   <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
