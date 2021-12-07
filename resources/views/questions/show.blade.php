@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 card px-0">
                <div class="d-flex justify-content-between card-header">
                    <h2 class="header">{{ $question->title ?? '' }}</h2>
                    <a href="{{ route('question.index') }}"
                       class="btn btn-outline-primary fs-5">{{ __('question.back') }}</a>
                </div>
                <div class="card-body ">
                   {{ $question->body ?? '' }}
                </div>

            </div>
        </div>
    </div>
@endsection
