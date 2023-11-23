<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, th, td {
          border: 1px solid;
          padding: 5px
        }
        </style>
</head>
<body>
    <h2>Latest user </h2>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">sl</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($allData as $index => $single)
          <tr>
            <th>{{ ++$index }}</th>
            <td>{{ $single->name }}</td>
            <td>{{ $single->email }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</body>
</html>
