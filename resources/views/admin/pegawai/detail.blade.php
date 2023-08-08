@extends('faturhelper::layouts/admin/main')

@section('title', 'Profil Pegawai')

@section('content')

<div class="d-sm-flex justify-content-between align-items-center mb-3">
    <h1 class="h3 mb-2 mb-sm-0">Profil Pegawai</h1>
</div>
<div class="row">
	<div class="col-lg-9">
		<div class="card">
            <div class="card-header d-sm-flex justify-content-between">
                <div><i class="bi-person me-1"></i> {{ $pegawai->nama }} ({{ $pegawai->nip }})</div>
                <div class="btn-group">
                    <a href="#" class="btn btn-sm btn-primary"><i class="bi-file-pdf me-1"></i> Cetak DRH</a>
                </div>
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="profil-tab" data-bs-toggle="tab" data-bs-target="#profil" type="button" role="tab" aria-controls="profil" aria-selected="true">Profil</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="keluarga-tab" data-bs-toggle="tab" data-bs-target="#keluarga" type="button" role="tab" aria-controls="keluarga" aria-selected="false">Keluarga</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pendidikan-tab" data-bs-toggle="tab" data-bs-target="#pendidikan" type="button" role="tab" aria-controls="pendidikan" aria-selected="false">Pendidikan</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="arsip-tab" data-bs-toggle="tab" data-bs-target="#arsip" type="button" role="tab" aria-controls="arsip" aria-selected="false">Arsip</button>
                    </li>
                </ul>
                <div class="tab-content py-3">
                    <div class="tab-pane fade show active" id="profil" role="tabpanel" aria-labelledby="profil-tab">
                        <table class="table table-sm table-hover table-striped mt-3">
                            <tr>
                                <td width="20%"><strong>NIP</strong></td>
                                <td width="5">:</td>
                                <td>{{ $pegawai->nip }}</td>
                            </tr>
                            <tr>
                                <td><strong>Nama</strong></td>
                                <td>:</td>
                                <td>{{ $pegawai->nama }}</td>
                            </tr>
                            <tr>
                                <td><strong>Unit Kerja</strong></td>
                                <td>:</td>
                                <td>Direktorat Umum dan Sumber Daya Manusia - Subdirektorat SDM - Seksi Kesejahteraan</td>
                            </tr>
                            <tr>
                                <td><strong>TTL</strong></td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><strong>Jenis Kelamin</strong></td>
                                <td>:</td>
                                <td>Laki-Laki</td>
                            </tr>
                            <tr>
                                <td><strong>Agama</strong></td>
                                <td>:</td>
                                <td>Islam</td>
                            </tr>
                            <tr>
                                <td><strong>Golongan Darah</strong></td>
                                <td>:</td>
                                <td>A</td>
                            </tr>
                            <tr>
                                <td><strong>Status Perkawinan</strong></td>
                                <td>:</td>
                                <td>Belum Kawin / Kawin / Janda / Duda</td>
                            </tr>
                            <tr>
                                <td><strong>Alamat</strong></td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><strong>No. HP</strong></td>
                                <td>:</td>
                                <td>081234567890</td>
                            </tr>
                            <tr>
                                <td><strong>Email</strong></td>
                                <td>:</td>
                                <td>staff@gmail.com</td>
                            </tr>
                            <tr>
                                <td><strong>Email Instansi</strong></td>
                                <td>:</td>
                                <td>staff@spandiv.xyz</td>
                            </tr>
                            <tr>
                                <td><strong>NIK</strong></td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><strong>No. KK</strong></td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><strong>NPWP</strong></td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><strong>No. BPJS Kesehatan</strong></td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><strong>No. Karpeg</strong></td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            @if($pegawai->jenis == 1)
                            <tr>
                                <td><strong>NIDN / NIDK</strong></td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><strong>Homebase Prodi</strong></td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><strong>Google Scholar ID</strong></td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><strong>SINTA ID</strong></td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><strong>Scopus ID</strong></td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            @endif
                            <tr>
                                <td><strong>Pangkat / Golru</strong></td>
                                <td>:</td>
                                <td>Penata Muda - III/a (TMT : 01 Maret 2023)</td>
                            </tr>
                            <tr>
                                <td><strong>Pendidikan Terakhir</strong></td>
                                <td>:</td>
                                <td>Strata 1 (S1) - (Lulus : 10 Desember 2019)</td>
                            </tr>
                            <tr>
                                <td><strong>Jabatan</strong></td>
                                <td>:</td>
                                <td>Pengolah Data Kepegawaian Pusat</td>
                            </tr>
                            <tr>
                                <td><strong>Status Kepegawaian</strong></td>
                                <td>:</td>
                                <td>{{ $pegawai->jenis == 1 ? 'Dosen' : 'Tendik' }} {{ $pegawai->status }}</td>
                                <!-- CPNS / PNS / PPPK / Honorer -->
                            </tr>
                            <tr>
                                <td><strong>Status Kerja</strong></td>
                                <td>:</td>
                                <td>Aktif / Pensiun / Mengundurkan Diri / Meninggal Dunia / Mutasi / Kontrak Berakhir</td>
                            </tr>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="keluarga" role="tabpanel" aria-labelledby="keluarga-tab">
                        <table class="table table-sm table-hover table-bordered mt-3">
                            <thead class="bg-light">
                                <tr>
                                    <th width="5">No</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Pendidikan</th>
                                    <th>Pekerjaan</th>
                                    <th>Hubungan</th>
                                    <th width="20">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>0000000000000000</td>
                                    <td>Jane Doe</td>
                                    <td>10/10/2000</td>
                                    <td>S1</td>
                                    <td>IRT</td>
                                    <td>Istri</td>
                                    <td align="center">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" title="Edit"><i class="bi-pencil"></i></a>
                                            <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Hapus"><i class="bi-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>0000000000000000</td>
                                    <td>John Doe Jr.</td>
                                    <td>10/10/2020</td>
                                    <td>SD</td>
                                    <td>Pelajar</td>
                                    <td>Anak Kandung</td>
                                    <td align="center">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" title="Edit"><i class="bi-pencil"></i></a>
                                            <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Hapus"><i class="bi-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>0000000000000000</td>
                                    <td>Jane Doe Jr.</td>
                                    <td>10/10/2022</td>
                                    <td></td>
                                    <td></td>
                                    <td>Anak Kandung</td>
                                    <td align="center">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" title="Edit"><i class="bi-pencil"></i></a>
                                            <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Hapus"><i class="bi-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pendidikan" role="tabpanel" aria-labelledby="pendidikan-tab">
                        <table class="table table-sm table-hover table-bordered mt-3">
                            <thead class="bg-light">
                                <tr>
                                    <th width="5">No</th>
                                    <th>Jenjang</th>
                                    <th>Nama</th>
                                    <th>Jurusan / Prodi</th>
                                    <th>Gelar</th>
                                    <th>Tanggal Lulus</th>
                                    <th width="20">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>SD/Sederajat</td>
                                    <td>
                                        SD Tadika Mesra
                                        <div><strong>Kota : </strong> Kampung Durian</div>
                                        <div><strong>Negara : </strong> Indonesia</div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td>10/10/2000</td>
                                    <td align="center">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" title="Edit"><i class="bi-pencil"></i></a>
                                            <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Hapus"><i class="bi-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>SMP/Sederajat</td>
                                    <td>
                                        SMP Tadika Mesra
                                        <div><strong>Kota : </strong> Kampung Durian</div>
                                        <div><strong>Negara : </strong> Indonesia</div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td>10/10/2003</td>
                                    <td align="center">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" title="Edit"><i class="bi-pencil"></i></a>
                                            <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Hapus"><i class="bi-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>SMA/Sederajat</td>
                                    <td>
                                        SMA Tadika Mesra
                                        <div><strong>Kota : </strong> Kampung Durian</div>
                                        <div><strong>Negara : </strong> Indonesia</div>
                                    </td>
                                    <td>IPA</td>
                                    <td></td>
                                    <td>10/10/2006</td>
                                    <td align="center">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" title="Edit"><i class="bi-pencil"></i></a>
                                            <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Hapus"><i class="bi-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Strata 1 (S1)</td>
                                    <td>
                                        Universitas Tadika Mesra
                                        <div><strong>Kota : </strong> Kampung Durian</div>
                                        <div><strong>Negara : </strong> Indonesia</div>
                                    </td>
                                    <td>Teknik Informatika</td>
                                    <td>S.T.</td>
                                    <td>10/10/2010</td>
                                    <td align="center">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" title="Edit"><i class="bi-pencil"></i></a>
                                            <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Hapus"><i class="bi-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="arsip" role="tabpanel" aria-labelledby="arsip-tab">
                        <?php $arsip = ['KTP', 'KK', 'NPWP', 'Karpeg', 'Karis / Karsu', 'Taspen', 'BPJS Kesehatan', 'BPJS Ketenagakerjaan']; ?>
                        <table class="table table-sm table-hover table-bordered mt-3">
                            <thead class="bg-light">
                                <tr>
                                    <th width="5">No</th>
                                    <th>Nama</th>
                                    <th>Nomor</th>
                                    <th width="20">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($arsip as $key=>$a)
                                <tr>
                                    <td>{{ ($key+1) }}</td>
                                    <td>{{ $a }}</td>
                                    <td>0000000000</td>
                                    <td align="center">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-sm btn-info" data-bs-toggle="tooltip" title="Lihat File"><i class="bi-file-pdf"></i></a>
                                            <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" title="Edit"><i class="bi-pencil"></i></a>
                                            <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Hapus"><i class="bi-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="jabatan" role="tabpanel" aria-labelledby="jabatan-tab">
			            <p class="fw-bold">Jabatan Struktural</p>
                        <table class="table table-sm table-hover table-bordered mt-3">
                            <thead class="bg-light">
                                <tr>
                                    <th width="5">No</th>
                                    <th>Nama</th>
                                    <th width="150">Nomor SK</th>
                                    <th width="150">TMT</th>
                                    <th width="150">Tanggal Selesai</th>
                                    <th width="50">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="6" align="center"><em>Tidak ada data.</em></td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <p class="fw-bold">Jabatan Fungsional</p>
                        <table class="table table-sm table-hover table-bordered mt-3">
                            <thead class="bg-light">
                                <tr>
                                    <th width="5">No</th>
                                    <th>Nama</th>
                                    <th width="150">Nomor SK</th>
                                    <th width="150">TMT</th>
                                    <th width="150">Tanggal Selesai</th>
                                    <th width="50">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr bgcolor="#66ffcc">
                                    <td>1</td>
                                    <td>Pengolah Data Kepegawaian Pusat</td>
                                    <td>T/10/UN37/2020</td>
                                    <td>10/10/2020</td>
                                    <td>10/10/2025</td>
                                    <td align="center">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-sm btn-info" data-bs-toggle="tooltip" title="Lihat File"><i class="bi-file-pdf"></i></a>
                                            <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" title="Edit"><i class="bi-pencil"></i></a>
                                            <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Hapus"><i class="bi-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Analis Sistem Informasi dan Jaringan</td>
                                    <td>T/10/UN37/2018</td>
                                    <td>10/10/2018</td>
                                    <td>10/10/2020</td>
                                    <td align="center">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-sm btn-info" data-bs-toggle="tooltip" title="Lihat File"><i class="bi-file-pdf"></i></a>
                                            <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" title="Edit"><i class="bi-pencil"></i></a>
                                            <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Hapus"><i class="bi-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pangkat" role="tabpanel" aria-labelledby="pangkat-tab">
                        <table class="table table-sm table-hover table-bordered mt-3">
                            <thead class="bg-light">
                                <tr>
                                    <th width="5">No</th>
                                    <th>Pangkat / Golru</th>
                                    <th width="150">Nomor SK</th>
                                    <th width="150">Tanggal SK</th>
                                    <th width="150">TMT</th>
                                    <th width="150">Masa Kerja</th>
                                    <th width="50">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>CPNS</td>
                                    <td>T/10/UN37/2018</td>
                                    <td>10/10/2018</td>
                                    <td>01/10/2018</td>
                                    <td>0 tahun 0 bulan</td>
                                    <td align="center">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-sm btn-info" data-bs-toggle="tooltip" title="Lihat File"><i class="bi-file-pdf"></i></a>
                                            <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" title="Edit"><i class="bi-pencil"></i></a>
                                            <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Hapus"><i class="bi-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Penata Muda - III/a</td>
                                    <td>T/10/UN37/2019</td>
                                    <td>10/10/2019</td>
                                    <td>01/10/2019</td>
                                    <td>1 tahun 0 bulan</td>
                                    <td align="center">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-sm btn-info" data-bs-toggle="tooltip" title="Lihat File"><i class="bi-file-pdf"></i></a>
                                            <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" title="Edit"><i class="bi-pencil"></i></a>
                                            <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Hapus"><i class="bi-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="unit-kerja" role="tabpanel" aria-labelledby="unit-kerja-tab">
                        <table class="table table-sm table-hover table-bordered mt-3">
                            <thead class="bg-light">
                                <tr>
                                    <th width="5">No</th>
                                    <th>Nama</th>
                                    <th width="150">Nomor SK</th>
                                    <th width="150">TMT</th>
                                    <th width="150">Tanggal Selesai</th>
                                    <th width="50">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Direktorat Umum dan Sumber Daya Manusia - Subdirektorat SDM - Seksi Kesejahteraan</td>
                                    <td>T/10/UN37/2020</td>
                                    <td>10/10/2020</td>
                                    <td>10/10/2025</td>
                                    <td align="center">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-sm btn-info" data-bs-toggle="tooltip" title="Lihat File"><i class="bi-file-pdf"></i></a>
                                            <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" title="Edit"><i class="bi-pencil"></i></a>
                                            <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Hapus"><i class="bi-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>BUHK - Bagian Hukum dan Kepegawaian - Subbagian Pendidik</td>
                                    <td>T/10/UN37/2020</td>
                                    <td>10/10/2020</td>
                                    <td>10/10/2025</td>
                                    <td align="center">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-sm btn-info" data-bs-toggle="tooltip" title="Lihat File"><i class="bi-file-pdf"></i></a>
                                            <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" title="Edit"><i class="bi-pencil"></i></a>
                                            <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Hapus"><i class="bi-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="kgb" role="tabpanel" aria-labelledby="kgb-tab">
                        <table class="table table-sm table-hover table-bordered mt-3">
                            <thead class="bg-light">
                                <tr>
                                    <th width="5">No</th>
                                    <th>Pangkat / Golru</th>
                                    <th width="150">Nomor SK</th>
                                    <th width="150">Tanggal SK</th>
                                    <th width="150">TMT</th>
                                    <th width="150">Masa Kerja</th>
                                    <th width="150">Gaji Pokok</th>
                                    <th width="50">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Penata Muda - III/a</td>
                                    <td>T/10/UN37/2020</td>
                                    <td>10/10/2020</td>
                                    <td>01/10/2020</td>
                                    <td>2 tahun 0 bulan</td>
                                    <td>Rp 2,660,700</td>
                                    <td align="center">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-sm btn-info" data-bs-toggle="tooltip" title="Lihat File"><i class="bi-file-pdf"></i></a>
                                            <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" title="Edit"><i class="bi-pencil"></i></a>
                                            <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Hapus"><i class="bi-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="card">
            <div class="card-header"><h5 class="card-title mb-0">Kepegawaian</h5></div>
            <div class="card-body">
                <div class="nav nav-pills" role="tablist">
                    <a href="#" class="btn btn-outline-dark mb-2 me-2" id="jabatan-tab" data-bs-toggle="tab" data-bs-target="#jabatan" type="button" role="tab" aria-controls="jabatan" aria-selected="true">Jabatan</a>
                    <a href="#" class="btn btn-outline-dark mb-2 me-2" id="pangkat-tab" data-bs-toggle="tab" data-bs-target="#pangkat" type="button" role="tab" aria-controls="pangkat" aria-selected="true">Pangkat</a>
                    <a href="#" class="btn btn-outline-dark mb-2 me-2" id="unit-kerja-tab" data-bs-toggle="tab" data-bs-target="#unit-kerja" type="button" role="tab" aria-controls="unit-kerja" aria-selected="true">Unit Kerja</a>
                    <a href="#" class="btn btn-outline-dark mb-2 me-2" id="kgb-tab" data-bs-toggle="tab" data-bs-target="#kgb" type="button" role="tab" aria-controls="kgb" aria-selected="true">KGB</a>
                    <a href="#" class="btn btn-outline-dark mb-2 me-2" id="profil-tab" data-bs-toggle="tab" data-bs-target="#profil" type="button" role="tab" aria-controls="profil" aria-selected="true">Penghargaan</a>
                    <a href="#" class="btn btn-outline-dark mb-2 me-2" id="profil-tab" data-bs-toggle="tab" data-bs-target="#profil" type="button" role="tab" aria-controls="profil" aria-selected="true">Diklat</a>
                    <a href="#" class="btn btn-outline-dark mb-2 me-2" id="profil-tab" data-bs-toggle="tab" data-bs-target="#profil" type="button" role="tab" aria-controls="profil" aria-selected="true">SKP</a>
                    <a href="#" class="btn btn-outline-dark mb-2 me-2" id="profil-tab" data-bs-toggle="tab" data-bs-target="#profil" type="button" role="tab" aria-controls="profil" aria-selected="true">Hukuman Disiplin</a>
                    <a href="#" class="btn btn-outline-dark mb-2 me-2" id="profil-tab" data-bs-toggle="tab" data-bs-target="#profil" type="button" role="tab" aria-controls="profil" aria-selected="true">Kehadiran</a>
                    <a href="#" class="btn btn-outline-dark mb-2 me-2" id="profil-tab" data-bs-toggle="tab" data-bs-target="#profil" type="button" role="tab" aria-controls="profil" aria-selected="true">Cuti</a>
                    <a href="#" class="btn btn-outline-dark mb-2 me-2" id="profil-tab" data-bs-toggle="tab" data-bs-target="#profil" type="button" role="tab" aria-controls="profil" aria-selected="true">Pemberhentian</a>
                    <a href="#" class="btn btn-outline-dark mb-2 me-2" id="profil-tab" data-bs-toggle="tab" data-bs-target="#profil" type="button" role="tab" aria-controls="profil" aria-selected="true">Tunjangan</a>
                    <a href="#" class="btn btn-outline-dark mb-2 me-2" id="profil-tab" data-bs-toggle="tab" data-bs-target="#profil" type="button" role="tab" aria-controls="profil" aria-selected="true">Rekening</a>
                    <a href="#" class="btn btn-outline-dark mb-2 me-2" id="profil-tab" data-bs-toggle="tab" data-bs-target="#profil" type="button" role="tab" aria-controls="profil" aria-selected="true">Tugas Belajar</a>
		        </div>
            </div>
		</div>
	</div>
</div>

@endsection

@section('js')

<script>
$(document).on("click", ".nav-pills .btn", function(e) {
	e.preventDefault();
	$(".nav-tabs .nav-link").removeClass("active");
});
$(document).on("click", ".nav-tabs .nav-link", function(e) {
	e.preventDefault();
	$(".nav-pills .btn").removeClass("active");
});
</script>

@endsection

@section('css')

<style>
    .table tr td {vertical-align: top!important;}
</style>

@endsection