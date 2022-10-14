@extends('layouts.main')

@section('content')
    <form action="{{ route('calc') }}" method="POST">
        @csrf
        <label for="address">Введите адрес</label><br>
        <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}">
        <input type="hidden" name="geo_lat" id="geo_lat">
        <input type="hidden" name="geo_lon" id="geo_lon">
        <button type="submit" class="btn btn-primary">Найти</button>
    </form>

    @if(session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

@endsection
