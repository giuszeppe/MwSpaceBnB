
<div class="form-group">
    <div class="wrapper">
        <div class="search-input">
            <input type="text" 
            placeholder="Indirizzo..." 
            id="search-box" 
            value="{{old('indirizzo')}}" 
            name="indirizzo" class="form-control @error('indirizzo') is-invalid @enderror" 
            autocomplete="off"
            {{$required == "true" ? 'required' : ''}}
            >
            <div class="autocom-box">
                <!-- here list are inserted from javascript -->
            </div>
        </div>
        @error('indirizzo')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>