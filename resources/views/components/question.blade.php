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
    <div class="card w-100">
        <div class="card-header d-flex justify-content-between">
            <h3>
                <a href="{{ $question->url ?? '' }}">{{ $question->title ?? '' }}</a>
            </h3>
            <div class="w-25 text-end">
                <a href="{{ route('question.edit',$question->id) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                <form action="{{ route('question.destroy',$question->id) }}" method="post" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure to delete this question?')" >Delete</button>
                </form>
            </div>
        </div>
        <div class="card-body">
            <p class="lead">
                Ask by <a href="{{ $question->user->url ?? '' }}">{{ $question->user->name ?? '' }}</a>
                <small class="text-muted">{{ $question->created_date ?? '' }}</small>
            </p>
            <p>{{ str_limit($question->body ?? '',255) }}</p>
        </div>
    </div>
</div>

