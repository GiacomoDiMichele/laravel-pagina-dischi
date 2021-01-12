@extends('layouts.app')

@section('content')
    <main>
        <div class="section-main container">
            <div class="title-list-albums">
                <h2>Lista degli album:</h2>
            </div>
            <div class="albums-section">
                <div class="title-albums">
                    <h1>Tutti i dischi rock:</h1>
                </div>
                <div class="albums-container">
                    @foreach ($rock as $disco)
                    <div class="disco-singolo">
                        <h4>{{ $disco['artista'] }}</h4>
                        <p>{{ $disco['genere'] }}</p>
                        <p>{{ $disco['titolo'] }}</p>
                        <p>{{ $disco['anno'] }}</p>
                        <p>{{ $disco['nazione_artista'] }}</p>
                    </div>
                    @endforeach
                </div>
                <div class="title-albums">
                    <h1>Tutti i dischi pop:</h1>
                </div>
                <div class="albums-container">
                    @foreach ($pop as $disco)
                    <div class="disco-singolo">
                        <h4>{{ $disco['artista'] }}</h4>
                        <p>{{ $disco['genere'] }}</p>
                        <p>{{ $disco['titolo'] }}</p>
                        <p>{{ $disco['anno'] }}</p>
                        <p>{{ $disco['nazione_artista'] }}</p>
                    </div>
                    @endforeach
                </div>
                <div class="title-albums">
                    <h1>Tutti i dischi dance:</h1>
                </div>
                <div class="albums-container">
                    @foreach ($dance as $disco)
                    <div class="disco-singolo">
                        <h4>{{ $disco['artista'] }}</h4>
                        <p>{{ $disco['genere'] }}</p>
                        <p>{{ $disco['titolo'] }}</p>
                        <p>{{ $disco['anno'] }}</p>
                        <p>{{ $disco['nazione_artista'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
