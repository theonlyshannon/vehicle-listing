@extends('layouts.admin')

@section('title', 'Create vehicle')

@section('tabel')
    <h1 class="mb-0">Add vehicle</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder=" jenis Kendaraan">
            </div>
            <div class="col">
                <input type="text" name="price" class="form-control" placeholder="Nomor Kendaraan">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="product_code" class="form-control" placeholder="Merk Kendaraan">
            </div>
            <div class="col">
                <textarea class="form-control" name="description" placeholder="Description"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
