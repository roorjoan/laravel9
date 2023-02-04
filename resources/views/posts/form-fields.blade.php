<div class="row mb-3">
    <label for="title" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}">
    </div>
    @error('title')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>
<div class="row mb-3">
    <label for="body" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
        <textarea class="form-control" name="body" id="body">{{ old('body', $post->body) }}</textarea>
    </div>
    @error('body')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>
<button type="submit" class="btn btn-success">Enviar</button>
