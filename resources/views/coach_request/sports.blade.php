<h1>一覧画面</h1>
<p><a href="{{ route('sports.create') }}">新規追加</a></p>
 
@if ($message = Session::get('success'))
<p>{{ $message }}</p>
@endif
 
<table border="1">
    <tr>
        <th>名前</th>
        <th>コーチへの要望</th>
        <th>詳細</th>
        <th>編集</th>
        <th>削除</th>
    </tr>
    @foreach ($sportss as $sports)
    <tr>
        <td>{{ $sports->name }}</td>
        <td>{{ $sports->coach_request }}</td>
        <th><a href="{{ route('sports.show',$sports->id)}}">詳細</a></th>
        <th><a href="{{ route('sports.edit',$sports->id)}}">編集</a></th>
        <th>
            <form action="{{ route('sports.destroy', $sports->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" name="" value="削除">
            </form>
        </th>
    </tr>
    @endforeach
</table>