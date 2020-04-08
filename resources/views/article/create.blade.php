@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><strong>Create a new article</strong></div>

                    <div class="card-body form-group">
                        <form action="{{ route('article.store') }}" method="POST">
                            @csrf
                            @include('article.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
