<body>
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-success my-2 my-sm-0 shadow p-3 mb-5 bg-white rounded" style="color:red; border:none;" data-toggle="modal" data-target="#exampleModalLong" id="buttons">
  Radera
</button>

<div class="modaldelete">    
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Radera</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <nav class="nav justify-content-center">
              
                    <form class="form-inline shadow p-3 mb-5 bg-white rounded" id="myFormd">
                        <input class="form-control mr-sm-2" type="search" placeholder="Sök" aria-label="Sök" id="titles">
                       
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="margin:5px;" id="buttons">Sök</button>
                    </form>
                </nav>
     <div class="results">
                <div class="d-flex justify-content-center">
            <div id="results" class="d-flex align-content-stretch flex-wrap">

                    
            </div>
                
            </div>      
      </div>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Stäng</button>
      </div>
    </div>
  </div>
    
</div>
</div>
    </body>