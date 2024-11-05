@extends('admin/layouts.app')

@section('content')

<main class="content">
    <div class="container-fluid p-0">
        
        <!-- Page Title -->
        <h1 class="h3 mb-3" >View<strong> Products</strong></h1>

        <div class="card">
            <table class="table my-0">
                <tr>
                    <th class="d-none d-md-table-cell">Product Name</th>
                    <th class="d-none d-md-table-cell">Description</th>
                    <th class="d-none d-md-table-cell">Price</th>
                    <th class="d-none d-md-table-cell">Product Type</th>
                    <th class="d-none d-md-table-cell">Images</th>
                    <th class="d-none d-md-table-cell">Actions</th>
                </tr>
                @foreach($products as $product)
                <tr>
                    <td class="d-none d-md-table-cell">{{ $product->product_title }}</td>
                    <td class="d-none d-md-table-cell">{{ $product->description }}</td>
                    <td class="d-none d-md-table-cell">{{ $product->price }}</td>
                    <td class="d-none d-md-table-cell">{{ $product->product_type }}</td>
                    <td>
                        <img src="{{ asset('product/'.$product->images) }}" alt="" width="100">
                    </td>
                    <td style="width: 150px;"> <!-- add this style attribute -->
                        <a href="#" class="btn btn-info btn-sm">
                            <i data-feather="eye"></i></a>
                        <a href="{{url('update_product', $product->id)}}" class="btn btn-primary btn-sm">
                            <i data-feather="edit"></i></a>
                        <a href="{{url('delete_product', $product->id)}}" class="btn btn-danger btn-sm" onclick="confirmation(event)">
                            <i data-feather="trash"></i></a>
                    </td>   
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</main>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" 
integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" 
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">

    function confirmation(ev) 
    {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');
        console.log(urlToRedirect);

        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this data!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willCancel) => {
                if (willCancel) {
                    window.location.href = urlToRedirect;
                 }
        });
    }
</script>
