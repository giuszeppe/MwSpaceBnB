
<div class="form-group mr-sm-3">
    <div class="wrapper">
        <div class="search-input">
            <input type="text" 
            placeholder="Indirizzo..." 
            id="search-box" 
            value="{{old('indirizzo') ?? $value ?? ''}}" 
            name="indirizzo" 
            class="form-control @error('indirizzo') is-invalid @enderror" 
            autocomplete="off"
            {{$required == "true" ? 'required' : ''}}
            >
            <div class="autocom-box">
                <!-- here list are inserted from javascript -->
            </div>
            <div id="coordinate" style="display:none">
                @if (old('indirizzo') !== null)
                    <input type="hidden" name="longitude" value="{{old('longitude')}}">
                    <input type="hidden" name="latitude" value="{{old('latitude')}}">
                @endif
            </div>
        </div>
        @error('indirizzo')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>