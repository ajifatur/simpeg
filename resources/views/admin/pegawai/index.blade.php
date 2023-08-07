@extends('faturhelper::layouts/admin/main')

@section('title', 'Pencarian Pegawai')

@section('content')

<div class="d-sm-flex justify-content-between align-items-center mb-3">
    <h1 class="h3 mb-2 mb-sm-0">Pencarian Pegawai</h1>
</div>
<div class="row">
	<div class="col-12">
		<div class="card">
            <div class="card-body">
                <form method="get" action="{{ route('admin.pegawai.index') }}">
                    <p>Masukkan kata kunci:</p>
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" value="{{ session()->get('keyword') }}" placeholder="NIP/Nama" required autofocus>
                        <button class="btn btn-outline-secondary" type="submit"><i class="bi-search"></i></button>
                    </div>
                </form>
            </div>
		</div>
	</div>
	<div class="col-12">
		<div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm table-hover table-bordered" id="datatable">
                        <thead class="bg-light">
                            <tr>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th width="80">Status</th>
                                <th width="80">Kategori</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pegawai as $p)
                            <tr>
                                <td><a href="{{ route('admin.pegawai.detail', ['id' => $p->id]) }}">{{ $p->nip }}</a></td>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->status }}</td>
                                <td>{{ $p->jenis == 1 ? 'Dosen' : 'Tendik' }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
		</div>
	</div>
</div>

@endsection

@section('js')

<script type="text/javascript">
    // DataTable
    Spandiv.DataTable("#datatable", {
        orderAll: true
    });
</script>

@endsection

@section('css')

<style>
    #datatable tr td {vertical-align: top;}
</style>

@endsection