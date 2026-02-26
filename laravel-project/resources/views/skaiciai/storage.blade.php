@extends('tevas')

@section('turinys')

    <form method="POST" action="{{ route('apdorojimas-storage') }}">
        <div>
            <label>Skaičiaus išsaugojimas:</label>
            <input type="number"name="skaicius1" value="{{ old('skaicius1') }}">
        </div>

        @csrf
        <button type="submit">Saugoti</button>
    </form>
@endsection

@section('pavadinimas', 'Skaičiaus saugojimas')