<?php

namespace App\Http\Controllers\Admin;


use App\Models\Vocabulary;
use Illuminate\Routing\Controller;
use App\Http\Requests\VocabularyRequest;


/**
 * Class VocabularyController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class VocabularyController extends Controller
{
    public function index()
    {
        return view('admin.vocabulary', [
            'title' => 'Vocabulary',
            'breadcrumbs' => [
                trans('backpack::crud.admin') => backpack_url('dashboard'),
                'Vocabulary' => false,
            ],
            'page' => 'resources/views/admin/vocabulary.blade.php',
            'controller' => 'app/Http/Controllers/Admin/VocabularyController.php',
        ]);
    }

    public function store(VocabularyRequest $request){

        // Create a new vocabulary
        $vocabulary = new Vocabulary();
        $vocabulary->word = $request->word;
        $vocabulary->translation = $request->translation;
        $vocabulary->meaning = $request->meaning;
        $vocabulary->synonym = $request->synonym;
        $vocabulary->antonym = $request->antonym;
        $vocabulary->user_id = backpack_user()->id;
        $vocabulary->save();

        // Redirect to the previous page
        return redirect()->back();
    }

    
}
