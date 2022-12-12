@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card p-4">
            <h3 class="fw-bold">Data Customer</h3>
            @if(session()->has('message'))
                <div class="alert alert-success">{{ session()->get('message') }}</div>
            @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>No HP</th>
                                <th>Nama</th>
                                <th>Mobil Yang Diambil</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $customer->no_hp }}</td>
                                    <td>{{ $customer->nama }}</td>
                                    <td>
                                        @forelse ($customer->rentals as $rt)
                                            <ul>
                                                <li>{{ $rt->tipe }}</li>
                                            </ul>
                                        @empty
                                            Tidak ada mobil yang diambil
                                        @endforelse
                                    </td>
                                    <td>
                                        <a href="{{ route('customers.take',['customer' => $customer->id]) }}" class="btn btn-info">Ambil Mobil</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
