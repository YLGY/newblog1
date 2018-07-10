<form action="{{ route('statuses.store') }}" method="POST">
    @csrf

    @include('shared._errors')

    <textarea name="content" rows="3" class="form-control" placeholder="Say something...">
        {{ old('content ')}}
    </textarea>
    <button class="btn btn-primary status-home__btn" type="submit">Post</button>
</form>