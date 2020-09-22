<h1>一覧画面</h1>
<p><a href="{{ route('coach_request.create') }}">新規追加</a></p>
 
@if ($message = Session::get('success'))
<p>{{ $message }}</p>
@endif
 
<table border="1">
    <tr>
        <th>ユーザーID</th>
        <th>スポーツID</th>
        <th>開始日時</th>
        <th>終了日時</th>
        <th>詳細</th>
        <th>編集</th>
        <th>削除</th>
    </tr>
    @foreach ($coach_requests as $coach_request)
    <tr>
        <td>{{ $coach_request->user_id }}</td>
        <td>{{ $coach_request->coach_request_id}}</td> 
        <td>{{ $coach_request->start_date }}</td>
        <td>{{ $coach_request->end_date}}</td> 
        
        <th><a href="{{ route('coach_request.show',$coach_request->id)}}">詳細</a></th>

        <th><a href="{{ route('coach_request.edit',$coach_request->id)}}">編集</a></th>
        
        <th>
            <form action="{{ route('coach_request.destroy', $coach_request->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" name="" value="削除">
            </form>
        </th>
    </tr>
    @endforeach
</table>