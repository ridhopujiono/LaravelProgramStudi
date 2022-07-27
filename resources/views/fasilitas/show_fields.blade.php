<!-- Nama Fasilitas Field -->
<div class="form-group">
    {!! Form::label('nama_fasilitas', 'Nama Fasilitas:') !!}
    <p>{{ $fasilitas->nama_fasilitas }}</p>
</div>

<!-- Foto Field -->
<div class="form-group">
    {!! Form::label('foto', 'Foto:') !!}
    <p><img src="{{ asset($fasilitas->foto) }}" width="200px" alt=""></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $fasilitas->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $fasilitas->updated_at }}</p>
</div>
