@extends('layout.admin')
@section('content')
    <div class="container">
        <h1 style="text-align: center; color: blue;">Listes des categories</h1>
        <table class="table w-100 table-bordered">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th style="width: 15rem;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $categorie)
                    <tr>
                        <td>{{ $categorie->nom }}</td>
                        <td class="text-nowrap" style="display: flex;justify-content: space-between;">
                            <button><a href="{{ route('admin.categorie.modifier', ['id' => $categorie->id]) }}"
                                    class="">Modifier</a></button>
                            <form method="POST" action="{{ route('admin.categorie.supprimer', $categorie->id) }}">
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
