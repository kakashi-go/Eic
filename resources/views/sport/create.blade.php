<h1>新規作成画面</h1>
<p><a href="{{ route('sport.index')}}">一覧画面</a></p>
 
@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<form action="{{ route('sport.store')}}" method="POST">
    @csrf
    <p>name：<input type="text" name="name" value="{{old('name')}}"></p>
    <!-- <p>コーチ：<input type="text" name="coach" value="{{old('coach')}}"></p> -->
    <input type="submit" value="登録する">
</form>
