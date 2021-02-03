<div class="modal fade-lg" id="update<?php $fila['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="modal-default-update" style="display: none;" aria-hidden="true">
   <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
      <form action="backend/user_post.php" method="POST" class="needs-validation add_employe" novalidate="">
         <div class="modal-content">
            <div class="modal-header">
               <h6 class="modal-title" id="modal-title-default">Agragar Usuario</h6>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
               </button>
            </div>
            <div class="modal-body">
               <div class="form-row">
                  <div class="col-md-6 mb-3">
                     <label class="form-control-label" for="validationCustom01">First name</label>
                     <input name="nombre" type="text" class="form-control" id="validationCustom01" placeholder="First name" required="">
                     <div class="valid-feedback">
                        Looks good!
                     </div>
                  </div>
                  <div class="col-md-6 mb-3">
                     <label class="form-control-label" for="validationCustom02">Edad</label>
                     <input name="edad" type="text" class="form-control" id="validationCustom02" placeholder="Edad" required="">
                     <div class="valid-feedback">
                        Looks good!
                     </div>
                  </div>              
               </div>
               <div class="form-row">
                  <div class="col-md-12 mb-3">
                     <label class="form-control-label" for="validationCustom03">Departamento</label>
                     <select name="departamento" class="form-control" id="exampleFormControlSelect1">
                        <option value="1">Recursos humanos</option>
                        <option value="2">Sistemas</option>
                        <option value="3">Mercadotecnia</option>
                        <option value="4">Taller</option>                        
                    </select>
                     <div class="invalid-feedback">
                        Please provide a valid city.
                     </div>
                  </div>               
               </div>       
            </div>
            <div class="modal-footer">
               <button type="submit" class="btn btn-primary">Save changes</button>
               <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button>
            </div>
         </div>
      </form>
   </div>
</div>