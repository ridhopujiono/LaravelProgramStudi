<!-- Nama Fasilitas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_fasilitas', 'Nama Fasilitas:') !!}
    {!! Form::text('nama_fasilitas', null, ['class' => 'form-control']) !!}
</div>

<!-- Foto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foto', 'Foto:') !!}
    {!! Form::file('foto') !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('fasilitas.index') }}" class="btn btn-secondary">Cancel</a>
</div>
