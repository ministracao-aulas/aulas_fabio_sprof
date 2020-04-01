<a href="{{ route('product_list') }}">Product list</a>
<br>
<table style="width:100%; text-align:left">
    <tr>
        <th>id</th>
        <th>category</th>
        <th>manufacturer</th>
        <th>name</th>
        <th>stock_qtd</th>
        <th>price</th>
        <th>available</th>
        <th></th>
    </tr>
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->category }}</td>
        <td>{{ $product->manufacturer }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->stock_qtd }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ ($product->available) ? 'Available' : 'Unvailable' }}</td>
        <td>
            <a href="{{ route('product_detail', $product->id) }}">Show</a> |
            <a href="#edit">Edit</a> |
            <a href="{{ route('product_delete', $product->id) }}">Delete</a>
        </td>
    </tr>
</table>
