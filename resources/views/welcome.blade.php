<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/store" method="post">
        @csrf
        <input type="text" name="name">
        <input type="text" name="description">
        <input type="text" name="price">
        <input type="submit" value="Submit">
    </form>

    <table>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <form action="/destroy" method="post">
                        @csrf
                        <input type="hidden" name="id" id="deletId" value="{{ $product->id }}">
                        <button type="submit">delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <script>
        
    </script>
</body>

</html>