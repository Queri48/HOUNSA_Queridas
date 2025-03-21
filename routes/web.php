<?php

use App\Http\Controllers\admin\CategorieController;
use App\Http\Controllers\admin\OeuvreController;
use Illuminate\Support\Facades\Route;

Route::get('/categorie/ajouter', [CategorieController::class, 'ajouter'])->name('admin.categorie.ajouter');
Route::post('/categorie/ajouter/traitement', [CategorieController::class, 'ajouter_traitement'])->name('admin.categorie.ajouter_traitement');
Route::get('/categorie/liste', [CategorieController::class, 'liste'])->name('admin.categorie.liste');
Route::get('/categorie/{id}/modifier', [CategorieController::class, 'modifier'])->name('admin.categorie.modifier');
Route::post('/categorie/modifier/{id}/traitement', [CategorieController::class, 'modifier_traitement'])->name('admin.categorie.modifier_traitement');
Route::post('/categorie/{id}/supprimer', [CategorieController::class, 'supprimer'])->name('admin.categorie.supprimer');

Route::get('/oeuvre/ajouter', [OeuvreController::class, 'ajouter'])->name('admin.oeuvre.ajouter');
Route::post('/oeuvre/ajouter/traitement', [OeuvreController::class, 'ajouter_traitement'])->name('admin.oeuvre.ajouter_traitement');
Route::get('/oeuvre/liste', [OeuvreController::class, 'liste'])->name('admin.oeuvre.liste');
Route::get('/oeuvre/{id}/modifier', [OeuvreController::class, 'modifier'])->name('admin.oeuvre.modifier');
Route::post('/oeuvre/modifier/{id}/traitement', [OeuvreController::class, 'modifier_traitement'])->name('admin.oeuvre.modifier_traitement');
Route::post('/oeuvre/{id}/supprimer', [OeuvreController::class, 'supprimer'])->name('admin.oeuvre.supprimer');
