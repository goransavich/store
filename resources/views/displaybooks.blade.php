@extends('layouts.master')

@section('content')

<div class="row">

	@include('layouts.sidebar')

	<div class="col-sm-8 blog-main">


		<div class="row">
		  @foreach($bookdetails as $book)
		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      @if($book->book_image)
			  <a href="/bookdetails/{{$book->isbn}}"><img src="/storage/images/{{$book->book_image}}" class="img-responsive" width="160" height="260" /></a>
			  @endif
		      <div class="caption">
		        <h3>{{$book->book_title}}</h3>
		        <h5>{{$book->book_author}}</h5>
		        
		      </div>
		    </div>
		  </div>
		  @endforeach
		</div>	

	</div>

	
	
</div>



@endsection