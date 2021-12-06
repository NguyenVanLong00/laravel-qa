<div class="card mt-3">
    <h3 class="card-header">{{ $question->title ?? '' }}</h3>
    <p class="card-body">{{ str_limit($question->body ?? '',255) }}</p>
</div>
