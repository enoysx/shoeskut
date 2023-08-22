@extends('layouts.template')
@section('content')
    <div class=" w-50 mb-3 p-5">
        <h4 class="mt-3">Input Data</h4>
        <form method="POST" class="mt-5" action="{{ url('/post-customer') }}">
            @csrf
            <div class="mb-3">
                <input type="hidden" name="customer_id" value="{{ $customer ? $customer->id : 0 }}">
                <label class="form-label">Name</label>
                <input type="text" name="name" required value="{{ $customer ? $customer->name : '' }}" class="form-control" placeholder="">
                <label class="form-label">Phone Number</label>
                <input type="text" name="phone" required value="{{ $customer ? $customer->phone : '' }}" class="form-control" placeholder="">
                <label class="form-label">Treatment</label>
                <input type="text" name="treatment" required value="{{ $customer ? $customer->treatment : '' }}" class="form-control" placeholder="Regular Wash or Deep Clean">
                <label class="form-label">Shoe Brand</label>
                <input type="text" name="shoe_brand" required value="{{ $customer ? $customer->shoe_brand : '' }}"
                    class="form-control" placeholder="Example: Nike, Puma, Adidas etc">
                <label class="form-label">Color</label>
                <input type="text" name="color" required value="{{ $customer ? $customer->color : '' }}" class="form-control" placeholder="Example: White, Black">
                <label class="form-label">Minus</label>
                <input type="text" name="minus" required value="{{ $customer ? $customer->minus : '' }}"
                    class="form-control" placeholder="Example : Yellowing, Chipped Glue">
                <label class="form-label">Size</label>
                <input type="text" name="size" required value="{{ $customer ? $customer->size : '' }}" class="form-control" placeholder="Example: 39/40/41">
                <label class="form-label">Order Date</label>
                <input type="date" name="order_date" required value="{{ $customer ? $customer->order_date : '' }}"
                    class="form-control" placeholder="">
                <label class="form-label">Address</label>
                <textarea name="address" id="" required class="form-control" placeholder=""
                    cols="10" rows="2">{{ $customer ? $customer->address : '' }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
