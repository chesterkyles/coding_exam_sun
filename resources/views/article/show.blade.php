@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header d-flex flex-column">
                        <strong>{{ $article->name }}</strong>
                        <small class="text-muted">Created at: {{ \Carbon\Carbon::parse($article->created_at)->format('d/m/Y') }}</small>
                    </div>

                    <div class="card-body">
                        {!! nl2br(e($article->content)) !!}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
