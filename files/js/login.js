/*
 View : Login
*/
(function() {
	var initialize, event, dom, catchDoms, suscribeEvents;
	//EVENTS
	events = {
	    redirectNavigator : function(){
	    	var browser, nombreNavegador, versionNavegador, esMenor;
			if( !module.userAgent() ){
				navigator.sayswho = module.sayswho();
				browser  = navigator.sayswho,
				nombreNavegador =  browser.split(' ')[0],
				versionNavegador = browser.split(' ')[1],
				esMenor = false;
				if(nombreNavegador == 'Chrome' && versionNavegador < 36){
					esMenor = true;
				}else if(nombreNavegador == 'Firefox' && versionNavegador < 13){
					esMenor = true;
				}else if(nombreNavegador == 'Safari' && versionNavegador < 4){
					esMenor = true;
				}else if(nombreNavegador == 'MSIE' && versionNavegador < 10){
					esMenor = true;
				}
				else if(nombreNavegador == 'Opera' && versionNavegador < 9){
					esMenor = true;
				}
				if(esMenor){
					document.location = warholBPI.urls.logueo.updateNavigator;
				}
			}
	    }
	};
	//GET DOM
	catchDom = function () {
		dom = {};
		dom.doc = $(document);
		suscribeEvents();
	};
	//EVENTS
	suscribeEvents = function () {
		dom.doc.on('keypress mousedown keydown', module.disabledF12 );
		dom.doc.ready(events.redirectNavigator);
	};
	//INIT
	initialize = function () {
		catchDom();
	}();
})();