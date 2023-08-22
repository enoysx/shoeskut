@extends('layouts.template')
@section('content')
    <div class="container mt-5 w-100">
        <div class="row justify-content-between">
            <div class="col">
                <h4>Report Order</h4>
            </div>
            <div class="col">
                <form action="{{ url('/print-laporan') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-danger">Print Report</button>
                </form>

            </div>
        </div>
        <form action="" method="get">
            @include('partials.filter_components')
        </form>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">Invoice Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Order Date</th>
                    <th scope="col">Shoe Brand</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Treatment</th>
                    <th scope="col">Many</th>
                    <th scope="col">Price</th>
                    <th scope="col">Amount Due</th>
                    {{-- <th scope="col">Aksi</th> --}}
                </tr>
            </thead>
            <tbody>
                @forelse ($customers as $customer)
                    <tr>
                        <td>{{ $customer->invoice_number }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->order_date }}</td>
                        <td>{{ $customer->shoe_brand }}</td>
                        <td>{{ $customer->address }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>{{ $customer->treatment }}</td>
                        <td>{{ $customer->many }}</td>
                        <td>{{ $customer->price }}</td>
                        <td>{{ $customer->amount_due }}</td>
                        {{-- <td>
                            <div class="d-flex gap-2">
                                <div class="">
                                    <a href="{{ url('/edit-customer/' . $customer->id) }}"
                                        class="btn btn-sm btn-warning">edit</a>
                                </div>
                                <div class="">
                                    <form action="{{ url('/delete-customer/' . $customer->id) }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger">delete</button>
                                    </form>
                                </div>
                            </div>
                        </td> --}}
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">data tidak ada</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{ $customers->links() }}
    </div>
@endsection
