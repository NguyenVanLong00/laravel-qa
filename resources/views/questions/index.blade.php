@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="d-flex justify-content-between">
                    <h2 class="header">{{ __('question.questions') }}</h2>
                    @auth
                    <a href="{{ route('question.create') }}" class="btn btn-outline-primary fs-5">{{ __('question.create') }}</a>
                    @endauth
                </div>
                    @include('layouts._messages')

                    @foreach($questions as $question)
                        <x-question :question="$question"></x-question>
                    @endforeach
                    <div class="py-3">
                        {{ $questions->links() }}
                    </div>

            </div>
        </div>
    </div>
@endsection
