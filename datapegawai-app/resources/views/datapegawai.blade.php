@extends('layout.admin')

@section('content')
@include('sweetalert::alert')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Pegawai</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v2</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

<div class="container">
    
  <a href="/tambahpegawai" class="btn btn-success btn-sm"> <i class="fas fa-user-plus"> </i> Tambah</a>
  <p> <p></p></p>
      <div class="row">
        <div class="table-responsive">
          <table id="example" class="hover" style="width:100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Telpon</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @php
                  $no =1;
              @endphp
            
            @foreach ($data as $row)
            <tr>
              <th scope="row">{{$no ++}} </th>
              <td>{{$row->nama}}</td>
              <td>{{$row->jeniskelamin}}</td>
              <td>{{$row->notelpon}}</td>
              <td>
                <a href="#" class="btn btn-danger delete btn-sm" data-id= "{{ $row->id }}"><i class="fas fa-trash"></i> Hapus</a>
                <a href="/tampilkandata/{{$row->id}}" class="btn btn-info btn-sm"> <i class="fas fa-user-edit"></i> Ubah</a>
              </td>
            </tr>
            @endforeach
            
            </tbody>
            </table>
                  </div>
              </div>
          </table>
        </div>

        

{{-- css datatables --}}
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

{{-- script datatables --}}

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.js"></script>
        
{{-- cdn jquery --}}
  <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

 <!-- Script CDN with sweetalert -->
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
 <!-- css -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

 <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  <script>
    $('.delete').click( function(){
      var pegawaiid = $(this).attr ('data-id');
     Swal.fire({
        
        title: 'Hapus?',
         text: "Apakah Anda Yakin Menghapus File ini !",
         icon: 'warning',
         showCancelButton: true,
         confirmButtonColor: '#3085d6',
         cancelButtonColor: '#d33',
         confirmButtonText: 'Delete'
       }).then((result) => {
         if (result.isConfirmed) {
           window.location ="/delete/"+pegawaiid+"";
           Swal.fire(
             'Deleted!',
             'File Anda Telah Dihapus.',
             'success'
           )
         }
       });
    });
     
 </script>

<script>
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

@endsection