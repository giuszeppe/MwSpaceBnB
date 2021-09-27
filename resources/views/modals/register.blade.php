
<div id="modalRegister" class="modal">
    <span class="close" title="Close Modal" onclick="document.getElementById('modalRegister').style.display='none'" >&times;</span>
        <form method="POST" action="{{ route('register') }}" class="modal-content animate shadow-div p-5">
            @csrf
            <div class="form-group row justify-content-center mb-1">
                <h1 class="m-0">Registrati</h1>
            </div>
        <hr class="path-separator">
            <div class="form-group row">
                <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>
                
                <div class="col-md-6">
                    <input id="username" type="text" class="form-control @error('username','register') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                    
                    @error('username','register')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name','register') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    
                    @error('name','register')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="surname" class="col-md-4 col-form-label text-md-right">Surname</label>
                
                <div class="col-md-6">
                    <input id="surname" type="text" class="form-control @error('surname','register') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>
                    
                    @error('surname','register')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="birthday" class="col-md-4 col-form-label text-md-right">Data di nascita</label>
                
                <div class="col-md-6">
                    <input id="birthday" type="date" class="form-control @error('birthday','register') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" required autocomplete="birthday" autofocus>
                    
                    @error('birthday','register')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            
            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                
                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email','register') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    
                    @error('email','register')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            
            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password','register') is-invalid @enderror" name="password" required autocomplete="new-password">
                    
                    @error('password','register')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            
            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                
                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
            
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
</div>