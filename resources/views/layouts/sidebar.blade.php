<div class="col-sm-4 blog-sidebar">
	<ul>
	@foreach($categories as $category)

	<li class="nav-item sidebar-links">
		<a class="nav-link" href="/books/{{$category->category_id}}">{{$category->category_name}}</a>
	</li>

	@endforeach

	</ul>
</div>