<div class="card">
    <form method="POST" action="{{ route('task.update', [$task->id]) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="card-header">
            <h3>Editing task: #{{$task->id}}</h3>
        </div>
        <div class="form-group">
            <label>Status</label>
            <input class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" type="text" name="status" id="status" value="{{ old('task', $task->status) }}" required>
            @if($errors->has('status'))
                <div class="invalid-feedback">
                    {{ $errors->first('status') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Task Name</label>
            <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('task', $task->name) }}" required>
            @if($errors->has('name'))
                <div class="invalid-feedback">
                    {{ $errors->first('name') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label>Task Description:</label>
            <input class="form-control {{ $errors->has('content') ? 'is-invalid' : '' }}" type="text" name="content" id="content" value="{{ old('task', $task->content) }}" required>
            @if($errors->has('content'))
                <div class="invalid-feedback">
                    {{ $errors->first('content') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <button class="btn btn-update" type="submit">
                Update
            </button>
        </div>
    </form>
</div>
<style>
.btn-update{
    background-color: #24ffe3;
    padding: 5px;
    border-radius: 7px;
    margin: 10px;
}
.card{
    padding-left: 20px;
}
</style>



