<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'acceso_sistema_control';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//iniciar sesion
//si hay un error al iniciar sesion vota al login
$route['iniciar-sesion'] = 'acceso_sistema_control/index';
//enviar formulario a comprovar para inicar sesion
$route['acceso-al-sistema-indynet'] = 'acceso_sistema_control/IniciarSesion';
//mostrar pagina pprincipal del sistema
$route['home'] = 'acceso_sistema_control/MostrarPaginaPrincipalDelSistema';
//mostrar usuario correcto
$route['consultar-usuarios'] = 'cuenta_control/MostrarUsuario';
//mostrar contrasenia correcto
//$route['consultar-contrasenia'] = 'cuenta_control/MostrarContrasenia';
//salir del sistema
$route['salir'] = 'acceso_sistema_control/cerrar_sesion';


//Usuarios del sistema
//1. listar usuarios
$route['usuarios/listar'] = 'cuenta_control/ListarCuenta';
//mostrar formulario de registro
$route['usuarios/registrar'] = 'cuenta_control/nuevoUsuario';
//proceso de guardar cuenta
$route['usuarios/guardar'] = 'cuenta_control/RegistrarCuentas';
//cargar formulario modificar
$route['usuarios/modificar/(:num)'] = 'cuenta_control/VerEditar/$1';
//modificar registro usuarios
$route['usuarios/modificar-registro/(:num)'] = 'cuenta_control/modificarCuenta/$1';
//resetar clave cuando se olvidan
$route['usuarios/resetear-cuenta/(:num)'] = 'cuenta_control/ResetearCuenta/$1';
//resetear cuenta de cliente
$route['usuarios/resetear-cuenta-cliente/(:num)'] = 'cuenta_control/ResetearCuentaCliente/$1';
//desactivar cuenta
$route['usuarios/desactivar-cuenta/(:num)'] = 'cuenta_control/DesactivarCuenta/$1';
//activar cuenta
$route['usuarios/activar-cuenta/(:num)'] = 'cuenta_control/ActivarCuenta/$1';
//recuperar contrase;a de administrador 
$route['recuperar-cuenta-admin'] = 'cuenta_control/CargarDatosAdmin';
//eviar correo electronico 
$route['recuperar-cuenta-admin-enviar-correo'] = 'cuenta_control/sendMailGmail';


// ver perfil de usuario
$route['usuario/perfil'] = 'perfil_usuario_control/verPerfil';
//mostar formulario para cambiar contrasenia
$route['usuario/perfil-cambiar-contrasenia'] = 'perfil_usuario_control/MostrarFormulario';
//proceso de guardar contrasenia
$route['usuario/perfil-cambiar-contrasenia-guardar'] = 'perfil_usuario_control/ModificarContrasenia';


//Tipos de planes
//1. listar tipos de planes
$route['tipos-de-planes/listar'] = 'tipo_plan_control/listar_tipoPlan';
//mostrar formulario de registro
$route['tipos-de-planes/registrar'] = 'tipo_plan_control/nuevo';
//consultar y mostrar nombre disponible
$route['tipos-de-planes/validador'] = 'tipo_plan_control/MostrarNombreDisponible';
//proceso de guardado
$route['tipos-de-planes/guardar'] = 'tipo_plan_control/RegistrarTipoPlanes';
//cargar formulario modificar
$route['tipos-de-planes/modificar/(:num)'] = 'tipo_plan_control/verEditar/$1';
//modificar registro
$route['tipos-de-planes/modificar-registro/(:num)'] = 'tipo_plan_control/modificar/$1';

//Planes
//1. listar planes
$route['planes/listar'] = 'plan_control/listar_Plan';
//mostrar formulario de registro
$route['planes/registrar'] = 'plan_control/nuevo';
//proceso de guardado
$route['planes/guardar'] = 'plan_control/RegistrarPlanes';
//cargar formulario modificar
$route['planes/modificar/(:num)'] = 'plan_control/verEditar/$1';
//modificar registro
$route['planes/modificar-registro/(:num)'] = 'plan_control/modificar/$1';

//Marcas Router
//1. listar marcas de router
$route['marcas-de-router/listar'] = 'marca_router_control/listar_MarcaRouter';
//2. mostrar formulario de registro
$route['marcas-de-router/registrar'] = 'marca_router_control/nuevo';
//3. consultar y mostrar nombre disponible
$route['marcas-de-router/validador'] = 'marca_router_control/MostrarNombreDisponible';
//4. proceso de guardado
$route['marcas-de-router/guardar'] = 'marca_router_control/RegistrarMarcasRouter';
//cargar formulario modificar
$route['marcas-de-router/modificar/(:num)'] = 'marca_router_control/verEditar/$1';
//modificar registro
$route['marcas-de-router/modificar-registro/(:num)'] = 'marca_router_control/modificar/$1';

//Antena
//1. listar antena
$route['antena/listar'] = 'antena_control/listar_Antena';
//2. mostrar formulario de registro
$route['antena/registrar'] = 'antena_control/nuevo';
//3. consultar y mostrar nombre disponible
$route['antena/validador'] = 'antena_control/MostrarNombreDisponible';
//4. proceso de guardado
$route['antena/guardar'] = 'antena_control/RegistrarAntena';
//cargar formulario modificar
$route['antena/modificar/(:num)'] = 'antena_control/verEditar/$1';
//modificar registro
$route['antena/modificar-registro/(:num)'] = 'antena_control/modificar/$1';

