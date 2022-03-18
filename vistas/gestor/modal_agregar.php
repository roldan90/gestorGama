
<div class="modal fade" id="modalAgregarArchivos" tabindex="-1" role="dialog" aria-labelledby="modalAgregarArchivos"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header"  style="color: #ffffff; background: #7a0626; border-bottom: solid 5px #333333;">
                   <h5 class="modal-title-center" id="modalAgregarArchivos">Agregar Archivo </h5>
                <button type="button" class="close" style="color: #ffffff;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <h3 class="section-title text-center wow fadeInDown"><span class="fa fa-file-signature"></span>
                    <b>Registro de Archivos</b>
                </h3>
                <p class="text-center wow fadeInDown">Ingresa los datos solicitados en el formulario.</p>

                <form id="frmArchivos" enctype="multipart/form-data" method="POST">
                        <div class="row">
                            <div class="col">
                                <label for="no_oficio"><b>No. Oficio:</b></label>
                                <input type="text" name="no_oficio" id="no_oficio" placeholder="No. Oficio"
                                    class="form-control"
                                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
                                    required="">
                        
                                <label><b>Categoria:</b></label>
                                <div id="categoriasLoad"> </div>
                            
                        
                                <label for="asunto"><b>Asunto:</b></label>
                                <input type="text" name="asunto" id="asunto" placeholder="Asunto" class="form-control"
                                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
                                    required="">
                        
                                <label><b>Fecha Oficio:</b></label>
                                <input type="date" name="fecha_oficio" id="fecha_oficio" class="form-control"
                                    placeholder="Fecha Oficio" value="<?php echo date("Y-m-d"); ?>" required="">
                        
                                <label for="descripcion"><b>Descripción:</b></label>
                                <textarea name="descripcion" id="descripcion" placeholder="Descripción" class="form-control"
                                    cols="30" rows="1"
                                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
                                    required=""></textarea>
                            </div>
                            <div class="col">
                            <label><b>Fecha Limite Oficio:</b></label>
                            <input type="date" name="fecha_oficiolimit" id="fecha_oficiolimit" class="form-control"
                                value="<?php echo date("Y-m-d"); ?>" required="">
                                <div id="controlRemitente"></div>
                                <div id="controlDestinatario"></div>
                                <label><b>Selecciona archivos:</b></label>
                                <input type="file" name="archivos[]" id="archivos" class="form-control" multiple="multiple">
                                <label for="status_oficio"><b>Status Oficio:</b></label>
                                <select class="form-control" type="text" id="status_oficio" name="status_oficio" placeholder="Status" required >
                                <option selected value="No Especificado">Elige Status </option>
                                <option value="VIGENTE">VIGENTE</option>
                                <option value="CANCELADO">CANCELADO</option>
                                </select>  
                            </div>
                        </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btnGuardarArchivos">Guardar</button>
                <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>