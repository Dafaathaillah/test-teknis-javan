@extends('layouts.master')

@section('title')
   Halaman Anak
@endsection

@section('title2')
    halaman <i class="mdi mdi-arrange-send-backward:"></i>
@endsection

@section('content')
<div class="row">
   <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
         <div class="card-body">
            <h6 class="card-title">Data Table</h6>
            <a type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#createAnak">Tambah Data</a>
            <div class="table-responsive">
               <table id="dataTableExample" class="table">
                  <thead>
                     <tr>
                        <th>No</th>
                        <th>Nama Anak</th>
                        <th>Jenis Kelamin</th>
                        <th>Nama Orangtua</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @php
                        $no=1;
                     @endphp
                     @foreach ($anak as $ank )                        
                     <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $ank->name }}</td>
                        <td>{{ $ank->jk }}</td>
                        <td>{{ $ank->ortu1->name }}</td>
                        <td>
                           {{-- <a class="btn btn-warning w-20 edit" id="edit" data-id="#"
                              ata-toggle="modal" data-target="#editMenu">Edit</a> --}}
                           <a href="{{ route('anak.edit', $ank->id) }}" type="button" class="btn btn-warning">Edit</a>
                           <a href="{{ route('anak.delete', $ank->id) }}" type="button" class="btn btn-danger">Hapus</a>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>

@include('soal2dan8.anak.create')
@endsection