//Nodo enlazado
//1. listar antena
$route['nodo/listar'] = 'nodo_enlazado_control/listar_NodoEnlazado';
//2. mostrar formulario de registro
$route['nodo/registrar'] = 'nodo_enlazado_control/nuevo';
//3. consultar y mostrar nombre disponible
$route['nodo/validador'] = 'nodo_enlazado_control/MostrarNombreDisponible';
//4. proceso de guardado
$route['nodo/guardar'] = 'nodo_enlazado_control/RegistrarNodoEnlazado';
//cargar formulario modificar
$route['nodo/modificar/(:num)'] = 'nodo_enlazado_control/verEditar/$1';
//modificar registro
$route['nodo/modificar-registro/(:num)'] = 'nodo_enlazado_control/modificar/$1';

// cliente
//1. listar cliente
$route['clientes/listar'] = 'persona_control/listar_Clientes';
//2. mostrar formulario de registro
$route['clientes/registrar'] = 'persona_control/nuevo';
//3. consultar y mostrar nombre disponible
$route['clientes/validador'] = 'persona_control/MostrarCedulaRucDisponible';
//4. proceso de guardado
$route['clientes/guardar'] = 'persona_control/RegistrarClienteCuenta';
//cargar formulario modificar
$route['clientes/modificar/(:num)'] = 'persona_control/verEditar/$1';
//modificar registro
$route['clientes/modificar-registro/(:num)'] = 'persona_control/modificar/$1';

// contratar plan
//1. listar contrato
$route['contratar-plan/listar'] = 'Contrato_plan_control/listar_ContratoPlan';
//2. mostrar formulario de registro
$route['contratar-plan/registrar'] = 'Contrato_plan_control/nuevo';
//3. mostrar valores a pagar de instalacion
$route['contratar-plan/valor-instalcion-pagar'] = 'Jquery_control/ValorDeInstalacion';
//4. total a pagar de instalcion dos pagos
$route['contratar-plan/mostrar-opcion-pagos'] = 'Jquery_control/MostarOpcionDePagosInstalcion';
//cargar cliente de acuerdo al numero de cedula seleccionada
$route['contratar-plan/cargar-cliente-combobox'] = 'Jquery_control/CargarCliente';
//5. mostrar opciones de router si esk lo tiene
$route['contratar-plan/mostrar-campos-de-router'] = 'Jquery_control/MostrarDatosdeRouter';
//3. consultar cargar para contrato plan tipos de planes
$route['contratar-plan/consultar-tipo-plan'] = 'tipo_plan_control/CargarTipoplan';
//4. consultar cargar para contrato plan planes
$route['contratar-plan/consultar-plan'] = 'plan_control/cargarPlan';
//5. valor mensual de plan
$route['contratar-plan/consultar-valor-mensual-plan'] = 'plan_control/cargarCostoPlan';
//proceso de guardar contrato de plan
$route['contratar-plan/guardar'] = 'Contrato_plan_control/RegistrarContratoDePlan';
//proceso de guardar primera factura
$route['contratar-plan/guardar-factura-primer-mes'] = 'Contrato_plan_control/GuardarFactura';
//desactivar un contrato
$route['contratar-plan/desactivar/(:num)'] = 'Contrato_plan_control/DesactivarContrato/$1';
//activar contrato
$route['contratar-plan/activar/(:num)'] = 'Contrato_plan_control/ActivarContrato/$1';
//cargar formulario para modificar
$route['contratar-plan/modificar/(:num)'] = 'Contrato_plan_control/VerEditar/$1';
//enviarformulario a modificar
$route['contratar-plan/modificar-registro/(:num)'] = 'Contrato_plan_control/modificar/$1';
//generar pdf acuerdo de contrato
$route['contratar-plan/acuerdo-contrato-pdf/(:num)'] = 'Contrato_plan_control/generarPdf/$1';


//facturacion crear factura de forma manual
$route['facturas/crear-manualmente/(:num)'] = 'Contrato_plan_control/FacturarContratoManualmente/$1';
//guardar facturaManual
$route['facturas/crear-manualmente/guardar'] = 'Contrato_plan_control/GuardarFacturaManual';
//facturas d ecleinyes 
$route['facturas/listar'] = 'facturacion_control/ListarFacturasXCliente';
//facturas pendientes que ve el administrador
$route['facturas-pendientes'] = 'facturacion_control/FacturasPendientes';
//facturas pagados que ve el administrador
$route['facturas-pagadas'] = 'facturacion_control/FacturasPagados';
//descontar facturas
$route['facturas-descuento/(:num)'] = 'facturacion_control/verEditar/$1';
//proceso de modificar factura
$route['facturas-descuento/modificar-registro(:num)'] = 'facturacion_control/ModificarFactura/$1';

//generar ppfd de facturas x cliente
$route['facturas/generar-pdf/(:num)'] = 'facturacion_control/GenerarPDFFacturas/$1';
//generar facturas en pdf admin
$route['facturas/pdf/(:num)'] = 'facturacion_control/GenerarPDFFacturasAdmin/$1';


//Router x cliente
//listar router
$route['router/listar'] = 'router_control/ListarRouterXCliente';
//cargar formulario modificar
$route['router/modificar/(:num)'] = 'router_control/verEditar/$1';
//modificar registro
$route['router/modificar-registro/(:num)'] = 'router_control/modificar/$1';

//registrar suscriptor
$route['suscriptor/registrar'] = 'suscriptor_control/NuevoSuscriptor';
//proceso de registar un suscriptor
$route['suscriptor/registar-suscriptor'] = 'suscriptor_control/RegistrarSuscriptorCuenta';
//mostrar vista de proformas
$route['proformas'] = 'suscriptor_control/NuevoProforma';
// imprimir proformas
$route['proformas-imprimir/(:num)'] = 'suscriptor_control/ImprimirProformas/$1';







