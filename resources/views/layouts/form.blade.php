fieldset>
    <h1 class="text-center text-white pb-4 pt-5"><u>@lang('traduccion.Create Contact')</u></h1>
    <input type="hidden" name="user_id" id="user_id" class="form-control" value="{{ Auth::user()->id}}">    <div class="form-group m-3 ">
    <div class="form-group m-3 ">
        <label class="text-white">
            {{ __('traduccion.Title') }}: <input class="border-2 text-dark border-solid border-gray-100" type="text"
                name="titulo" value="{{ old('titulo', $post->titulo) }}" required />
            @error('titulo')
                <br>
                <small class="text-danger">*{{ $message }}</small>
                <br>
            @enderror
        </label>
    </div>

    <div class="form-group m-3">
        <label class="text-white">
            {{ __('traduccion.Extract') }}: <input class="border-2 text-dark border-solid border-gray-100" type="text"
                name="extracto" value="{{ old('extracto', $post->extracto) }}" required />
            @error('extracto')
                <br>
                <small class="text-danger">*{{ $message }}</small>
                <br>
            @enderror
        </label>
    </div>

    <div class="form-group m-3">
        <label class="text-white">
            @lang('traduccion.Content'): <input class="border-2 text-dark border-solid border-gray-100" type="text"
                name="contenido" value="{{ old('contenido', $post->contenido) }}" />
            @error('contenido')
                <br>
                <small class="text-danger">*{{ $message }}</small>
                <br>
            @enderror
        </label>
    </div>
    <div class="form-group m-3">
        <label class="text-white">
            @lang('traduccion.Caducable'): 
            <input type="checkbox" name="caducable" {{ old('caducable')==='true' ? 'checked=' .'"checked"' : ''
        }}>
            @error('caducable')
                <br>
                <small class="text-danger">*{{ $message }}</small>
                <br>
            @enderror
        </label>
    </div>

    <div class="form-group m-3">
        <label class="text-white">
            {{ __('traduccion.Coment') }}: 
            <input type="checkbox" name="comentable" {{ old('comentable')==='true' ? 'checked=' .'"checked"'
            : '' }}>
            @error('comentable')
                <br>
                <small class="text-danger">*{{ $message }}</small>
                <br>
            @enderror
        </label>
    </div>

    <div class="form-group m-3">
        <label class="text-white">
            {{ __('traduccion.Access') }}:   
            <select id="acceso" name="acceso">
                <option value="publico">Publico</option>
                <option value="privado">Privado</option>
            </select>
            @error('acceso')
                <br>
                <small class="text-danger">*{{ $message }}</small>
                <br>
            @enderror
        </label>
    </div>

    

    <div class="form-group">
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-success p-2 pl-4 pr-4 m-1 mb-4 bg-success">@lang('traduccion.Create Contact')</button>
            <button type="reset" class="btn btn-warning p-2 pl-4 pr-4 m-1 mb-4 bg-warning">@lang('traduccion.Clean up')</button>
        </div>
    </div>

</fieldset>
<br>