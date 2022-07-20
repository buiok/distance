@extends('layouts.main')

@section('content')
    <form>
        <label for="address">Введите адресс</label>
        <input type="text" name="address" id="address">
        <button type="submit">Найти</button>
    </form>
@endsection
