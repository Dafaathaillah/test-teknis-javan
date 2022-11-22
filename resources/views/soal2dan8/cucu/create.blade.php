<div class="modal fade" id="createAnak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
   aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Input Cucu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <form action="{{ route('cucu.store') }}" id="myform" method="POST">
            <div class="modal-body">
               <div class="row">
                  <div class="col-md-12 grid-margin stretch-card">
                     <div class="card-body px-0 py-0">
                        @csrf
                        <div class="form-group">
                           <label for="exampleInputText1">Nama</label>
                           <input type="text" class="form-control rounded" name="name"
                              placeholder="nama cucu">
                        </div>
                        <div class="form-group">
                           <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                           <select class="form-control rounded" name="jk">
                              <option selected disabled>Select..</option>
                              <option value="laki-laki">Laki-Laki</option>
                              <option value="perempuan">Perempuan</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="exampleFormControlSelect1">Orangtua</label>
                           <select class="form-control rounded" name="orangtua2_id">
                              <option selected disabled>Select..</option>
                              @foreach ( $ortu2 as $ort )               
                              <option value="{{ $ort->id }}">{{ $ort->name }}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="submit" id="btn_save" class="btn btn-primary">Save Change</button>
            </div>
         </form>
      </div>
   </div>
</div>