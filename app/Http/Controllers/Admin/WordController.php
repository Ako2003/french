<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\VocabularyRequest;
use App\Models\Vocabulary;
use App\Models\Word;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

/**
 * Class WordController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class WordController extends Controller
{
    public function index()
    {
        $words = Vocabulary::where('user_id', backpack_user()->id)->paginate(100);
        return view('admin.word.index', [
            'title' => 'Word',
            'breadcrumbs' => [
                trans('backpack::crud.admin') => backpack_url('dashboard'),
                'Word' => false,
            ],
            'page' => 'resources/views/admin/word/index.blade.php',
            'controller' => 'app/Http/Controllers/Admin/WordController.php',
            'words' => $words,
        ]);
    }

    public function show(Vocabulary $word){
        $word = Vocabulary::where('id', $word->id)->where('user_id', backpack_user()->id)->firstOrFail();

        return view('admin.word.show', compact('word'));
    }

    public function edit(Vocabulary $word){
        $word = Vocabulary::where('id', $word->id)->where('user_id', backpack_user()->id)->firstOrFail();

        return view('admin.word.edit', compact('word'));
    }

    public function update(VocabularyRequest $request, Vocabulary $word){
        $word = Vocabulary::where('id', $word->id)->where('user_id', backpack_user()->id)->firstOrFail();
        // Update
        $word->word = $request->word;
        $word->translation = $request->translation;
        $word->meaning = $request->meaning;
        $word->synonym = $request->synonym;
        $word->antonym = $request->antonym;
        $word->save();


        return redirect()->route('word.index');
    }

    public function destroy(Vocabulary $word){
        $word = Vocabulary::where('id', $word->id)->where('user_id', backpack_user()->id)->firstOrFail();
        $word->delete();

        return redirect()->route('word.index');
    }
}
