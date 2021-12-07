@csrf
<div class="mb-3">
    <label for="question-title" class="form-label">Title</label>
    <input type="text" name="title" value="{{ old('title',$question->title) }}" id="question-title" class="form-control {{ $errors->has('title')? 'is-invalid':'' }}"
           placeholder="question title">
    @if($errors->has('title'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('title') ?? '' }}</strong>
        </div>
    @endif
</div>
<div class="mb-3">
    <label for="question-body" class="form-label">Title</label>
    <textarea name="body" id="question-body" rows="10" class="form-control {{ $errors->has('body')? 'is-invalid':'' }}">{{ old('body',$question->body) }}</textarea>
    @if($errors->has('body'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('body') ?? '' }}</strong>
        </div>
    @endif
</div>
<div class="mb-3 text-end">
    <button type="submit" class="btn btn-primary ">{{ $submit_button }}</button>
</div>
