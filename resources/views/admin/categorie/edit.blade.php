@extends('layout.admin')
@section('content')
    <h1 style="text-align: center; color: blue;">Formulaire Pour ajouter une Catégorie</h1>
    <div class="container">
        @session('success')
            <div class="alert alert-success">
                {{ $value }}
            </div>
        @endsession
        @dump($errors)
        <form method="POST" action="{{ route('admin.categorie.modifier_traitement', $categorie->id) }}">
            @csrf
            <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                <div class="col-12">
                    <label for="nom" class="form-label">Nom <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom', $article->nom) }}" required>
                    @error('nom')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                <textarea class="form-control" id="description" name="description" rows="3" value="{{ old('description', $article->description) }}" required></textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12" style="margin-top: 50px">
                <div class="d-grid">
                    <button class="btn btn-primary btn-lg" type="submit">Créer
                        Catégorie</button>
                </div>
            </div>
        </form>
    </div>
@endsection
