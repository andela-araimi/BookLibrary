@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Book</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="row">
                        <div class="col-md-4">
                            <form class="form-group" action="/book/update/{{ $book->id }}">
                                <img src="{{ $book->url }}">
                                <br>
                                <div class="form-control">
                                    <label>Title</label>
                                    <input type="text" value="{{ $book->title }}" name="title">
                                </div>

                                <div class="form-control">
                                    <label>Description</label>
                                    <input type="text" value="{{ $book->description }}" name="description">
                                </div>

                                <div class="form-control">
                                    <label>Price</label>
                                    <input type="text" value="{{ $book->price }}" name="price">
                                </div>

                                <div class="row">
                                    <button> Save</button>
                                </div>
                                
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
