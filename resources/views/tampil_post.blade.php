<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tampil Post Laravel</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
        </tr>
        @php $no = 1; @endphp
        @foreach ($post as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->id }}</td>
                <td>{{ $data->title }}</td>
                <td>{{ $data->content }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>