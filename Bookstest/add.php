<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-success my-2 my-sm-0 shadow p-3 mb-5 bg-white rounded" style="color:green; border:none; " data-toggle="modal" data-target="#staticBackdrop" id="buttons">
 Lägg till
</button>

<div class="modaladd">
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Lägg till</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <form action="insert.php" method="post">        
                    <div class="form-group">
                    <label for="formGroupExampleInput">Titel</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Titel" name="title" required>
                    <label for="formGroupExampleInput">Författare</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Författare" name="author" required>
                    <label for="formGroupExampleInput">Utgivningsår</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Utgivningsår" name="pub"><br>
                    <button type="submit" class="btn btn-success">Lägg till</button>
                    </div>
                </form>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Stäng</button>
      </div>
    </div>
  </div>
</div>
    </div>