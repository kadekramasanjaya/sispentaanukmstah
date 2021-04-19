   @extends('layout.profile')

   @section('content')
       @if (session('pesan'))
           <div class="alert alert-success alert-dismissible">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               <h5><i class="icon fas fa-check"></i> Succes!</h5>
               {{ session('pesan') }}.
           </div>
       @endif
       <!-- Content Header (Page header) -->
       <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-6">
                   <div class="col-sm-5">
                       <h1>Dokumentasi UKM BAHASA INGGRIS STAHN MPU KUTURAN</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item active">Dokumentasi</li>
                       </ol>
                   </div>
               </div>
           </div><!-- /.container-fluid -->
       </section>

       <section class="content">
           <div class="container-fluid">
               <div class="row">
                   <div class="col-12">
                       <!-- Main content -->
                       <div class="invoice p-3 mb-3">
                           <!-- title row -->

                           <!-- info row -->


                           <!-- /.row -->
                           <div class="card-body">
                               <div class="tab-content">
                                   <div class="active tab-pane" id="activity">
                                       <!-- Post -->
                                       <!-- /.col -->
                                       <table class="table table-bordered">
                                           <thead>
                                               <tr>
                                                   <th>No</th>
                                                   <th>Keterangan</th>
                                                   <th>Foto</th>
                                                   <th>Action</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                               <?php $no = 1; ?>
                                               @foreach ($dokumentasiukmbahasainggris as $data)
                                                   <tr>
                                                       <td>{{ $no++ }}</td>
                                                       <td>{{ $data->keterangan }}</td>
                                                       <td><img src="{{ url('foto_bahasainggris/dokumentasi/' . $data->foto) }}"
                                                               width="300px">
                                                       </td>
                                                       <td>
                                                           <a href="/dokumentasiukmbahasainggris/editdokumentasi/{{ $data->id_dokumentasi_bahasainggris }}"
                                                               class="btn btn-sm btn-warning">Edit</a>
                                                           <button type="button" class="btn btn-danger" data-toggle="modal"
                                                               data-target="#delete{{ $data->id_dokumentasi_bahasainggris }}">DELETE</button>
                                                       </td>
                                                   </tr>
                                               @endforeach
                                           </tbody>
                                       </table>
                                       {{-- End Table --}}
                                       {{-- End Table --}}
                                       <div class="row no-print">
                                           <div class="col-12">
                                               <a href="dokumentasiukmbahasainggris/adddokumentasi"
                                                   class="btn btn-primary btn-sm">Add</a>
                                               <br>
                                           </div>
                                       </div>
                                   </div>
                                   <!-- /.invoice -->
                               </div><!-- /.col -->
                           </div><!-- /.row -->
                       </div><!-- /.container-fluid -->
       </section>
       <!-- /.content -->


       @foreach ($dokumentasiukmbahasainggris as $data)


           <div class="modal fade" id="delete{{ $data->id_dokumentasi_bahasainggris }}">
               <div class="modal-dialog">
                   <div class="modal-content bg-danger">
                       <div class="modal-header">
                           <h4 class="modal-title">{{ $data->keterangan }}</h4>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                           </button>
                       </div>
                       <div class="modal-body">
                           <p>Yakin Mau Dihapus?&hellip;</p>
                       </div>
                       <div class="modal-footer justify-content-between">
                           <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
                           <a href="dokumentasiukmbahasainggris/delete/{{ $data->id_dokumentasi_bahasainggris }}"
                               class="btn btn-outline-light">Yes</a>
                       </div>
                   </div>
                   <!-- /.modal-content -->
               </div>
               <!-- /.modal-dialog -->
           </div>
           <!-- /.modal -->
       @endforeach
   @endsection
