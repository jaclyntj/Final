<div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
    <label for="nama" class="control-label">{{ 'Nama' }}</label>
    <input class="form-control" name="nama" type="text" id="nama" value="{{ isset($fasilita->nama) ? $fasilita->nama : ''}}" >
    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('artikel') ? 'has-error' : ''}}">
    <label for="artikel" class="control-label">{{ 'Artikel' }}</label>
    <textarea class="form-control" rows="5" name="artikel" type="textarea" id="artikel" >{{ isset($fasilita->artikel) ? $fasilita->artikel : ''}}</textarea>
    {!! $errors->first('artikel', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('galeri') ? 'has-error' : ''}}">
    <label for="galeri" class="control-label">{{ 'Galeri' }}</label>
    <input class="form-control" name="galeri" type="file" id="galeri" value="{{ isset($fasilita->galeri) ? $fasilita->galeri : ''}}" >
    {!! $errors->first('galeri', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
