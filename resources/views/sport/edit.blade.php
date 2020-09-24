<h1>編集画面</h1>
<p><a href="{{ route('sport.index')}}">一覧画面</a></p>
 
@if ($message = Session::get('success'))
<p>{{ $message }}</p>
@endif
 
@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<form action="{{ route('sport.update',$sport->id)}}" method="POST">
    @csrf
    @method('PUT')
    <p>スポーツ名：<input type="text" name="name" value="{{ $sport->name }}"></p>

    <input type="submit" value="編集する">
</form>