@extends('layouts.template')
@section('content')
    <div class=" w-50 mb-3 p-5">
        <h4 class="mt-3">Input Data</h4>
        <form method="POST" class="mt-5" action="{{ url('/post-penjemputan') }}">
            @csrf
            <div class="mb-3">
                <input type="hidden" name="penjemputan_id" value="{{ $data ? $data->id : 0 }}">
                <label class="form-label">Customer</label>
                <select class="form-select" required name="customer_id" id="">
                    <option disabled>pilih</option>
                    @forelse ($customers as $key => $cust)
                        <option value="{{ $cust->id }}" @if ($cust->id == old('customer_id', $data->customer_id ?? 0)) selected="selected" @endif>
                            {{ $cust->name }}</option>
                    @empty
                        <option value="">data tidak ditemukan</option>
                    @endforelse
                </select>
                <label class="form-label">Pickup Date</label>
                <input type="date" required name="pickup_date"
                    value="{{ $data ? $data->pickup_date : '' }}"class="form-control">
                <label class="form-label">Status</label>
                <select class="form-select" required name="status" id="">
                    <option disabled>pilih</option>
                    <option value="penjemputan">Pick Up</option>
                    <option value="pengerjaan">Workmanship</option>
                    <option value="delivery">Delivery</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
