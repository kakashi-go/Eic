<h1>新規作成画面</h1>
<p><a href="{{ route('sports.index')}}">一覧画面</a></p>
 
<form action="{{ route('sports.store')}}" method="POST">
    @csrf
    <p>タイトル：<input type="text" name="title" value="{{old('title')}}"></p>
    <p>コーチ：<input type="text" name="coach" value="{{old('coach')}}"></p>
    <input type="submit" value="登録する">
</form>
