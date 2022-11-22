@extends('layouts.master')

@section('title')
   halaman orangtua
@endsection

@section('title2')
   halaman orangtua
@endsection

@section('content')
<div class="row">
   <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
         <div class="card-body">
            <h6 class="card-title">Data Table</h6>
            <a type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#createOrangtua">Tambah Data</a>
            <div class="table-responsive">
               <table id="dataTableExample" class="table">
                  <thead>
                     <tr>
                        <th>No</th>
                        <th>Nama Orangtua</th>
                        <th>Jenis Kelamin</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @php
                        $no=1;
                     @endphp
                     @foreach ($orangtua as $ortu )                        
                     <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $ortu->name }}</td>
                        <td>{{ $ortu->jk }}</td>
                        <td>
                           {{-- <a class="btn btn-warning w-20 edit" id="edit" data-id="#"
                              ata-toggle="modal" data-target="#editMenu">Edit</a> --}}
                           <a href="{{ route('orangtua.edit', $ortu->id) }}" type="button" class="btn btn-warning">Edit</a>
                           <a href="{{ route('orangtua.delete', $ortu->id) }}" type="button" class="btn btn-danger">Hapus</a>
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

@include('soal2dan8.orangtua.create')
@endsection