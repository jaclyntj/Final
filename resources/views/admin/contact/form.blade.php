<div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
    <label for="nama" class="control-label">{{ 'Nama' }}</label>
    <input class="form-control" name="nama" type="text" id="nama" value="{{ isset($contact->nama) ? $contact->nama : ''}}" >
    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nomor') ? 'has-error' : ''}}">
    <label for="nomor" class="control-label">{{ 'Nomor HP' }}</label>
    <input class="form-control" name="nomor" type="text" id="nomor" value="{{ isset($contact->nomor) ? $contact->nomor : ''}}" >
    {!! $errors->first('nomor', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ isset($contact->email) ? $contact->email : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('pesan') ? 'has-error' : ''}}">
    <label for="pesan" class="control-label">{{ 'Pesan' }}</label>
    <textarea class="form-control" rows="5" name="pesan" type="textarea" id="pesan" >{{ isset($contact->pesan) ? $contact->pesan : ''}}</textarea>
    {!! $errors->first('pesan', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
