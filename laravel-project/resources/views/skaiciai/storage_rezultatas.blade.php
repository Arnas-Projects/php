@extends('tevas')

@section('turinys')

    @if ($rezultatas !== '')
        <h1>
            <ul class="numbers-storage">
                @foreach ($rezultatas as $skaicius)
                    <li>{{ $skaicius }}</li>
                @endforeach
            </ul>
        </h1>
    <form method="POST" action="{{ route('valymas-storage') }}">
        @csrf
        <button type="submit">Išvalyti</button>
        <a class="back-link" href="{{ route('home-forma') }}">Grįžti</a>
    </form>
    @else
        <h1>Skaičių dar nėra</h1>
    @endif

    @if ($rezultatas === '')
        <a class="back-link2" href="{{ route('home-forma') }}">Grįžti</a>
    @endif

@endsection

@section('pavadinimas', 'Skaičių saugykla')
