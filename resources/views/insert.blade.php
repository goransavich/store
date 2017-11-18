@extends('layouts.master')

@section('content')

<div class="row">


	<div class="col-sm-8 blog-main">
	<h2>Insert a new book</h2>
	<hr>
		<form method="POST" action="/insert" enctype="multipart/form-data">
		
		{{csrf_field()}}

		  <div class="form-group">
		    <label>ISBN</label>
		    <input type="text" class="form-control" name="isbn" aria-describedby="emailHelp" required>
		    
		  </div>

		  <div class="form-group">
		    <label >Title</label>
		    <input type="text" class="form-control" name="book_title" required>
		  </div>

		  <div class="form-group">
		    <label>Author</label>
		    <input type="text" class="form-control" name="book_author" aria-describedby="emailHelp" required>
		  </div>

		  <div class="form-group">
		    <label>Price</label>
		    <input type="text" class="form-control" name="book_price" aria-describedby="emailHelp" required>
		  </div>

		  <div class="form-group">
		    <label>Category</label>
		    <select name="insert_category">

	          @foreach($categ as $category)
	            <option value="{{$category->category_id}}">{{$category->category_name}}</option>
	          @endforeach

        	</select>
		  </div>
		  
		  <div class="form-group">
		    <label>Description</label>
		    <input type="text-area" class="form-control" name="book_description" aria-describedby="emailHelp" required>
		  </div>

		  <div class="form-group">
			<label for="exampleInputFile">Upload image</label>
			<input type="file" class="form-control-file" id="exampleInputFile" aria-descr name="image">
		  </div>

		  <button type="submit" class="btn btn-primary">Submit</button>

		  <div class="form-group">
		  	@include('layouts.errors')
		  </div>

		</form>
	</div>

	
	
</div>



@endsection