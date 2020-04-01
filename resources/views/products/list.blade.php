<style>
.available{
    color: green;
}
.unvailable{
    color: red;
}
</style>
<a href="{{ route('create_fake_product') }}">Create fake product</a>
<br>
@if( count($products) > 0 )
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
    @foreach ($products as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->category }}</td>
            <td>{{ $p->manufacturer }}</td>
            <td>{{ $p->name }}</td>
            <td>{{ $p->stock_qtd }}</td>
            <td>{{ $p->price }}</td>
            <td class="
                {{ ($p->available) ? 'available' : 'unvailable' }}
                ">
                {{ ($p->available) ? 'Available' : 'Unvailable' }}
            </td>
            <td>
                <a href="{{ route('product_detail', $p->id) }}">Show</a> |
                <a href="#edit">Edit</a> |
                <a href="{{ route('product_delete', $p->id) }}">Delete</a>
            </td>
        </tr>
    @endforeach
    </table>
@else
    <h5>No products to list</h5>
    <a href="{{ route('create_fake_product') }}">Create fake product</a>
@endif
