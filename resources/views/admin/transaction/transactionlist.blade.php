@extends('layouts.dashboard')

@section('title', 'ReStyle Transaction List | Page')
@section('content')
<a class="btn btn-dark mt-3" href="{{ Route('product') }}">
    <i class="fa fa-chevron-circle-left"></i> Back</a>
    <div class="container mt-5 px-2">
        <div class="table-responsive mt-5">
            <table class="table table-responsive">

                <thead>
                    <tr class="bg-light">
                        {{-- <th scope="col" colspan="2"></th> --}}
                        <th>No</th>
                        <th scope="col">Product</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Subtotal</th>
                        <th scope="col">Transaction Date</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;

                    ?>
                    @foreach ($carts as $item)
                        <tr>
                            <td> {{ $no++ }} </td>
                            {{-- <th colspan="2"><input class="form-check-input" type="checkbox"></th> --}}
                            <td><strong>{{ $item->product->name }}</strong></td>
                            <td> {{ $item->qty }}</td>
                            <td>Rp. {{ number_format($item->product->price) }},-</td>
                            <td>Rp. {{ number_format($item->product->price * $item->qty) }},-</td>
                            <td> {{ $item->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <td><b>Total Spending</b></td>
                <td><b>Rp {{ number_format($total) }},-</b></td>
            </table>

        </div>

    </div>
@endsection
