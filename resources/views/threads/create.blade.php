@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create a New Threads</div>

                    <div class="card-body">
                        <form action="/threads" method="POST">
                            {{ csrf_field() }}

                            <label for="title">Title:</label>
                            <input type="text" class="form-control" id="title" name="title">

                            <label for="body">Body:</label>
                            <textarea name="body" id="body" class="form-control"></textarea>

                            <button type="submit" class="btn btn-primary mt-3">Publish</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
