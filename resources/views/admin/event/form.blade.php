<div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
    <label for="nama" class="control-label">{{ 'Nama' }}</label>
    <input class="form-control" name="nama" type="text" id="nama" value="{{ isset($event->nama) ? $event->nama : ''}}" >
    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('berita') ? 'has-error' : ''}}">
    <label for="berita" class="control-label">{{ 'Berita' }}</label>
    <textarea class="form-control" rows="5" name="berita" type="textarea" id="berita" >{{ isset($event->berita) ? $event->berita : ''}}</textarea>
    {!! $errors->first('berita', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('galeri') ? 'has-error' : ''}}">
    <label for="galeri" class="control-label">{{ 'Galeri' }}</label>
    <input class="form-control" name="galeri" type="file" id="galeri" value="{{ isset($event->galeri) ? $event->galeri : ''}}" >
    {!! $errors->first('galeri', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
