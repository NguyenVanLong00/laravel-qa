@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 card px-0">
                <div class="d-flex justify-content-between card-header">
                    <h2 class="header">{{ __('question.ask_question') }}</h2>
                    <a href="{{ route('question.index') }}"
                       class="btn btn-outline-primary fs-5">{{ __('question.back') }}</a>
                </div>
                <div class="card-body ">
                    <form action="{{ route('question.store') }}" method="post" class="card-body">
                        @include('questions._form',['submit_button'=>'Ask Question'])
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
