<h1>Books Index</h1>

@foreach($books as $b)
    <div>
        <h2>{{ $b->title }}</h2>
        <p>{{ $b->authors }}</p>
        <a href="books/{{ $b->id }}">Read more...</a>
    </div>
@endforeach