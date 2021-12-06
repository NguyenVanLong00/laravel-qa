@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <h1 class="header text-center">{{ __('common.questions') }}</h1>
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
