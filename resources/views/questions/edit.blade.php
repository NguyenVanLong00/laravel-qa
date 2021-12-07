@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 card px-0">
                <div class="d-flex justify-content-between card-header">
                    <h2 class="header">{{ __('question.edit_question') }}</h2>
                    <a href="{{ route('question.index') }}"
                       class="btn btn-outline-primary fs-5">{{ __('question.back') }}</a>
                </div>
                <div class="card-body ">
                    <form action="{{ route('question.update',$question->id) }}" method="post" class="card-body">
                        {{ method_field('PUT') }}
                        @include('questions._form',['submit_button'=>'Save Question'])
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
