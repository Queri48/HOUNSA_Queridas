@extends('layout.admin')
@section('content')
    <div class="container">
        <h1 style="text-align: center; color: blue;">Listes des Oeuvres</h1>
        <table class="table w-100 table-bordered">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th style="width: 20rem;">Categorie</th>
                    <th style="width: 5rem;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($oeuvres as $oeuvre)
                    <tr>
                        <td>{{ $oeuvre->titre }}</td>
                        <td class="text-nowrap">{{ $oeuvre->categorie?->nom }}</td>
                        <td class="text-nowrap">
                            <button><a href="{{ route('admin.oeuvre.modifier', ['id' => $oeuvre->id]) }}"
                                    class="">Modifier</a></button>
                            <form method="POST" action="{{ route('admin.oeuvre.supprimer', $oeuvre->id) }}">
                                @csrf
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
