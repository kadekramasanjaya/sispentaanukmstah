   @extends('layout.profile')

   @section('content')
       <!-- Content Header (Page header) -->
       <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-6">
                   <div class="col-sm-5">
                       <h1>Data Anggota UKM TABUH STAHN MPU KUTURAN</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item active">Data Anggota</li>
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
                           <div class="row">
                               <div class="col-12">
                                   <h4>
                                       <br><i></i>UKM TABUH STAHN MPU KUTURAN
                                   </h4>
                               </div>
                               <!-- /.col -->
                           </div>
                           <!-- info row -->
                           <div class="row invoice-info">
                               <div class="col-sm-8 invoice-col">
                                   <address>
                                       <strong>Sekretariat</strong><br>
                                       Jl. Pulau Menjangan No 27<br>
                                       Banyuning, Kecamatan Buleleng,<br>
                                       Kabupaten Buleleng – Bali 81119<br>
                                   </address>
                               </div>
                               <!-- /.col -->
                               <div class="col-sm-2 invoice-col">
                                   <address>
                                       <img src="{{ asset('template/') }}/dist/img/ukmmusik.jpg" class="img-circle"
                                           width="100px" alt="User Image">
                                   </address>
                               </div>
                               <div class="col-sm-1 invoice-col">
                                   <address>
                                       <img src="{{ asset('template/') }}/dist/img/stahlogo.png" class="img-circle"
                                           width="105px" alt="User Image">
                                   </address>
                               </div>
                           </div>
                           <!-- /.row -->
                           {{-- Table --}}
                           <table class="table table-bordered">
                               <thead>
                                   <tr>
                                       <th>No</th>
                                       <th>Nama Mahasiswa</th>
                                       <th>Nim</th>
                                       <th>Prodi</th>
                                       <th>Jabatan</th>
                                       <th>Status</th>
                                       <th>Foto</th>
                                   </tr>
                               </thead>
                           </table>
                           {{-- End Table --}}
                       </div>
                       <!-- /.invoice -->
                   </div><!-- /.col -->
               </div><!-- /.row -->
           </div><!-- /.container-fluid -->
       </section>
       <!-- /.content -->
   @endsection
