<!doctype html>
<html>

<head>
<?php
require_once("dompdf/dompdf_config.inc.php");
 ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SGGM</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
    <!-- Bootstrap Date-Picker Plugin -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha256-siyOpF/pBWUPgIcQi17TLBkjvNgNQArcmwJB8YvkAgg=" crossorigin="anonymous" />

</head>

<body>
<div class='my_iframe'>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron">

                    <div class="media">
                        <img src="images/sg3.png" width="170" height="70" class="mr-3" alt="sg">
                        <div class="media-body">
                            <h3 class="text-center">Carta Resposiva </h3>

                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="tab-pane" id="edit">
                        <br>
                        <h4 class="text-center">Datos del Ingeniero </h4>
                           <br>
                        <!--<form method="POST"  class="TablaPDF.php" target="_blank"action="PDF responsiva.php" >-->
                        <form method="POST"  class="TablaPDF.php" target="_blank" action="PDF responsiva.php" >
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label form-control-label">Nombre :</label>
                                <div class="col-lg-4">
                                    <input type="text" id="nombre_i" name="nombre_i" class="form-control" placeholder="nombre" require>
                                </div>
                                <label class="col-lg-2 col-form-label form-control-label">Correo :</label>
                                <div class="col-lg-4">
                                    <input type="text" id="Correo_i" name="Correo_i" class="form-control" placeholder="Correo" require>
                                </div>
                            </div>

                            <div class="form-group row">

                                <label class="col-lg-2 col-form-label form-control-label">Ticket :</label>
                                <div class="col-lg-4">
                                  <input type="text" id="Ticket" name="Ticket" class="form-control" placeholder="Ticket">
                                </div>
                                <label class="col-lg-2 col-form-label form-control-label">Localidad :</label>
                                <div class="col-lg-4">
                                    <select id="Localidad_i" name="Localidad_i" class="form-control" size="0">
                                        <option value='' ></option>
                                        <option value="J01 - Delegación México" >J01 - Delegación Mexico</option>
                                        <option value="J09 - Abrasivos Mex" >J09 - Abrasivos Mex</option>
                                        <option value="J02 - Adfors" >J02 - Adfors</option>
                                        <option value="J03 - Vetrotex" >J03 - Vetrotex</option>
                                        <option value="J04 - GlassMexico" >J04 - GlassMexico</option>
                                        <option value="J05 - SekuritMexico" >J05 - SekuritMexico</option>
                                        <option value="J05 - Sek Saltillo" >J05 - Sek Saltillo</option>
                                        <option value="J08 - GypsumMexico" >J08 - GypsumMexico</option>
                                        <option value="J09 - AbrasivosMexico - Reynosa" >J09 - AbrasivosMexico - Reynosa</option>
                                        <option value="J09 - AbrasivosMexico - Tijuana" >J09 - AbrasivosMexico - Tijuana</option>
                                        <option value="J21 - PPL PerformancePlastics" >J21 - PPL PerformancePlastics</option>
                                        <option value="J12 - Servicios CorporativosColombia" >J12 - Servicios CorporativosColombia</option>
                                        <option value="11" >J15 - PamCol</option>
                                        <option value="J15 - PamCol" >J16 - AbrasivosColombia</option>
                                        <option value="J17 - VidrioAndinoColombia" >J17 - VidrioAndinoColombia</option>
                                        <option value="J22 - FiberGlassColombia" >J22 - FiberGlassColombia</option>
                                        <option value="J10 - AbrasivosVenezuela" >J10 - AbrasivosVenezuela</option>
                                        <option value="J11 - CeramicosVenezuela" >J11 - CeramicosVenezuela</option>
                                        <option value="J18 - Perú" >J18 - Perú</option><option value="20" >J23 - Plaka</option>
                                    </select>
                                </div>
                            </div>
                            <hr class="my-4">
                               <br>
    <h4 class="text-center">Informacion del Usuario Final </h4><br><br>


                                           <div class="form-group row">
                                <label class="col-lg-2 col-form-label form-control-label">Nombre :</label>
                                <div class="col-lg-4">
                                    <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" require>
                                </div>
                                <label class="col-lg-2 col-form-label form-control-label">SGI :</label>
                                <div class="col-lg-4">
                                    <input type="text" id="SGI" name="SGI" class="form-control" placeholder="SGI" require>
                                </div>
                            </div>
                                                <div class="form-group row">

                                <label class="col-lg-2 col-form-label form-control-label">Area :</label>
                                <div class="col-lg-4">
                                  <input type="text" id="Area" name="Area" class="form-control" placeholder="Area">
                                </div>
                                <label class="col-lg-2 col-form-label form-control-label">Localidad :</label>
                                <div class="col-lg-4">
                                    <select id="Localidad" name="Localidad" class="form-control" size="0">
                                        <option value='' ></option>
                                         <option value="J01 - Delegación México" >J01 - Delegación Mexico</option>
                                        <option value="J09 - Abrasivos Mex" >J09 - Abrasivos Mex</option>
                                        <option value="J02 - Adfors" >J02 - Adfors</option>
                                        <option value="J03 - Vetrotex" >J03 - Vetrotex</option>
                                        <option value="J04 - GlassMexico" >J04 - GlassMexico</option>
                                        <option value="J05 - SekuritMexico" >J05 - SekuritMexico</option>
                                        <option value="J05 - Sek Saltillo" >J05 - Sek Saltillo</option>
                                        <option value="J08 - GypsumMexico" >J08 - GypsumMexico</option>
                                        <option value="J09 - AbrasivosMexico - Reynosa" >J09 - AbrasivosMexico - Reynosa</option>
                                        <option value="J09 - AbrasivosMexico - Tijuana" >J09 - AbrasivosMexico - Tijuana</option>
                                        <option value="J21 - PPL PerformancePlastics" >J21 - PPL PerformancePlastics</option>
                                        <option value="J12 - Servicios CorporativosColombia" >J12 - Servicios CorporativosColombia</option>
                                        <option value="11" >J15 - PamCol</option>
                                        <option value="J15 - PamCol" >J16 - AbrasivosColombia</option>
                                        <option value="J17 - VidrioAndinoColombia" >J17 - VidrioAndinoColombia</option>
                                        <option value="J22 - FiberGlassColombia" >J22 - FiberGlassColombia</option>
                                        <option value="J10 - AbrasivosVenezuela" >J10 - AbrasivosVenezuela</option>
                                        <option value="J11 - CeramicosVenezuela" >J11 - CeramicosVenezuela</option>
                                        <option value="J18 - Perú" >J18 - Perú</option><option value="20" >J23 - Plaka</option>
                                    </select>
                                </div>
                                
                                <br>
                                <br>
                                <label class="col-lg-2 col-form-label form-control-label">Fecha :</label>
                                <div class="col-lg-4">
                                    <input type="date" id="fecha2" name="fecha2" class="form-control" placeholder="fecha" require>
                                </div>
                            </div>


                            <hr class="my-4">
                            <br>

    <h4 class="text-center"> Descripcion y Check List  de Equipo </h4>
    <br>
                                <div class="form-group row">

                                <label class="col-lg-2 col-form-label form-control-label">Hostname :</label>
                                <div class="col-lg-4">
                                  <input type="text" id="Hostname" name="Hostname" class="form-control" placeholder="Hostname">
                                </div>
                                <label class="col-lg-2 col-form-label form-control-label">Modelo :</label>
                                <div class="col-lg-4">
                                    <select id="Modelo" name="Modelo" class="form-control" size="0">
                                        <option value='' ></option>
                                        <option value="T440" >T440</option>
                                        <option value="T450" >T450</option>
                                        <option value="T460" >T460</option>
                                        <option value="T470" >T470</option>
                                        <option value="T480" >T480</option>
                                        <option value="T490" >T490</option>
                                        <option value="T14" >T14</option>
                                        <option value="X240" >X240</option>
                                        <option value="X250" >X250</option>
                                        <option value="X260" >X260</option>
                                        <option value="X270" >X270</option>
                                        <option value="X280" >X280</option>
                                        <option value="X390" >X390</option>
                                        <option value="X13" >X13</option>
                                        <option value="M82"  >M82</option>
                                        <option value="M93"  >M93</option>
                                        <option value="M900" >M900</option>
                                        <option value="M910q" >M910q</option>
                                        <option value="M910T" >M910T</option>
                                        <option value="M920q" >M920q</option>
                                        <option value="M920T" >M920T</option>
                                        <option value="Tablet XA1" >Tablet XA1</option>
                                        <option value="P15" >P15</option>
                                        <option value="P50" >P50</option>
                                        <option value="P52" >P52</option>
                                        <option value="P53" >P53</option>
                                        <option value="IPAD" >IPAD</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label form-control-label">Numero de Serie :</label>
                                <div class="col-lg-4">
                                    <input type="text" id="NS" name="NS" class="form-control" placeholder="Numero de Serie" require>
                                </div>
                                <label class="col-lg-2 col-form-label form-control-label">Manager :</label>
                                <div class="col-lg-4">
                                    <input type="text" id="Manager" name="Manager" class="form-control" placeholder="Manager" require>
                                </div>
                            </div>
                             <div class="form-group row">

                                <label class="col-lg-2 col-form-label form-control-label">Inventario :</label>
                                <div class="col-lg-4">
                                  <input type="text" id="Inventario" name="Inventario" class="form-control" placeholder="Inventario">
                                </div>
                                <label class="col-lg-2 col-form-label form-control-label">Tramite :</label>
                                <div class="col-lg-4">
                                    <select id="Tramite" name="Tramite" class="form-control" size="0">
                                       <option value='' ></option>
                                        <option value="Alta" >Alta</option>
                                        <option value="Cambio" >Cambio</option>
                                        <option value="Renovacion" >Renovacion</option>
                                         <option value="Prestamo" >Prestamo</option>
                                    </select>
                                </div>
                            </div>
                             <div class="form-group row">

                                <label class="col-lg-2 col-form-label form-control-label">SO:</label>
                                <div class="col-lg-4">
                                  <input type="text" id="SO" name="SO" class="form-control" placeholder="Sistema Operativo ">
                                </div>
                                <label class="col-lg-2 col-form-label form-control-label">Marca:</label>
                                <div class="col-lg-4">
                                  <input type="text" id="Marca" name="Marca" class="form-control" placeholder="Marca">
                                </div>
                            </div>



                               <div class="row">
                                     <div class="checkbox col-sm-6">
                                        <br>
                                        <input type="checkbox" name="ch1"> Uninstall Mcafee & CB
                                    </div>
                                     <div class="checkbox col-sm-6">
                                    <br>
                                    <input type="checkbox" name="ch2"> Correr inventarios CMCB</div>
                                    <div class="checkbox col-sm-6">
                                    <br>
                                    <input type="checkbox" name="ch3"> Parches de seguridad mes en curso  y Anteriores
                                    </div><div class="checkbox col-sm-6">
                                    <br>
                                    <input type="checkbox" name="ch4"> CMCB con la versi&#243;n Actualizada
                                    </div><div class="checkbox col-sm-6">
                                    <br>
                                    <input type="checkbox" name="ch5"> CrowdStrike FalconSensor
                                        </div><div class="checkbox col-sm-6">
                                    <br>
                                    <input type="checkbox" name="ch6"> Inicia correctamente el Software center (CMCB)
                                </div><div class="checkbox col-sm-6">
                                    <br>
                                    <input type="checkbox" name="ch7"> LAPS</div>
                                    <div class="checkbox col-sm-6">
                                    <br>
                                    <input type="checkbox" name="ch8"> Druva (Laptops y Tablets)</div><div class="checkbox col-sm-6">

                                        <br>
                                        <input type="checkbox" name="ch9"> Druva configurado y respaldando (Laptops y Tablets)</div>
                                        <div class="checkbox col-sm-6">
                                        <br>
                                        <input type="checkbox" name="ch10"> Se configura perfil de usuario completo (Correo,Skype)</div>
                                        <div class="checkbox col-sm-6">
                                        <br>
                                        <input type="checkbox" name="ch11"> Certificado para red inal&#225;brica (solo laptops y tablets)</div>
                                        <div class="checkbox col-sm-6">
                                        <br>
                                        <input type="checkbox" name="ch12"> Se valida que cuente con los correos PST conectados</div>
                                        <div class="checkbox col-sm-6"><br>
                                        <input type="checkbox" name="ch13"> Impresoras</div>
                                        <div class="checkbox col-sm-6"><br>
                                        <input type="checkbox" name="ch14"> Carpetas y unidades de red</div>
                                        <div class="checkbox col-sm-6"><br>
                                        <input type="checkbox" name="ch15"> VPN Validar conexion</div>
                                        <div class="checkbox col-sm-6"><br>
                                        <input type="checkbox" name="ch16"> Bit Locker (Disco Encriptado)</div><br>
                                    </div><br>

                                <div class="form-group row">
                                    <label class="col-lg-6 col-form-label form-control-label">Observaciones Adicionales :</label>
                                 </div>

                                   <textarea class="form-control" rows="3" name="Adicionales"></textarea>

                            <hr class="my-4">
                            <br>
                            <div class="form-group row">
                                <label class="col-lg-5 col-form-label form-control-label"></label>
                                <div class="col-lg-3">
                                   <button type="submit" class="btn btn-primary btn-block">Generar responsiva</button>




                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-2">
                        <div id="msg_error" class="alert alert-danger" role="alert" style="display: none"></div>
                        <div id="errors"></div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>



    <script src="jquery/jquery-3.5.0.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="codigo.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha256-bqVeqGdJ7h/lYPq6xrPv/YGzMEb6dNxlfiTUHSgRCp8=" crossorigin="anonymous"></script>
    <script type="text/javascript">


toolbar:{
    items
}



     $(document).ready(function(){
    $.fn.datepicker.dates['en'] = {
    days: ["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"],
    daysShort: ["Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab"],
    daysMin: ["D", "L", "M", "M", "J", "V", "S"],
    months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
    monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
    today: "Today",
    clear: "Clear",
    format: "dd/mm/yyyy",
    titleFormat: "MM yyyy", /* Leverages same syntax as 'format' */
    weekStart: 0
};
     $('#nacimiento').datepicker({
         format: "dd/mm/yyyy",
         autoclose:true
     })
    })

var formulario = document.forms['formulario'];
var campo = formulario['campo'].value;


    </script>

</body>

</html>
