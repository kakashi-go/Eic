<h1>一覧画面</h1>
<p><a href="{{ route('sport.create') }}">新規追加</a></p>
 
@if ($message = Session::get('success'))
<p>{{ $message }}</p>
@endif
 
<table border="1">
    <tr>
        <th>name</th>
        <th>詳細</th>
        <th>編集</th>
        <th>削除</th>
    </tr>
    @foreach ($sports as $sport)
    <tr>
        <td>{{ $sport->name }}</td>
        <th><a href="{{ route('sport.show',$sport->id)}}">詳細</a></th>
        <th><a href="{{ route('sport.edit',$sport->id)}}">編集</a></th>
        <th>
            <form action="{{ route('sport.destroy', $sport->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" name="" value="削除">
            </form>
        </th>
    </tr>
    @endforeach
</table>