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
                        @csrf
                        <div class="mb-3">
                            <label for="question-title" class="form-label">Title</label>
                            <input type="text" name="title" id="question-title" class="form-control {{ $errors->has('title')? 'is-invalid':'' }}"
                                   placeholder="question title">
                            @if($errors->has('title'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('title') ?? '' }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="question-body" class="form-label">Title</label>
                            <textarea name="body" id="question-body" rows="10" class="form-control {{ $errors->has('body')? 'is-invalid':'' }}"></textarea>
                            @if($errors->has('body'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('body') ?? '' }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="mb-3 text-end">
                            <button type="submit" class="btn btn-primary ">Ask Question</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
