$(function(){
  $("#rUsuario").submit(function(){
    var url = $(this).attr('action');// capturar valor del action
    var datos = $(this).serialize();// captura de datos del formulario
    // alert(url);
    // alert(datos);
    $.post(url, datos , function(e){
      $.notify({
        message: e.texto
      },{
        type: e.estado,
        timer: 500
      });
      $("#nombre").val("");
      $("#apellido").val("");
      $("#correo").val("")
      $("#password").val("");
      $("#password").val("");

    }, 'json');
    return false;
  });
  $("#eUsuario").submit(function(){
    var url = $(this).attr('action');// capturar valor del action
    var datos = $(this).serialize();// captura de datos del formulario
    // alert(url);
    // alert(datos);
    $.post(url, datos , function(e){
      $.notify({
        message: e.texto
      },{
        type: e.estado,
        timer: 500
      });
      $("#nombre").val("");
      $("#apellido").val("");
      $("#correo").val("");

    }, 'json');
    return false;
  });
  // $("#eUsuario").submit(function(){
  //   var url = $(this).attr('action');// capturar valor del action
  //   var datos = $(this).serialize();// captura de datos del formulario
  //   alert(url);
  //   alert(datos);
  //   return false;
  // });
  $("#rProducto").submit(function(){
    var url = $(this).attr('action');// capturar valor del action
    var datos = $(this).serialize();// captura de datos del formulario
    // alert(url);
    // alert(datos);
    $.post(url, datos , function(e){
      $.notify({
        message: e.texto
      },{
        type: e.estado,
        timer: 500
      });
      $("#nombre").val("");
      $("#descripcion").val("");
      $("#precio").val("");

    }, 'json');
    return false;
  });
  $("#ePubli").submit(function(){
    var url = $(this).attr('action');// capturar valor del action
    var datos = $(this).serialize();// captura de datos del formulario
    // alert(url);
    // alert(datos);
    $.post(url, datos , function(e){
      $.notify({
        message: e.texto
      },{
        type: e.estado,
        timer: 500
      });
      $("#Titulo").val("");
      $("#Contenido").val("");
      $("#Categoria").val("");

    }, 'json');
    return false;
  });
  $("#rPubli").submit(function(){
    var url = $(this).attr('action');// capturar valor del action
    var datos = $(this).serialize();// captura de datos del formulario
    // alert(url);
    // alert(datos);
    $.post(url, datos , function(e){
      $.notify({
        message: e.texto
      },{
        type: e.estado,
        timer: 500
      });
      $("#Titulo").val("");
      $("#Contenido").val("");
      $("#Categoria").val("");

    }, 'json');
    return false;
  });
});
