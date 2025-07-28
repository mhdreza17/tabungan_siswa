<!-- setor tabungan -->
<div class="modal fade" id="addtarik" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Setor Tabungan</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
  
      <div class="modal-body">
        <form action="/dashboard/tarik" method="POST" class="text-light ">
          @csrf
          <label for="nama_pertemuan">Nominal</label>
          <input class="form-control mb-3 text-light" type="text" name="kredit" id="kredit" required>

          @foreach($user as $user)
          <input type="hidden" class="form-control" id="id_user" name="id_user" value="{{$user->id}}">
          @endforeach

          @foreach($tabungan as $tbgn)
              <input type="hidden" class="form-control" id="saldo" name="saldo" value="{{$tbgn->saldo_akhir}}">
          @endforeach
          
          <input class="btn btn-success form-control" type="submit" value="SUBMIT" />
        </form>
      </div>
      </div>
  </div>
</div>
<!-- setor tabungan end -->