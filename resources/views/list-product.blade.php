<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>hello</h1>
    <Table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($products as $value)
            <tr>
                <td>{{$value['id']}}</td>
                <td>{{$value['name']}}</td>

            </tr>
            @endforeach
        </tbody>

    </Table>
</body>

</html>