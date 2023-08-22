<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div style="margin-top: 20%">
        <center >
            <h4>LAPORAN</h4>
        </center>
    </div>
    <table class="table mt-4"  border="1px" style="width: 100%">
        <thead>
            <tr>
                <th scope="col">No Invoice</th>
                <th scope="col">Name</th>
                <th scope="col">Order Date</th>
                <th scope="col">Shoe Brand</th>
                <th scope="col">Address</th>
                <th scope="col">Phone Number</th>
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
                </tr>
            @empty
                <tr>
                    <td colspan="7">data tidak ditemukan</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>
