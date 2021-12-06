<div class="d-flex mt-3">
    <div class="counters d-flex flex-column">
        <div class="vote">
            <strong>{{ $question->votes ?? 0 }}</strong> {{ str_plural('vote',$question->votes) }}
        </div>
        <div class="status {{ $question->status ?? '' }}">
            <strong>{{ $question->answers ?? 0 }}</strong> {{ str_plural('answer',$question->answers) }}
        </div>
        <div class="view">
            <strong>{{ $question->views ?? 0 }}</strong> {{ str_plural('view',$question->views) }}
        </div>
    </div>
    <div class="card">
        <h3 class="card-header">
            <a href="{{ $question->url ?? '' }}">{{ $question->title ?? '' }}</a>
        </h3>
        <div class="card-body">
            <p class="lead">
                Ask by <a href="{{ $question->user->url ?? '' }}">{{ $question->user->name ?? '' }}</a>
                <small class="text-muted">{{ $question->created_date ?? '' }}</small>
            </p>
            <p>{{ str_limit($question->body ?? '',255) }}</p>
        </div>
    </div>
</div>

