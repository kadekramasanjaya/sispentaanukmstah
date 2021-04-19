   @extends('layout.profile')

   @section('content')
       <!-- Main content -->
       <section class="content">
           <div class="container-fluid">
               <div class="card-body box-profile">
                   <div class="text-center">
                       <br><br><br><br><br>
                       <img width="400px" src="{{ asset('dashboardadmin/') }}/dist/img/stahlogo.png"
                           alt="User profile picture">
                   </div>
                   <h3 class="profile-username text-center">SISTEM PENDATAAN MAHASISWA UKM</h3>
                   <p class="text-muted text-center">Sekolah Tinggi Agama Hindu Negeri Mpu Kuturan</p>
               </div>
           </div>
       </section>
       <!-- /.content -->
       <!-- jQuery -->
       <script src="{{ asset('dashboardadmin/') }}/plugins/jquery/jquery.min.js"></script>
       <!-- Bootstrap 4 -->
       <script src="{{ asset('dashboardadmin/') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
       <!-- AdminLTE App -->
       <script src="{{ asset('dashboardadmin/') }}/dist/js/adminlte.min.js"></script>
       <!-- AdminLTE for demo purposes -->
       <script src="{{ asset('dashboardadmin/') }}/dist/js/demo.js"></script>
       </body>
   @endsection
