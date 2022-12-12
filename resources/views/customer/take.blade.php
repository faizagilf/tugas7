@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card p-4">
            <h3 class="fw-bold">Ambil Mobil</h3>
            <div class="card-body">
                <form action="{{ route('customers.takeStore',['customer' => $customer->id]) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="rental_id" class="form-label">Jenis Mobil</label>
                    <div class="form-group">
                        @foreach ($rentals as $item)
                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="rental_id" id="{{ $item->id }}" class="form-check-input" value="{{ $item->id }}" {{ $customer->rentals()->find($item->id) ? 'checked' : '' }}>
                                <label for="{{ $item->id }}" class="form-check-label">{{ $item->tipe }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <button type="submit" class="btn btn-dark">Ambil</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
