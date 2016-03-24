@extends('home')

@section('readinglog')
@foreach ($userbooks as $userbook)
	<div>
		<ul>
			<a href="/readinglog/{{ $userbook->id }}"><li>{{ $userbook->book->title }}{{ $userbook->book->authorname }}{{ $userbook->book->isbn }}{{ $userbook->read }}{{ $userbook->wishlist }}<li></a>
		</ul>
	</div>
@endforeach 
@endsection

