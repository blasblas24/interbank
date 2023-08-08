/*
 View : Login Inicio
*/
$(function(){

	var dom, catchDom, initialize, suscribeEvents, events, valuesFromCookie;

	events = {
		goToRegister: function (e) {
			e.preventDefault();
			dom.frmRegister.submit();
		},
		docKeyPress: function(e){
			var key;

			key = e.keyCode ? e.keyCode : e.which;

			if ( key === 13 ) {
				this.ingresar();
				e.preventDefault();
				return false;
			}
		},
		inputKeyUp: function (e) {
			var $el, value, key, input, replace;

			$el = $( this );
			key = e.keyCode ? e.keyCode : e.which;
			value = $el.val();
			input = $el.data('input');

			if ( [8,46].indexOf(key) > -1 && $el.val().indexOf('*') > -1 ) {
				$el.val('');
				valuesFromCookie[input] = '';
				return false;
			}

			if ( valuesFromCookie[input] && valuesFromCookie[input] !== value ) {
				replace = String.fromCharCode((96 <= key && key <= 105)? key-48 : key);

				if ( !isNaN(replace) ) {
					$el.val(replace);
				} else {
					$el.val('');
				}

				valuesFromCookie[input] = '';
				return false;
			}
		},
		irOlvideClave : function(e){
			dom.frmOlvideClave.children('[name="nt"]').val(dom.inptTarjeta.val());
			dom.frmOlvideClave.children('[name="td"]').val(dom.selectTipoDoc.val());
			dom.frmOlvideClave.children('[name="nd"]').val(dom.inputNDoc.val());
			dom.frmOlvideClave.submit();
		},
		irRegistro : function(e){
			dom.frmRegistro.children('[name="nt"]').val('');
			dom.frmRegistro.children('[name="td"]').val('');
			dom.frmRegistro.children('[name="nd"]').val('');
			dom.frmRegistro.submit();
		},
		selectTipoDoc : function(e){
			var tipo = dom.selectTipoDoc.val(),
			domND = dom.inputNDoc;
			domND.val('');
			if(tipo == "DNI"){
				domND.attr('maxlength','8');
			}else{

				domND.attr('maxlength','11');
			}
		},
		msgMaxChars : function(e){
			var elm = (e.currentTarget),
			elmVal = (elm)?elm.value:'',
			elmValSize = elmVal.length,
			elmMax = (elm)?parseInt(elm.maxLength,10):0;
			msg = dom.msgMaxLength;
			if(elmValSize < (elmMax-1)){
				//15 - 16
				msg.html(dom.frmLogeoP1.data('mensaje-general-valido_numero_tarjeta'));
			}else{
				msg.html('');
			}
		},
		ingresar : function(e){
			var esVacioTarjeta, esRangoTarjeta, esVacioTipoDocumento, vnt, vnd;

			dom.msgMaxLength.html('');
			esVacioTarjeta = dom.inptTarjeta
				.validarInputVacio(dom.frmLogeoP1.data('mensaje-validacion-numero_tarjeta'));
			if(esVacioTarjeta){
				esRangoTarjeta = dom.inptTarjeta
					.validarInputRango(15,16,dom.frmLogeoP1.data('etiqueta-logueo-ingreso_numero_tarjeta_valido'));
				if(esRangoTarjeta){
					esVacioTipoDocumento = dom.inputNDoc
						.validarInputVacio(dom.frmLogeoP1.data('mensaje-general-ingresar_numero_documento'));
					if(esVacioTipoDocumento){
						vnt = dom.inptTarjeta.val(),
						post = vnt.indexOf("*");
						if(post === -1){
							vnt = $.rsa(vnt);
						}
						vnd = dom.inputNDoc.val(),
						postd = vnd.indexOf("*");
						if(postd === -1){
							vnd = $.rsa(vnd);
						}
						dom.frmLogeoP1.children('[name="nt"]').val(vnt);
						dom.frmLogeoP1.children('[name="td"]').val(dom.selectTipoDoc.val());
						dom.frmLogeoP1.children('[name="nd"]').val(vnd);
						dom.frmLogeoP1.children('[name="rnt"]').val(dom.inputRecordarTarjeta.prop('checked'));
						dom.frmLogeoP1.children('[name="rnd"]').val(dom.inputRecordarDocumento.prop('checked'));
						dom.inptTarjeta.val('');
						dom.inputNDoc.val('');

						dom.frmLogeoP1.submit();
					}
				}
		    }
		}
	};
	//GET DOM
	catchDom = function () {
		dom = {};
		dom.doc = $(document);
		dom.inptTarjeta = $('#input-tarjeta');
		dom.inputNDoc = $('#input-numero-documento');
		dom.btnIrOlvidoClave = $('#btnIrOlvidoClave');
		dom.inputRecordarTarjeta = $('#input-recordar-tarjeta');
		dom.inputRecordarDocumento = $('#input-recordar-documento');
		dom.btnIrRegistro = $('#btnIrRegistro');
		dom.selectTipoDoc = $('#select-tipo-documento');
		dom.btnIngresar = $('#a-ingresar');
		dom.frmLogeoP1 = $("#form-logueo-p1");
		dom.frmRegister = $("#form-registro");
		dom.frmOlvideClave = $('#form-olvide-clave');
		dom.frmRegistro = $('#form-registro');
		dom.msgMaxLength = $('#msgMaxLength');
		dom.btnGoRegister = $('.btn-go-register');
		suscribeEvents();
	};
	//EVENTS
	suscribeEvents = function () {
		dom.inptTarjeta.soloNumeros();
		dom.inputNDoc.on('keyup', events.inputKeyUp);
		dom.inptTarjeta.on('keyup', events.inputKeyUp);
		dom.inputNDoc.soloNumerosLetras({ idselect: 'select-tipo-documento', valnumeric: 'DNI' });
		dom.doc.on('keypress', $.proxy( events.docKeyPress, events ));
		dom.btnIrOlvidoClave.on('click', $.proxy( events.irOlvideClave, events ));
		dom.btnIrRegistro.on('click', $.proxy( events.irRegistro, events ));
		dom.selectTipoDoc.on('change', $.proxy( events.selectTipoDoc, events ));
		dom.btnIngresar.on('click',  $.proxy( events.ingresar, events ));
		//dom.inptTarjeta.on('blur',  $.proxy( events.msgMaxChars, events ));
		dom.btnGoRegister.on('click', $.proxy(events.goToRegister, events));
	};
	//INIT
	initialize = function () {
		//ga('send', 'pageview' , {'page': '/login' , 'title':  'Login'});
		catchDom();
		valuesFromCookie= {};
		valuesFromCookie.nroCard = dom.inptTarjeta.val();
		valuesFromCookie.nroDocument = dom.inputNDoc.val();
	};

	initialize();
});
