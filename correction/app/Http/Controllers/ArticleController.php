<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Unit;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $articles = Article::all();
        $status = $request->session()->get('status', null);
        $statusType = $request->session()->get('status_type', '');

        return view('articles_index', compact('articles', 'status', 'statusType'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name')->pluck('name', 'id')->all();
        $units = Unit::orderBy('name')->pluck('name', 'id')->all();

        return view('article_form', compact('categories', 'units'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $newArticle = new Article($request->all());
            $newArticle->save();
            $request->session()->flash('status', "Article {$newArticle->name} ajouté");
            $request->session()->flash('status_type', 'success');
        } catch (\Exception $e) {
            $request->session()->flash('status', "L'article {$newArticle->name} n'a pas pu être ajouté");
            $request->session()->flash('status_type', 'danger');
        }
        return redirect(route('articles.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('articles_details', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $categories = Category::orderBy('name')->pluck('name', 'id')->all();
        $units = Unit::orderBy('name')->pluck('name', 'id')->all();

        return view('article_form', compact('article', 'categories', 'units'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        try {
            $article->update($request->all());
            $request->session()->flash('status', "Article $article->name mis à jour");
            $request->session()->flash('status_type', 'success');
        } catch (\Exception $e) {
            $request->session()->flash('status', "Article $article->name pas mis à jour");
            $request->session()->flash('status_type', 'danger');
        }

        return redirect(route('articles.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article, Request $request)
    {
        try {
            $article->delete();
            $request->session()->flash('status', "Article {$article->name} supprimé");
            $request->session()->flash('status_type', 'success');
        } catch (\Exception $e) {
            $request->session()->flash('status', "Article {$article->name} pas supprimé");
            $request->session()->flash('status_type', 'danger');
        }

        return redirect(route('articles.index'));
    }
}
