<div class="card mt-3">
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
