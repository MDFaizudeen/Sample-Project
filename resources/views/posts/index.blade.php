<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <h1>Bus Info</h1>
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Bus Name</th>
                <th>Starting Point</th>
                <th>End point</th>
                <th>Cost</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->bus_name }}</td>
                    <td>{{ $post->starting_point }}</td>
                    <td>{{ $post->end_point }}</td>
                    <td>{{ $post->cost}}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>