@extends('layout.profile')


@section('content')
    <form action="/dokumentasiukmbahasainggris/insert" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Dokumentasi</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input name="keterangan" class="form-control @error('keterangan') is-invalid @enderror"
                                    value="{{ old('keterangan') }}">
                                <div class="text-danger">
                                    @error('keterangan')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Foto</label>
                                <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror">
                                <div class="text-danger">
                                    @error('foto')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <button class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
