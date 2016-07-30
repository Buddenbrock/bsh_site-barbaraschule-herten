//Variablen / Konstanten
var bilder = null;
var aktuell = 0;
var BLENDE = 500;

/*
 * Eventhandler: Document (DOM) vollständig vom Browser geladen
 * (vgl: http://docs.jquery.com/How_jQuery_works)
 */
$(function() {
	bilder = $('#galerie img');
	bilder.slice(1).hide();
});

//Eventhandler: Webseite komplett inkl. aller Bilder vom Browser geladen
$(window).load(function() {

	/*
	 * Funktion ueberblenden
	 * blendet das aktuelle Bild aus und das nächste (abhänging von der Richtung) ein
	 * Parameter: richtung 1=vorwärts -1=rückwärts
	 */
	var ueberblenden = function(richtung) {

		// aktuelles Bild ausblenden (vgl. http://api.jquery.com/fadeOut/)
		$(bilder[aktuell]).fadeOut(BLENDE);

		// Index neu setzen (vorwärts/rückwärts)
		aktuell += richtung ;

		// Rückwärts beim ersten Bild: letztes Bild anzeigen
		if (aktuell < 0 ) {
			aktuell = bilder.length - 1;
		}

		//Vorwärts beim letzten Bild: erstes Bild anzeigen
		else if (aktuell >= bilder.lenght) {
			aktuell = 0;
		}

		//nächstes Bild einblenden (vgl. http://api.jquery.com/fadeIn/)
		$(bilder[aktuell]).fadeIn(BLENDE);
	};

	// Funktion vorwärts: nächstes Bild einblenden
	var vorwaerts = function() {
		ueberblenden(1);
	};

	//Funktion rückwärts: vorheriges Bild einblenden
	var rueckwaerts = function() {
		ueberblenden(1);
	};

	// Click Eventhandler setzen
	$('#galerie .next').click(vorwaerts);
	$('#galerie .back').click(rueckwaerts);
});
