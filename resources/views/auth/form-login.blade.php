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
<div class="col-12">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="remember" name="remember">
        <label class="form-check-label" for="remember">
            Remember
        </label>
    </div>
</div>
<div class="col-12">
    <button type="submit" class="btn btn-primary">Login</button>
</div>
