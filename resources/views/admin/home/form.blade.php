<div class="form-group {{ $errors->has('visi') ? 'has-error' : ''}}">
    <label for="visi" class="control-label">{{ 'Visi' }}</label>
    <textarea class="form-control" rows="5" name="visi" type="textarea" id="visi" >{{ isset($home->visi) ? $home->visi : ''}}</textarea>
    {!! $errors->first('visi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('misi') ? 'has-error' : ''}}">
    <label for="misi" class="control-label">{{ 'Misi' }}</label>
    <textarea class="form-control" rows="5" name="misi" type="textarea" id="misi" >{{ isset($home->misi) ? $home->misi : ''}}</textarea>
    {!! $errors->first('misi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('artikel') ? 'has-error' : ''}}">
    <label for="artikel" class="control-label">{{ 'Artikel' }}</label>
    <textarea class="form-control" rows="5" name="artikel" type="textarea" id="artikel" >{{ isset($home->artikel) ? $home->artikel : ''}}</textarea>
    {!! $errors->first('artikel', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('galeri') ? 'has-error' : ''}}">
    <label for="galeri" class="control-label">{{ 'Galeri' }}</label>
    <input class="form-control" name="galeri" type="file" id="galeri" value="{{ isset($home->galeri) ? $home->galeri : ''}}" >
    {!! $errors->first('galeri', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
