@extends(backpack_view('blank'))

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                        <h3> {{__("Vocabulary")}} </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach($words as $word)
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <strong style="background-color: rgba(134, 0, 134, 0.674); padding:1px 7px; border-radius:50px; color:white;">{{ $loop->iteration }}</strong>
                                        {{ $word->word }}
                                        {{-- Buttons show, edit and delete --}}
                                        <div class="float-right">
                                            <a href="{{ route('word.show', $word->id) }}" class="btn btn-sm btn-link"><i class="la la-eye"></i></a>
                                            <a href="{{ route('word.edit', $word->id) }}" class="btn btn-sm btn-link"><i class="la la-edit"></i></a>
                                            <form action="{{ route('word.destroy', $word->id) }}" method="POST" class="form-inline float-right">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-link"><i class="la la-trash"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text"><strong>Translation:</strong> {{ $word->translation }}</p> <hr>
                                        <p class="card-text"><strong>Meaning:</strong> {{ $word->meaning }}</p> <hr>
                                        <p class="card-text"><strong>Synonym:</strong> {{ $word->synonym }}</p> <hr>
                                        <p class="card-text"><strong>Antonym:</strong> {{ $word->antonym }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {{ $words->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
