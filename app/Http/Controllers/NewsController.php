<?php

namespace App\Http\Controllers;

use App\DataTables\NewsDataTable;
use Illuminate\Http\Request;
use App\update;

class NewsController extends Controller
{
    public function create()
    {
        return view('admin.news.create');
    }

    public function index(NewsDataTable $dataTable)
    {
        return $dataTable->render('admin.news.index');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'news' => 'required|max:255'
        ]);

        update::create([
            'news' => $request->news
        ]);

        return redirect()->route('news.index')->with('success', 'News added successfully!');
    }

    public function edit($id)
    {
        $news = update::find($id);
        return view('admin.news.edit')->with('news', $news);
    }

    public function update(Request $request, $id)
    {
        $news = update::find($id);

        $this->validate($request,[
            'news' => 'required|max:255'
        ]);

        $news->news = $request->news;
        $news->save();

        return redirect()->route('news.index');
    }

    public function delete($id)
    {
        $news = update::find($id);
        $news->delete();
        return redirect()->back()->with('success', 'News deleted successfully!');
    }
}
