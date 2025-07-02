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
            <td>{{ $product->title }}</td>
            <td>{{ $product->category }}</td>
            <td>{{ $product->price }}</td>
        </tr>
    @endforeach
    </tbody>
</table>