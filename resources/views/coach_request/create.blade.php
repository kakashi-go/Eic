<h1>新規作成画面</h1>
<p><a href="{{ route('coach_request.index')}}">一覧画面</a></p>
 
@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<form action="{{ route('coach_request.store')}}" method="POST">
    @csrf
    <p>ユーザーID：<input type="text" user_id="name" value="{{old('user_id')}}"></p>
    <p>コーチID：<input type="text" name="coach_id" value="{{old('coach_id')}}"></p> 
    <p>開始時刻：<input type="text" name="start_date" value="{{old('start_date')}}"></p> 
    <p>終了時刻：<input type="text" name="end_date" value="{{old('end_date')}}"></p> 
    <input type="submit" value="登録する">
</form>
