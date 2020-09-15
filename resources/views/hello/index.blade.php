<h1>{{ $msg }}</h1>
 
<ul>
    @foreach ($books as $book)
    <li>{{ $book->title }}</li>
    @endforeach
</ul>
