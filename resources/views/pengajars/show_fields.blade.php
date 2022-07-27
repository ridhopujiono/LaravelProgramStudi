<!-- Nama Pengajar Field -->
<div class="form-group">
    {!! Form::label('nama_pengajar', 'Nama Pengajar:') !!}
    <p>{{ $pengajar->nama_pengajar }}</p>
</div>

<!-- Foto Field -->
<div class="form-group">
    {!! Form::label('foto', 'Foto:') !!}
    <p>
        <img src="{{ asset($pengajar->foto) }}" width="200px" alt="">
    </p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $pengajar->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $pengajar->updated_at }}</p>
</div>
