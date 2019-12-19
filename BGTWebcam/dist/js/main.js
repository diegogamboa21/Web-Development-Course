(function () {
  "use strict";

  //Cargar Mapa
  if (document.getElementById('mapa')) {
    var map = L.map('mapa').setView([4.678418, -74.133816], 15);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([4.678418, -74.133816]).addTo(map)
      .bindTooltip('BGTWebCamp 2019.<br> Ubicación principal.')
      .openTooltip();
  }

  var regalo = document.getElementById('regalo');

  document.addEventListener('DOMContentLoaded', function () {

    //Campos datos usuario
    var nombre = document.getElementById('nombre');
    var apellido = document.getElementById('apellido');
    var email = document.getElementById('email');

    //Campos entradas
    var pase_dia = document.getElementById('paseDia');
    var pase_dos_dias = document.getElementById('paseDosDias');
    var pase_completo = document.getElementById('paseCompleto');

    //Botones y div's
    var calcular = document.getElementById('calcular');
    var errorDiv = document.getElementById('error');
    var botonRegistro = document.getElementById('btnRegistro');
    var resumenProductos = document.getElementById('lista_productos');
    var sumaTotal = document.getElementById('suma_total');

    //Extras
    var camisaEvento = document.getElementById('camisa_evento');
    var etiquetas = document.getElementById('etiquetas');

    calcular ? calcular.addEventListener('click', calcularMontos) : "";

    pase_dia ? pase_dia.addEventListener('blur', mostrarDias) : "";
    pase_dos_dias ? pase_dos_dias.addEventListener('blur', mostrarDias) : "";
    pase_completo ? pase_completo.addEventListener('blur', mostrarDias) : "";

    nombre ? nombre.addEventListener('blur', validarCampos) : "";
    apellido ? apellido.addEventListener('blur', validarCampos) : "";
    email ? email.addEventListener('blur', validarCampos) : "";
    email ? email.addEventListener('blur', validarMail) : "";

    function calcularMontos(event) {
      event.preventDefault();

      if (regalo.value === '') {
        alert("Debes elegir un regalo");
        regalo.focus();
      } else {
        //console.log("elegiste el regalo: " + regalo.value);
        var boletoDia = parseInt(pase_dia.value, 10) || 0;
        var boleto2Dias = parseInt(pase_dos_dias.value, 10) || 0;
        var boletoCompleto = parseInt(pase_completo.value, 10) || 0;
        var cantidadCamisas = parseInt(camisaEvento.value, 10) || 0;
        var cantidadEtiquetas = parseInt(etiquetas.value, 10) || 0;

        var totalPagar = (boletoDia * 30) + (boleto2Dias * 45) + (boletoCompleto * 50) + ((cantidadCamisas * 10) * 0.93) + (cantidadEtiquetas * 2);
        //alert("Total: " + totalPagar);
        console.log("Total: " + totalPagar);

        var listadoProductos = [];
        boletoDia > 0 ? listadoProductos.push(boletoDia + " pases por dia") : "";
        boleto2Dias > 0 ? listadoProductos.push(boleto2Dias + " pases por 2 dias") : "";
        boletoCompleto > 0 ? listadoProductos.push(boletoCompleto + " pases por dia") : "";

        cantidadCamisas > 0 ? listadoProductos.push(cantidadCamisas + " camisas") : "";
        cantidadEtiquetas > 0 ? listadoProductos.push(cantidadEtiquetas + " etiquetas") : "";
        //console.log(listadoProductos);

        resumenProductos.style = "block";
        resumenProductos.innerHTML = "";
        for (var i = 0; i < listadoProductos.length; i++) {
          resumenProductos.innerHTML += listadoProductos[i] + "<br/>";
        }
        sumaTotal.innerHTML = "$" + totalPagar.toFixed(2);
      }
    }

    function mostrarDias(event) {
      var boletoDia = parseInt(pase_dia.value, 10) || 0;
      var boleto2Dias = parseInt(pase_dos_dias.value, 10) || 0;
      var boletoCompleto = parseInt(pase_completo.value, 10) || 0;

      var diasElegidos = [];
      boletoDia > 0 ? diasElegidos.push("viernes") : "";
      boleto2Dias > 0 ? diasElegidos.push("viernes", "sabado") : "";
      boletoCompleto > 0 ? diasElegidos.push("viernes", "sabado", "domingo") : "";

      for (var i = 0; i < diasElegidos.length; i++) {
        document.getElementById(diasElegidos[i]).style.display = "block";
      }

    }

    function validarCampos() {
      if (this.value === "") {
        errorDiv.style.display = 'block';
        error.style.color = "red";
        errorDiv.innerHTML = "Este campo es obligatorio";
        this.style.border = "1px solid red";
        this.style.borderRadius = "2px";
      } else {
        errorDiv.style.display = 'none';
        this.style.border = '1px solid #cccccc';
        this.style.backgroundColor = 'transparent';
      }
    }

    function validarMail() {
      if (isValidEmail(this.value)) {
        errorDiv.style.display = 'none';
        this.style.border = '1px solid #cccccc';
        this.style.backgroundColor = 'transparent';
      } else {
        errorDiv.style.display = 'block';
        error.style.color = "red";
        errorDiv.innerHTML = "Introduce un correo valido";
        this.style.border = "1px solid red";
        this.style.borderRadius = "2px";
      }
    }

    function isValidEmail(mail) {
      return /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(mail);
    }

  }); // DOM Content Loaded

})();

$(function () {

  //**LETTERING**//
  $('.nombre-sitio').lettering();

  //**MENU FIJO**//
  var windowHeight = $(window).height();
  var barraAltura = $('.barra').innerHeight();

  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll > windowHeight) {
      $('.barra').addClass('fixed');
      $('body').css({
        'margin-top': barraAltura + 'px'
      });
    } else {
      $('.barra').removeClass('fixed');
      $('body').css({
        'margin-top': '0px'
      });
    }
  })

  //**MENU RESPONSIVE**//
  $('.menu-movil').on('click', function () {
    $('.navegacion-principal').slideToggle();
  });

  //**PROGRAMA DE CONFERENCIAS **//
  $('.programa-evento .info-curso:first').show();
  $('.menu-programa a').addClass('activo');

  $('.menu-programa a').on('click', function () {
    $('.ocultar').hide();
    $('.menu-programa a').removeClass('activo');
    $(this).addClass('activo');
    var enlace = $(this).attr('href');
    $(enlace).fadeIn(1000);

    return false;
  });

  //**ANIMACIONES PARA LOS NUMEROS**//
  $('.resumen-evento li:nth-child(1) p').animateNumber({
    number: 6
  }, 1200);

  $('.resumen-evento li:nth-child(2) p').animateNumber({
    number: 15
  }, 1200);

  $('.resumen-evento li:nth-child(3) p').animateNumber({
    number: 3
  }, 1500);

  $('.resumen-evento li:nth-child(4) p').animateNumber({
    number: 9
  }, 1500);

  //**CUENTA REGRESIVA**//
  $('.cuenta-regresiva').countdown('2020/01/10 09:00:00', function (e) {
    $('#dias').html(e.strftime('%D'));
    $('#horas').html(e.strftime('%H'));
    $('#minutos').html(e.strftime('%M'));
    $('#segundos').html(e.strftime('%S'));
  });

});
