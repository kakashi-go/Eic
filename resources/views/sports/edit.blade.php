<h1>編集画面</h1>
<p><a href="{{ route('sports.index')}}">一覧画面</a></p>
 
@if ($message = Session::get('success'))
<p>{{ $message }}</p>
@endif
 
<form action="{{ route('sports.update',$sports->id)}}" method="POST">
    @csrf
    @method('PUT')
    <p>タイトル：<input type="text" name="title" value="{{ $sports->title }}"></p>
    <p>コーチ：<input type="text" name="author" value="{{ $sports->author }}"></p>
    <input type="submit" value="編集する">
</form>