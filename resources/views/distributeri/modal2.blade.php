<div class="modal" tabindex="-1" role="dialog"id="dell">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Jeste li sigurni da želite izbrisati toga distributera</p>
        </div>
        <div class="modal-footer">
          
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          {!! Form::open(['route'=>['distributer.brisanje', $distributer->id_dp]]) !!}
          @csrf
          @method('DELETE')
          <button type="submit"  class="btn btn-danger">Pobrisi</button>
         
        {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>