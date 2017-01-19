{extends file ="../../template_admin.tpl"}
{block name="contenido"}
    <div class="portlet light bordered" id="form_wizard_1">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-dark bold uppercase">
                    PERFIL DE SUARIO EN EL SISTEMA 
                </span>
            </div>
        </div>
        <div class="portlet-body form">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Perfil</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-4">
                                <span class="profile-picture">
                                    <img class="editable img-responsive" src="{base_url()}assets/layouts/layout/img/perfil.png" />
                                </span>
                                <h4><strong>Usuario: </strong>{$ci->utilidades->Usuario('usuario')}</h4>
                            </div>
                            <div class="col-md-8">
                                <h4><strong>Rol: </strong>{$rol}</h4>
                                <h4><strong>Nombre: </strong>{$ci->utilidades->Usuario('nombre')}</h4>
                                <form id="formContr" class="form-horizontal form-label-left" action="" method="POST" autocomplete="off">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Cambiar Contraseña
                                            <span class="required">  </span>
                                        </label>
                                        <div class="col-md-4">
                                            <div class="radio-list">
                                                <label>
                                                    <input type="radio" id="router" name="contrasenia" value="Si" data-title="Si" onclick="mostrarFormulario()"/> Si </label>
                                                <label>
                                                    <input type="radio" id="router" name="contrasenia" value="No" data-title="No" onclick="mostrarFormulario()"/> No </label>
                                            </div>
                                            <div id="form_gender_error"> </div>
                                        </div>
                                    </div>
                                    
                                    <div id="respuesta">
                                        
                                    </div>  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
 
<script type="text/javascript">
     function validar(){
     var v1 = validacion('pass');
     var v2 = validacion('pass1');
     if(v1 ===false || v2===false){
        $("#exito").hide();
        $("#error").show();
        return false;
     }else{
         enviarForm();
     }
    }
    function validacion(campo){
        if(campo == 'pass'){
            pass = document.getElementById(campo).value;
            if(pass == null || pass.length == 0 || /^\s+$/.test(pass)){
                $("#glypcn" + campo).remove();
                $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                $('#' + campo).parent().children('span').text("campo obligatorio").show();
                $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");
                return false;
            }else if(pass.length < 5){
                $("#glypcn" + campo).remove();
                $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                $('#' + campo).parent().children('span').text("la contraseña no puede tener menos de 5 caracteres").show();
                $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");
                return false;
            }else if(pass.length > 13){
                $("#glypcn" + campo).remove();
                $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                $('#' + campo).parent().children('span').text("la contraseña no puede tener mas de 13 caracteres").show();
                $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");
                return false;
            }else{
                $("#glypcn" + campo).remove();
                $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                $('#' + campo).parent().children('span').hide();
                $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-check form-control-feedback'></i>");
                return true;
            }
        }
        if(campo == 'pass1'){
            var clave = $("#pass").val();
            var clave1 = $("#pass1").val();
            pass1 = document.getElementById(campo).value;
            if(pass1 == null || pass1.length == 0 || /^\s+$/.test(pass1)){
                $("#glypcn" + campo).remove();
                $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                $('#' + campo).parent().children('span').text("campo obligatorio").show();
                $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");
                return false;
            }if(pass.length < 5){
                $("#glypcn" + campo).remove();
                $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                $('#' + campo).parent().children('span').text("la contraseña no puede tener menos de 5 caracteres").show();
                $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");
                return false;
            }else if(pass.length > 13){
                $("#glypcn" + campo).remove();
                $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                $('#' + campo).parent().children('span').text("la contraseña no puede tener mas de 13 caracteres").show();
                $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");
                return false;
            }else if(clave != clave1){
                $("#glypcn" + campo).remove();
                $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                $('#' + campo).parent().children('span').text("las contraseñas ingresadas no coiciden").show();
                $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");
                return false;
            }else{
                $("#glypcn" + campo).remove();
                $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                $('#' + campo).parent().children('span').hide();
                $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-check form-control-feedback'></i>");
                return true;
            }
        }
    }
   function mostrarFormulario(){
       var valor = $('input:radio[name=contrasenia]:checked').val();
       var url1 = '{base_url()}usuario/perfil-cambiar-contrasenia';
       $.ajax({
           type: 'POST',
           url: url1,
           data: 'valor=' + valor,
           success: function (data){
               $("#respuesta").html(data);
            }
        });
       
   }
    function enviarForm() {
            var url = "{base_url()}usuario/perfil-cambiar-contrasenia-guardar"; // El script a dónde se realizará la petición.
            $.ajax({
                type: "POST",
                url: url,
                data: $("#formContr").serialize(), // Adjuntar los campos del formulario enviado.
                success: function (data)
                {
                    $("#respuesta").html(data); // Mostrar la respuestas del script PHP.
                    //location.href = "{base_url()}contratar-plan/listar";
                }
            });

        return false;
    }
    
</script>
{/block}