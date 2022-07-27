<div class="table-responsive-sm">
    <table class="table table-striped" id="pengajars-table">
        <thead>
            <tr>
                <th>Nama Pengajar</th>
                <th>Foto</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengajars as $pengajar)
            <tr>
                <td>{{ $pengajar->nama_pengajar }}</td>
                <td><img src="{{ asset($pengajar->foto) }}" width="200px" alt=""></td>
                <td>
                    {!! Form::open(['route' => ['pengajars.destroy', $pengajar->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pengajars.show', [$pengajar->id]) }}" class='btn btn-ghost-success'><i
                                class="fa fa-eye"></i></a>
                        <a href="{{ route('pengajars.edit', [$pengajar->id]) }}" class='btn btn-ghost-info'><i
                                class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn
                        btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
