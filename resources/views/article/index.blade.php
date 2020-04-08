@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <a href="{{ route('article.create') }}" class="btn btn-primary">Create a new article</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">List of Articles</div>

                    <div class="card-body">
                        <ul class="form-group d-flex flex-column">
                            @foreach($articles as $article)
                                <li class="mb-4">
                                    <div class="d-flex flex-column mb-2">
                                        <a href="{{ route('article.show', ['article' => $article]) }}">{{ $article->name }}</a>
                                        <small class="text-muted">Created at: {{ \Carbon\Carbon::parse($article->created_at)->format('d/m/Y') }}</small>
                                        <label class="mt-1 font-italic">{{ \Illuminate\Support\Str::limit($article->content,150) }}</label>
                                    </div>
                                    <div class="d-flex">
                                        <a href="{{ route('article.edit', ['article' => $article]) }}" class="btn btn-primary p-0 px-2 mr-2">Edit</a>
                                        <form action="{{ route('article.destroy', ['article' => $article]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger p-0 px-2 ">Delete</button>
                                        </form>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
