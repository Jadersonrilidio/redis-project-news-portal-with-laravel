<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>News</th>
            <th>Created at</th>
        </tr>
    </thead>
    <tbody>
        @foreach($news as $new)
            <tr>
                <td>{{ $new->id }}</td>
                <td>{{ $new->title }}</td>
                <td>{{ $new->news }}</td>
                <td>{{ $new->created_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>