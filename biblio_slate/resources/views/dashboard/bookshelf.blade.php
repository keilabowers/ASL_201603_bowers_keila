@extends('home')

@section('bookshelf')
@foreach ($userbooks as $userbook)
	<div>
		<ul>
			<a href="/readinglog/{{ $userbook->id }}"><li>{{ $userbook->book->title }}{{ $userbook->book->authorname }}{{ $userbook->book->isbn }}{{ $userbook->owned }}<li></a>
		</ul>
	</div>
@endforeach

	<h2>User Loans</h2>
@foreach ($userloans as $userloan)
	<div>
		<ul>
			<a href="/bookshelf/{{ $userloan->id }}"><li>{{ $userloan->title }}{{ $userloan->name}}<li></a>
		</ul>
	</div>
@endforeach

@endsection