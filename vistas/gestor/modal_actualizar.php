



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
                    <b>Registro de Archivos</b></h3>
                <p class="text-center wow fadeInDown">Ingresa los datos solicitados en el formulario.</p>


                <form id="frmArchivosu" enctype="multipart/form-data">
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
                       
                                <label for="remitente_oficiou"><b>Remitente:</b></label>
                                <select class="form-control" type="text" id="remitente_oficiou" name="remitente_oficiou" placeholder="Remitente" required >
                                    <option selected value="No Especificado"> Elige Remitente </option>
                                    <option value="ALMACÉN GENERAL">ALMACÉN GENERAL</option>
                                    <option value="CAM TEPIC">CAM TEPIC</option>
                                    <option value="CEDART TEPIC">CEDART TEPIC</option>
                                    <option value="CIFAD">CIFAD</option>
                                    <option value="COMISIÓN ESCALAFÓN">COMISIÓN ESCALAFÓN</option>
                                    <option value="COMITÉ DE ADQUISICIONES">COMITÉ DE ADQUISICIONES</option>
                                    <option value="CONSEJOS DE PARTICIPACIÓN">CONSEJOS DE PARTICIPACIÓN</option>
                                    <option value="CONTRALORIA">CONTRALORIA</option>
                                    <option value="DESARROLLO ORGANIZACIONAL">DESARROLLO ORGANIZACIONAL</option>
                                    <option value="DIRECCIÓN GENERAL">DIRECCIÓN GENERAL</option>
                                    <option value="DISPOSICIÓN FINAL Y BAJA DE ACTIVOS FIJOS">DISPOSICIÓN FINAL Y BAJA DE ACTIVOS FIJOS</option>
                                    <option value="EDUCACIÓN BÁSICA">EDUCACIÓN BÁSICA</option>
                                    <option value="EDUCACIÓN ESPECIAL">EDUCACIÓN ESPECIAL</option>
                                    <option value="EDUCACIÓN EXTRAESCOLAR">EDUCACIÓN EXTRAESCOLAR</option>
                                    <option value="EDUCACIÓN FÍSICA">EDUCACIÓN FÍSICA</option>
                                    <option value="EDUCACIÓN INDÍGENA">EDUCACIÓN INDÍGENA</option>
                                    <option value="EDUCACIÓN INICIAL Y PREESCOLAR INDÍGENA">EDUCACIÓN INICIAL Y PREESCOLAR INDÍGENA</option>
                                    <option value="EDUCACIÓN INICIAL Y PREESCOLAR">EDUCACIÓN INICIAL Y PREESCOLAR</option>
                                    <option value="EDUCACIÓN INTERCULTURAL">EDUCACIÓN INTERCULTURAL</option>
                                    <option value="EDUCACIÓN PRIMARIA INDÍGENA">EDUCACIÓN PRIMARIA INDÍGENA</option>
                                    <option value="EDUCACIÓN PRIMARIA">EDUCACIÓN PRIMARIA</option>
                                    <option value="EDUCACIÓN SECUNDARIA GENERAL">EDUCACIÓN SECUNDARIA GENERAL</option>
                                    <option value="EDUCACIÓN SECUNDARIA TÉCNICA">EDUCACIÓN SECUNDARIA TÉCNICA</option>
                                    <option value="ENEA ACAPONETA">ENEA ACAPONETA</option>
                                    <option value="ESTADÍSTICA">ESTADÍSTICA</option>
                                    <option value="EVALUACIÓN EDUCATIVA E INSTITUCIONAL">EVALUACIÓN EDUCATIVA E INSTITUCIONAL</option>
                                    <option value="FOMENTO Y DIFUSIÓN CULTURAL">FOMENTO Y DIFUSIÓN CULTURAL</option>
                                    <option value="FONE">FONE</option>
                                    <option value="FORMACIÓN CONTINUA">FORMACIÓN CONTINUA</option>
                                    <option value="FORTALECIMIENTO EDUCATIVO">FORTALECIMIENTO EDUCATIVO</option>
                                    <option value="INFORMÁTICA">INFORMÁTICA</option>
                                    <option value="INNOVACIÓN EDUCATIVA">INNOVACIÓN EDUCATIVA</option>
                                    <option value="JURIDICO">JURIDICO</option>
                                    <option value="MEEBA">MEEBA</option>
                                    <option value="MONITOREO Y SEGUIMIENTO A RESULTADOS">MONITOREO Y SEGUIMIENTO A RESULTADOS</option>
                                    <option value="NORMATIVIDAD">NORMATIVIDAD</option>
                                    <option value="PLANEACIÓN Y EVALUACIÓN EDUCATIVA">PLANEACIÓN Y EVALUACIÓN EDUCATIVA</option>
                                    <option value="PRENSA">PRENSA</option>
                                    <option value="PROGRAMACIÓN Y PRESUPUESTO">PROGRAMACIÓN Y PRESUPUESTO</option>
                                    <option value="PROYECTOS DE INNOVACIÓN">PROYECTOS DE INNOVACIÓN</option>
                                    <option value="RECURSOS FINANCIEROS">RECURSOS FINANCIEROS</option>
                                    <option value="RECURSOS HUMANOS">RECURSOS HUMANOS</option>
                                    <option value="RECURSOS MATERIALES Y SERVICIOS">RECURSOS MATERIALES Y SERVICIOS</option>
                                    <option value="REGISTRO Y CERTIFICACIÓN ESCOLAR">REGISTRO Y CERTIFICACIÓN ESCOLAR</option>
                                    <option value="SECRETARÍA TÉCNICA">SECRETARÍA TÉCNICA</option>
                                    <option value="SERVICIOS ADMINISTRATIVOS.">SERVICIOS ADMINISTRATIVOS.</option>
                                    <option value="TRANSPARENCIA">TRANSPARENCIA</option>
                                    <option value="UPN 181 TEPIC">UPN 181 TEPIC</option>
                                    <option value="URSES">URSES</option>
                                    <option value="USICAMM">USICAMM</option>
                                </select>  
                            
                                <label for="destinatario_oficiou"><b>Destinatario:</b></label>
                                <select class="form-control" type="text" id="destinatario_oficiou" name="destinatario_oficiou" placeholder="Destinatario" required >
                                    <option selected value="No Especificado"> Elige Destinatario </option>
                                    <option value="ALMACÉN GENERAL">ALMACÉN GENERAL</option>
                                    <option value="CAM TEPIC">CAM TEPIC</option>
                                    <option value="CEDART TEPIC">CEDART TEPIC</option>
                                    <option value="CIFAD">CIFAD</option>
                                    <option value="COMISIÓN ESCALAFÓN">COMISIÓN ESCALAFÓN</option>
                                    <option value="COMITÉ DE ADQUISICIONES">COMITÉ DE ADQUISICIONES</option>
                                    <option value="CONSEJOS DE PARTICIPACIÓN">CONSEJOS DE PARTICIPACIÓN</option>
                                    <option value="CONTRALORIA">CONTRALORIA</option>
                                    <option value="DESARROLLO ORGANIZACIONAL">DESARROLLO ORGANIZACIONAL</option>
                                    <option value="DIRECCIÓN GENERAL">DIRECCIÓN GENERAL</option>
                                    <option value="DISPOSICIÓN FINAL Y BAJA DE ACTIVOS FIJOS">DISPOSICIÓN FINAL Y BAJA DE ACTIVOS FIJOS</option>
                                    <option value="EDUCACIÓN BÁSICA">EDUCACIÓN BÁSICA</option>
                                    <option value="EDUCACIÓN ESPECIAL">EDUCACIÓN ESPECIAL</option>
                                    <option value="EDUCACIÓN EXTRAESCOLAR">EDUCACIÓN EXTRAESCOLAR</option>
                                    <option value="EDUCACIÓN FÍSICA">EDUCACIÓN FÍSICA</option>
                                    <option value="EDUCACIÓN INDÍGENA">EDUCACIÓN INDÍGENA</option>
                                    <option value="EDUCACIÓN INICIAL Y PREESCOLAR INDÍGENA">EDUCACIÓN INICIAL Y PREESCOLAR INDÍGENA</option>
                                    <option value="EDUCACIÓN INICIAL Y PREESCOLAR">EDUCACIÓN INICIAL Y PREESCOLAR</option>
                                    <option value="EDUCACIÓN INTERCULTURAL">EDUCACIÓN INTERCULTURAL</option>
                                    <option value="EDUCACIÓN PRIMARIA INDÍGENA">EDUCACIÓN PRIMARIA INDÍGENA</option>
                                    <option value="EDUCACIÓN PRIMARIA">EDUCACIÓN PRIMARIA</option>
                                    <option value="EDUCACIÓN SECUNDARIA GENERAL">EDUCACIÓN SECUNDARIA GENERAL</option>
                                    <option value="EDUCACIÓN SECUNDARIA TÉCNICA">EDUCACIÓN SECUNDARIA TÉCNICA</option>
                                    <option value="ENEA ACAPONETA">ENEA ACAPONETA</option>
                                    <option value="ESTADÍSTICA">ESTADÍSTICA</option>
                                    <option value="EVALUACIÓN EDUCATIVA E INSTITUCIONAL">EVALUACIÓN EDUCATIVA E INSTITUCIONAL</option>
                                    <option value="FOMENTO Y DIFUSIÓN CULTURAL">FOMENTO Y DIFUSIÓN CULTURAL</option>
                                    <option value="FONE">FONE</option>
                                    <option value="FORMACIÓN CONTINUA">FORMACIÓN CONTINUA</option>
                                    <option value="FORTALECIMIENTO EDUCATIVO">FORTALECIMIENTO EDUCATIVO</option>
                                    <option value="INFORMÁTICA">INFORMÁTICA</option>
                                    <option value="INNOVACIÓN EDUCATIVA">INNOVACIÓN EDUCATIVA</option>
                                    <option value="JURIDICO">JURIDICO</option>
                                    <option value="MEEBA">MEEBA</option>
                                    <option value="MONITOREO Y SEGUIMIENTO A RESULTADOS">MONITOREO Y SEGUIMIENTO A RESULTADOS</option>
                                    <option value="NORMATIVIDAD">NORMATIVIDAD</option>
                                    <option value="PLANEACIÓN Y EVALUACIÓN EDUCATIVA">PLANEACIÓN Y EVALUACIÓN EDUCATIVA</option>
                                    <option value="PRENSA">PRENSA</option>
                                    <option value="PROGRAMACIÓN Y PRESUPUESTO">PROGRAMACIÓN Y PRESUPUESTO</option>
                                    <option value="PROYECTOS DE INNOVACIÓN">PROYECTOS DE INNOVACIÓN</option>
                                    <option value="RECURSOS FINANCIEROS">RECURSOS FINANCIEROS</option>
                                    <option value="RECURSOS HUMANOS">RECURSOS HUMANOS</option>
                                    <option value="RECURSOS MATERIALES Y SERVICIOS">RECURSOS MATERIALES Y SERVICIOS</option>
                                    <option value="REGISTRO Y CERTIFICACIÓN ESCOLAR">REGISTRO Y CERTIFICACIÓN ESCOLAR</option>
                                    <option value="SECRETARÍA TÉCNICA">SECRETARÍA TÉCNICA</option>
                                    <option value="SERVICIOS ADMINISTRATIVOS.">SERVICIOS ADMINISTRATIVOS.</option>
                                    <option value="TRANSPARENCIA">TRANSPARENCIA</option>
                                    <option value="UPN 181 TEPIC">UPN 181 TEPIC</option>
                                    <option value="URSES">URSES</option>
                                    <option value="USICAMM">USICAMM</option>
                                </select>  
                                
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
                <button type="button" class="btn btn-warning" id="btnActualiza">Actualizar</button>
                <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
      
    </div>
  </div>