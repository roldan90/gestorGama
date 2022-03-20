



<!-- Modal -->
<div class="modal fade" id="editarArchivo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
            <div class="modal-header"  style="color: #ffffff; background: #7a0626; border-bottom: solid 5px #333333;">
                   <h5 class="modal-title-center" id="modalEditarArchivos">Actualizar Archivo </h5>
                <button type="button" class="close" style="color: #ffffff;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
        
                <h3 class="section-title text-center wow fadeInDown"><span class="fa fa-file-signature"></span>
                    <b>Actualizar información de Archivos</b></h3>
                <p class="text-center wow fadeInDown">Edita los datos solicitados en el formulario.</p>


                <form id="frmArchivosu" enctype="multipart/form-data" method="POST">
                        <input type="text" name="idArchivou" id="idArchivou" hidden>
                        <div class="row">
                            <div class="col">
                                <label for="no_oficiou"><b>No. Oficio:</b></label>
                                <input type="text" name="no_oficiou" id="no_oficiou" placeholder="No. Oficio"
                                    class="form-control"
                                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
                                    required="">
                        
                                <label><b>Categoria:</b></label>
                                <div id="categoriasLoadu"> </div>
                            
                        
                                <label for="asuntou"><b>Asunto:</b></label>
                                <input type="text" name="asuntou" id="asuntou" placeholder="Asunto" class="form-control"
                                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
                                    required="">
                        
                                <label><b>Fecha Oficio:</b></label>
                                <input type="date" name="fecha_oficiou" id="fecha_oficiou" class="form-control"
                                    placeholder="Fecha Oficio" value="<?php echo date("Y-m-d"); ?>" required="">
                        
                                <label for="descripcionu"><b>Descripción:</b></label>
                                <textarea name="descripcionu" id="descripcionu" placeholder="Descripción" class="form-control"
                                    cols="30" rows="1"
                                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
                                    required=""></textarea>
                            </div>
                            <div class="col">
                                <label><b>Fecha Limite Oficio:</b></label>
                                <input type="date" name="fecha_oficiolimitu" id="fecha_oficiolimitu" class="form-control"
                                    value="<?php echo date("Y-m-d"); ?>" required="">
                       
                                <div id="remitenteIdUpdate"></div>
                            
                                <div id="destinatarioIdUpdate"></div>

                                <label for="status_oficio"><b>Status Oficio:</b></label>
                                <select class="form-control" type="text" id="status_oficiou" name="status_oficiou" placeholder="Status" required >
                                    <option selected value="No Especificado">Elige Status </option>
                                    <option value="VIGENTE">VIGENTE</option>
                                    <option value="CANCELADO">CANCELADO</option>
                                </select>  
                            </div>
                        </div>
                </form>
            </div>

            <div class="modal-footer">
                <button  class="btn btn-warning" id="btnActualiza" onclick="actualizarGestor()">Actualizar</button>
                <button  class="btn btn-dark" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
      
    </div>
  </div>