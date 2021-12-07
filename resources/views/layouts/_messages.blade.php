@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show my-3" role="alert">
        <strong>Success! </strong> {{ session('success') ?? '' }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

