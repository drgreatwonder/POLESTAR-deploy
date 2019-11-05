@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a New Platform</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                    @endif

                    <form action="{{ route('medium.store')}}" method="post">

                        <div class="form-group">

                            <input type="text" name="medium" class="form-control">

                        </div>

                        <div class="form-group">

                            <div class="text-center">

                                <button class="btn btn-success" type="submit">

                                    Save Platform

                                </button>

                            </div>
                        </div>
@csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
