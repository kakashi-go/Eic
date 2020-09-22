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

<form action="{{ route('coach_request',$coach_request->id)}}" method="POST">
    @csrf
    @method('PUT')
    <p>ユーザID：<input type="text" user_id="user_id" value="{{ $coach_request->user_id }}"></p>
   
    <p>コーチID：<input type="text" coach_id="coach_id" value="{{ $coach_request->coach_id }}"></p>
   
    <p>開始日時：<input type="text" start_date="start_date" value="{{ $coach_request->start_date }}"></p>
   
    <p>終了日時：<input type="text" end_date="end_date" value="{{ $coach_request->end_date }}"></p>

    <input type="submit" value="編集する">
</form>