
<div class="card">
    <div class="card-header">
        Create task
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('task.store') }}" enctype="multipart/form-data">
            @csrf
            <input class="form-control hide" type=”hidden” name="status" id="status" value="todo" style="visibility: hidden;">
            <div class="form-group">
                <label>Task Name</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label>Task Description:</label>
                <input class="form-control {{ $errors->has('content') ? 'is-invalid' : '' }}" type="text" name="content" id="content" value="{{ old('content', '') }}" required>
                @if($errors->has('content'))
                    <div class="invalid-feedback">
                        {{ $errors->first('content') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    Create
                </button>
            </div>
        </form>
    </div>
</div>
