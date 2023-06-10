@extends(backpack_view('blank'))

@section('content')
    <div class="form-container">
        <h2>{{__("Vocabulary")}}</h2>
        <form action="{{ route("vocabulary.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputWord">{{ __("The Word") }} <strong style="color:red">*</strong></label>
                    <input type="text" class="form-control" id="inputWord" name="word" placeholder="Word" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputTranlation">{{ __("The translation") }} <strong style="color:red">*</strong></label>
                    <input type="text" class="form-control" id="inputTranlation" name="translation" placeholder="Translation" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputMeaning">{{ __("The meaning") }}</label>
                    <input type="text" class="form-control" id="inputMeaning" name="meaning" placeholder="Meaning">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputSynonym">{{ __("Synonym") }}</label>
                    <input type="text" class="form-control" id="inputSynonym" name="synonym" placeholder="Synonym">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAntonim">{{ __("Antonim") }}</label>
                    <input type="text" class="form-control" id="inputAntonim" name="antonym" placeholder="Antonim">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-primary">{{ __('Add to the list') }}</button>
                </div>
            </div>
        </form>
    </div>
@endsection
