<h1>詳細画面</h1>
<p><a href="{{ route('sports.index')}}">一覧画面</a></p>
 
<table border="1">
    <tr>
        <th>id</th>
        <th>title</th>
        <th>author</th>
        <th>created_at</th>
        <th>updated_at</th>
    </tr>
    <tr>
        <td>{{ $sports->id }}</td>
        <td>{{ $sports->title }}</td>
        <td>{{ $sports->author }}</td>
        <td>{{ $sports->created_at }}</td>
        <td>{{ $sports->updated_at }}</td>
    </tr>
</table>