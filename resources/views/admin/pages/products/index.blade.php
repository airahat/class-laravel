@extends("admin.layout.nav")
@section("title", "Products")

@section("content")

<h1>Product List</h1>
<table class="table table-striped">
<thead>
    <tr>
        <th>SL</th>
        <th>Title</th>
        <th>Description</th>
        <th>Category</th>
        <th>Price</th>
        <th>Photo</th>
    </tr>
</thead>

<tbody>
    @foreach ($products as $i=> $product)
    <tr>
        <th>{{ $i +1 }}</th>
        <th>{{ $product["title"] }}</th>
        <th>{{ $product["description"] }}</th>
        <th>{{ $product["category_id"] }}</th>
        <th>{{ $product["price"] }}</th>
        <th>{{ $product["photo"] }}</th>

    </tr>
    @endforeach

</tbody>

<tfoot>
    <tr>
                <th  colspan="6">
            {{ $products->links() }}
        </th>
    </tr>
</tfoot>

</table>
@endsection