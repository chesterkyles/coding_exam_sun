@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header"><strong>{{ $article->name }}</strong></div>

                    <div class="card-body">
                        {!! nl2br(e($article->content)) !!}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
