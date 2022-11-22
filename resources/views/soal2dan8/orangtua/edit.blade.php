@extends('layouts.master')

@section('title')
    Halaman Edit
@endsection

@section('title2')
    Halaman Edit
@endsection

@section('content')
<div class="row">
   <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
         <div class="card-body">
            <h6 class="card-title">Form Edit Orangtua</h6>
            <form method="post" action="{{ route('orangtua.update', $ortu->id) }}" id="myForm" enctype="multipart/form-data">
               @csrf
               @method('PUT')
               <div class="form-group">
                  <label for="exampleInputText1">Orangtua</label>
                  <input type="text" class="form-control" id="exampleInputText1" value="{{ $ortu->name }}" name="name" placeholder="Enter Name">
               </div>
               <div class="form-group">
                  <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="jk">
                     <option selected disabled>Select..</option>
                     @if ($ortu->jk == "laki-laki")
                     <option value="laki-laki" selected>Laki-Laki</option>
                     <option value="perempuan">Perempuan</option>
                     @else
                     <option value="laki-laki">Laki-Laki</option>
                     <option value="perempuan" selected>Perempuan</option>
                     @endif
                     <option></option>
                  </select>
               </div>
               <button class="btn btn-primary" type="submit">Save Changes</button>
               <a href="{{ route('orangtua.index') }}" class="btn btn-warning">Cancel</a>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection