<h1>詳細画面</h1>
<p><a href="{{ route('sport.index')}}">一覧画面</a></p>
 
<table border="1">
    <tr>
        <th>id</th>
        <th>name</th> 
        <th>created_at</th>
        <th>updated_at</th>
    </tr>
    <tr>
        <td>{{ $sport->id }}</td>
        <td>{{ $sport->name }}</td> 
        <td>{{ $sport->created_at }}</td>
        <td>{{ $sport->updated_at }}</td>
    </tr>
</table>