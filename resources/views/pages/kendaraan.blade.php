@extends('layouts.admin')
@section('judul', '')

@section('tabel')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Vehicle</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Add Vehicle</a>
    </div>
    <hr />
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Vehicle Table</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kendaraan</th>
                            <th>Nomor Kendaraan</th>
                            <th>Merk Kendaraan</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($product->count() > 0)
                            @foreach ($product as $rs)
                                <tr>
                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle">{{ $rs->title }}</td>
                                    <td class="align-middle">{{ $rs->price }}</td>
                                    <td class="align-middle">{{ $rs->product_code }}</td>
                                    <td class="align-middle">{{ $rs->description }}</td>
                                    <td class="align-middle">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('products.show', $rs->id) }}" type="button"
                                                class="btn btn-secondary">Detail</a>
                                            <a href="{{ route('products.edit', $rs->id) }}" type="button"
                                                class="btn btn-warning">Edit</a>
                                            <form action="{{ route('products.destroy', $rs->id) }}" method="POST" type="button"
                                                class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger m-0">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="text-center" colspan="5">Product not found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
