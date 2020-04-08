@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create a new article</div>

                    <div class="card-body form-group">
                        <form action="{{ route('article.update', ['article' => $article]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            @include('article.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
