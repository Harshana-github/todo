<form action={{ route('todo.update', $task->id) }} method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="form-group">
                <input class="form-control" type="text" name="title" value="{{ $task->title }}" placeholder="Enter Task">
            </div>
        </div>
        <div class="col-lg-4">
            <button type="submit" class="btn btn-success">Updates</button>
        </div>
    </div>
</form>
