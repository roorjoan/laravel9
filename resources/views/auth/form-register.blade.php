<div class="col-12">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
        autofocus="autofocus">
    @error('name')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>
<div class="col-md-6">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
    @error('email')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>
<div class="col-md-12">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
    @error('password')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>
<div class="col-md-12">
    <label for="password_confirmation" class="form-label">Password Confirmation</label>
    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
    @error('password_confirmation')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>
<div class="col-12">
    <button type="submit" class="btn btn-primary">Register</button>
</div>
