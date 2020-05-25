<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Article;
class ArticleController extends Controller
{
    public function index() {
        return view('index');
    }

    public function store(Request $request) {
        Article::create([
            'title' => $request->title,
            'description' => $request->description
        ]);
        return back();
    }

    public function show() {
        $articles = Article::all();
        return view('list', [
            'articles' => $articles
        ]);
    }
}




