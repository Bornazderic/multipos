
<div class="modal fade" id="distributeri" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalScrollableTitle">Dodaj</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            {!! Form::open(['action'=>'DistributerController@store']) !!}
           
            @csrf
              <div class="modal-body">
             
            
            <label for="naziv">Naziv Distributera</label>
            <input type="text"id="naziv"name="naziv"class="form-control">

            <input type="hidden" name="user_id" id="user_id"value="1">

            <label for="adresa">Adresa Distributera</label>
            <input type="text"id="naziv"name="adresa"class="form-control">

            <label for="adresa_kb">Kucni Broj</label>
            <input type="number" name="adresa_kb" id="adresa_kb"class="form-control">

            <label for="ptt">Postanski Broj</label>
            <input type="text" name="ptt" id="ptt"class="form-control">

            <label for="oib">OIB</label>
            <input type="text" name="oib" id="oib"class="form-control">

            <label for="mobitel">Mobitel</label>
            <input type="text" name="mobitel" id="mobitel"class="form-control">

            <label for="tel">Telefon</label>
            <input type="text" name="tel" id="tel"class="form-control">
            
            <label for="fax">Fax</label>
            <input type="text" name="fax" id="fax"class="form-control">

            
            <label for="email">E-mail Adresa</label>
            <input type="email" name="email" id="email"class="form-control">

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
             
            </div>
          {!! Form::close() !!}
            </div>
            </div>
          </div>
        </div>
     