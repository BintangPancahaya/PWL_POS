<!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
</head>
<body>
    <h1>Data User</h1>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Level ID</th>
            <th>Username</th>
            <th>Nama</th>
        </tr>
        <tr>
            <tr>
                <td>{{ $data->user_id }}</td>
                <td>{{ $data->level_id }}</td>
                <td>{{ $data->username }}</td>
                <td>{{ $data->nama }}</td>
            </tr>
        </tr>
    </table>
</body>
</html>