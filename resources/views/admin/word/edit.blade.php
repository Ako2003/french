@extends(backpack_view('blank'))

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                {{-- Edit the word --}}
                <form action="{{ route("word.update", $word->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="word">Word</label>
                            <input class="form-control" value="{{ $word->word }}" type="text" name="word" id="word">
                        </div>
                        <div class="form-group">
                            <label for="translation">Translation</label>
                            <input class="form-control" value="{{ $word->translation }}" type="text" name="translation" id="translation">
                        </div>
                        <div class="form-group">
                            <label for="meaning">Meaning</label>
                            <input class="form-control" value="{{ $word->meaning }}" type="text" name="meaning" id="meaning">
                        </div>
                        <div class="form-group">
                            <label for="synonym">Synonym</label>
                            <input class="form-control" value="{{ $word->synonym }}" type="text" name="synonym" id="synonym">
                        </div>
                        <div class="form-group">
                            <label for="antonym">Antonym</label>
                            <input class="form-control" value="{{ $word->antonym }}" type="text" name="antonym" id="antonym">
                        </div>

                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-primary" type="submit">Save</button>
                        <a href="{{ route('word.index') }}" class="btn btn-sm btn-link">Cancel</a>
                    </div>
                </form>



@endsection
