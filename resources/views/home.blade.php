@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <a href="{{ route('article.create') }}" class="btn btn-primary">New Article</a>

                </div>
            </div>

            <div class="card">
                <div class="card-header">List of Articles</div>

                <div class="card-body">
                    <ul>
                        @foreach()

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
