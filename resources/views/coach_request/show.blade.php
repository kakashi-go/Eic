<h1>詳細画面</h1>
<p><a href="{{ route('coach_request.index')}}">一覧画面</a></p>
 
<table border="1">
    <tr>
        <th>id</th>
        <th>name</th> 
        <th>created_at</th>
        <th>updated_at</th>
    </tr>
    <tr>
        <td>{{ $coach_request->id }}</td> 
        <td>{{ $coach_request->name }}</td> 
        <td>{{ $coach_request->created_at }}</td>
        <td>{{ $coach_request->updated_at }}</td>
    </tr>
</table>