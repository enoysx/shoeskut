@extends('layouts.template')
@section('content')
    <div class="container mt-5 w-100">
        <div class="row justify-content-between">
            <div class="col">
                <h4>Payment</h4>
            </div>
            <div class="col">
                <a href="{{ url('/create-pembayaran') }}" class="btn btn-sm btn-primary">Tambah data</a>
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
                    <th scope="col">Treatment</th>
                    <th scope="col">Many</th>
                    <th scope="col">Price</th>
                    <th scope="col">Discount</th>
                    <th scope="col">Tax</th>
                    <th scope="col">Bank</th>
                    <th scope="col">Amount Due</th>
                    <th scope="col">Due Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($datas as $data)
                    <tr>
                        <td>{{ $data->invoice_number }}</td>
                        <td>{{ $data->customer_name }}</td>
                        <td>{{ $data->treatment }}</td>
                        <td>{{ $data->many }}</td>
                        <td>{{ $data->price }}</td>
                        <td>{{ $data->discount }}</td>
                        <td>{{ $data->tax }}</td>
                        <td>{{ $data->bank }}</td>
                        <td>{{ $data->amount_due }}</td>
                        <td>{{ $data->due_date }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <div class="">
                                    <a href="{{ url('/edit-pembayaran/' . $data->id) }}"
                                        class="btn btn-sm btn-warning">edit</a>
                                </div>
                                <div class="">
                                    <form action="{{ url('/delete-pembayaran/' . $data->id) }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger">delete</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">data tidak ditemukan</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{ $datas->links() }}
    </div>
@endsection
