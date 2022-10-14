@extends('layouts.main')

@section('content')

<div class="container" id="container">
    <div class="form-container sign-in-container">
        <form action="{{ route('calc') }}" method="POST">
            @if($errors->any())
                <p>Невозможно распознать расстояние. <br>Пожалуйста, выберите ближайшие адреса. </p>
            @endif
            @csrf
            <h1>Введи адреса</h1><br>
            <input type="text" name="address1" id="address1" value="{{ old('address1') }}" placeholder="Начните вводить" required>
            <input type="hidden" name="geo_lat1" id="geo_lat1">
            <input type="hidden" name="geo_lon1" id="geo_lon1">
            <input type="text" name="address2" id="address2" value="{{ old('address2') }}" placeholder="Начните вводить" required>
            <input type="hidden" name="geo_lat2" id="geo_lat2">
            <input type="hidden" name="geo_lon2" id="geo_lon2">
            <button type="submit">Найти</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-right">
                @if(session('add1'))
                    <h2>Расстояние </h2>
                    <div class="dist">
                        <p style="font-size: 20px">от <br>
                        <b>{{ session('add1') }}</b><br><br>
                        до<br>
                        <b>{{ session('add2') }}</b>:<br><br></p>
                        <h1>{{ session('res') }} км</h1>
                    </div>
                @else
                    <h1>Расстояние <br>между адресами</h1>
                    <p>Введи данные в поля</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
