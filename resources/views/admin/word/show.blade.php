@extends(backpack_view('blank'))

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <div class="float-right">
                            <a href="{{ route('word.index') }}" class="btn btn-sm btn-link"><i class="la la-arrow-left"></i>  Back</a>
                        </div>
                        <h3> {{__($word->word)}} </h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3"><strong>Translation:</strong> {{ $word->translation }}</div>
                        <div class="col-md-3"><strong>Meaning:</strong> {{ $word->meaning }}</div>
                        <div class="col-md-3"><strong>Synonym:</strong> {{ $word->synonym }}</div>
                        <div class="col-md-3"><strong>Antonym:</strong> {{ $word->antonym }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
