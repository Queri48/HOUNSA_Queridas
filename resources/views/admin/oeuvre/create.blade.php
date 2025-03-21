@extends('layout.admin')
@section('content')
    <h1 style="text-align: center; color: blue;">Formulaire Pour ajouter un Articles</h1>
    <div class="container">
        @session('success')
            <div class="alert alert-success">
                {{ $value }}
            </div>
        @endsession
        @dump($errors)
        <form method="POST" action="{{ route('admin.oeuvre.ajouter_traitement') }}" enctype="multipart/form-data">
            @csrf
            <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                <div class="col-12">
                    <label for="titre" class="form-label">Titre <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="titre" name="titre" value="" required>
                    @error('titre')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                <div class="col-12">
                    <label for="artiste" class="form-label">Artiste <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="artiste" name="artiste" value="" required>
                    @error('artiste')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                <div class="col-12">
                    <label for="annee_fabrication" class="form-label">Année de fabrication <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="annee_fabrication" name="annee_fabrication" value="" required>
                    @error('annee_fabrication')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                <div class="col-12">
                    <label for="date_acquisition" class="form-label">Date d'acquisition <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="date_acquisition" name="date_acquisition" value="" required>
                    @error('date_acquisition')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                <div class="col-12">
                    <label for="prix" class="form-label">Prix <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="prix" name="prix" value="" required>
                    @error('prix')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                <textarea class="form-control" id="description" name="description" rows="3" cols="40" required></textarea>
                @error('description')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                <div class="col-12">
                    <label for="photo" class="form-label">Photo <span class="text-danger">*</span></label>
                    <input type="file" class="form-control" id="photo" name="photo" value="" required>
                    @error('photo')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                <div class="col-12">
                    <label for="categorie_id" class="form-label">Categorie <span class="text-danger">*</span></label>
                    <select name="categorie_id" class="form-control form-select" id="categorie_id">
                        <option value="" selected>Selectionner une catégorie</option>
                        @foreach ($categories as $categorie)
                            <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                        @endforeach
                    </select>
                    @error('categorie_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="d-grid">
                    <button class="btn btn-primary btn-lg" type="submit">Créer
                        Oeuvre</button>
                    </div>
                </div>
            </form>
        </div>
        @endsection
