@extends('layouts.app')

@section('title', 'Lanes')

@section('content')
<div class="container">
    <div class="d-flex align-items-center justify-content-between my-2">
        <a href="{{ url()->previous() }}" class="btn btn-secondary btn-sm d-flex align-items-center"><i
                class="la la-angle-left"></i> BACK</a>
        <h2>New Lane</h2>
    </div>

    <form action="{{ route('lanes.create') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Name *</label>
            <fieldset class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{ old('name') }}"
                    required>
            </fieldset>
        </div>



        <div class="form-group">
            <label for="price">Price *</label>
            <fieldset class="form-group">
                <input type="double" name="price" class="form-control" placeholder="Enter Price"
                    value="{{ old('price') }}" required>
            </fieldset>
        </div>

        <button type="submit" class="btn btn-info btn-block">
            Create
        </button>
    </form>
</div>
@endsection