<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>category</th>
            <th>price</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td w='20' align='center'>{{ $product->title }}</td>
            <td w='20' align='center'>{{ $product->category }}</td>
            <td w='20' align='center'>{{ $product->price }}</td>
        </tr>
        @endforeach
    </tbody>
</table>