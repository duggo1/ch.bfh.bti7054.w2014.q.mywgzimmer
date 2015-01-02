function InserierenTab1Kontrolle() {

	var BewohnerGeschlecht;

	if (document.getElementById('ISTgeschlechtf').checked) {
		BewohnerGeschlecht = 'f';

	} else if (document.getElementById('ISTgeschlechtm').checked) {
		BewohnerGeschlecht = 'm';

	} else {
		BewohnerGeschlecht = 'x';
	}

	var BewohnerAlter = $("#ISTalter").val();
	var BewohnerBeschreibung = $("#bewohnerBeschreibung").val();

	var hasErrorBewohnerAlter = false;
	var hasErrorBewohnerBeschreibung = false;
	var ErrorMessage = "Bitte überprüfen Sie folgende Angaben:\n";

	if (BewohnerAlter.length == 0) {
		hasErrorBewohnerAlter = true;
		ErrorMessage = ErrorMessage + "fehlende Altersangabe\n";
	} else {
		if (isNaN(BewohnerAlter)) {
			hasErrorBewohnerAlter = true;
			ErrorMessage = ErrorMessage + "ungültige Altersangabe\n";

		} else if (BewohnerAlter < document.getElementById('ISTalter').min) {
			hasErrorBewohnerAlter = true;
			ErrorMessage = ErrorMessage + "ungültige Altersangabe\n";
		} else if (BewohnerAlter > document.getElementById('ISTalter').max) {
			hasErrorBewohnerAlter = true;
			ErrorMessage = ErrorMessage + "ungültige Altersangabe\n";
		} else {
			hasErrorBewohnerAlter = false;
		}
	}
	if (BewohnerBeschreibung.length == 0) {
		hasErrorBewohnerBeschreibung = true;
		ErrorMessage = ErrorMessage + "fehlende Bewohnerbeschreibung\n";
	} else {
		hasErrorBewohnerBeschreibung = false;
	}
	if (hasErrorBewohnerAlter || hasErrorBewohnerBeschreibung) {
		alert(ErrorMessage);
                return;
	}

	$.ajax({
		type : "POST",
		data : "what=inserierenTab1&insBewohnerGeschlecht="
				+ BewohnerGeschlecht + "&insBewohnerAlter=" + BewohnerAlter
				+ "&insBewohnerBeschreibung=" + BewohnerBeschreibung,
		url : "request/service.php",
		success : function(msg) {
			if (msg != 'false') {
				$("#tabs").tabs("enable", 1);
				$("#tabs").tabs("option", "active", 1);
				$("#tabs").tabs("disable", 0);
			}
		}
	});

}
function InserierenTab2Kontrolle() {

	var WohnungStr = $("#insZimmerStr").val();
	var WohnungHausNr = $("#insZimmerStrNr").val();
	var WohnungZusatzNr = $("#insZimmerZusatzNr").val();
	var WohnungOrt = $("#insZimmerOrt").val();
	var WohnungPlz = $("#insZimmerPlz").val();
	var WohnungEinzug = $("#insMitAbDatum").val();
	var WohnungAuszug = $("#insMitBisDatum").val();
	var Wohnungkosten = $("#insMitkosten").val();

	var heute = new Date();

	var hasErrorWohnungStr = false;
	var hasErrorWohnungHausNr = false;
	var hasErrorWohnungOrt = false;
	var hasErrorWohnungPlz = false;
	var hasErrorWohnungkosten = false;
	var hasErrorWohnungBezug = false;

	var ErrorMessage = "Bitte überprüfen Sie folgende Angaben:\n";

	if (WohnungStr.length == 0) {
		hasErrorWohnungStr = true;
		ErrorMessage = ErrorMessage + "fehlender Strassenname\n";
	} else {
		hasErrorWohnungStr = false;
	}

	if (WohnungHausNr.length == 0) {
		hasErrorWohnungStr = true;
		ErrorMessage = ErrorMessage + "fehlende Hausnummer\n";
	} else {
		hasErrorWohnungStr = false;
	}

	if (WohnungOrt.length == 0) {
		hasErrorWohnungOrt = true;
		ErrorMessage = ErrorMessage + "fehlender Ortsname\n";

	} else {
		hasErrorWohnungOrt = false;
	}

	if (WohnungPlz.length == 0) {
		hasErrorWohnungPlz = true;
		ErrorMessage = ErrorMessage + "fehlende Postleitzahl\n";
	} else {
		if (isNaN(WohnungPlz)) {
			hasErrorWohnungPlz = true;
			ErrorMessage = ErrorMessage + "ungültige Postleitzahl\n";

		} else if (WohnungPlz < document.getElementById('insZimmerPlz').min) {
			hasErrorWohnungPlz = true;
			ErrorMessage = ErrorMessage + "ungültige Postleitzahl\n";
		} else if (WohnungPlz > document.getElementById('insZimmerPlz').max) {
			hasErrorWohnungPlz = true;
			ErrorMessage = ErrorMessage + "ungültige Postleitzahl\n";
		} else {
			hasErrorWohnungPlz = false;
		}
	}

	if (Wohnungkosten.length == 0) {
		hasErrorWohnungkosten = true;
		ErrorMessage = ErrorMessage + "fehlende Mietzinsangabe\n";
	} else {
		if (isNaN(Wohnungkosten)) {
			hasErrorWohnungkosten = true;
			ErrorMessage = ErrorMessage + "ungültiger Mietzins\n";
			
		}else if(Wohnungkosten>parseInt(document.getElementById('insMitkosten').max) ){
			
			hasErrorWohnungkosten = true;
			ErrorMessage = ErrorMessage + "ungültiger Mietzins\n";

		} else {
			hasErrorWohnungkosten = false;
		}
	}
	if ($("#insMitBisDatum").length == 0) {
		WohnungAuszug = "30.12.9999";
	}
	if (WohnungEinzug < heute || WohnungEinzug >= WohnungAuszug) {
		hasErrorWohnungBezug = true;
		ErrorMessage = ErrorMessage + "falsche Datumeingabe\n";
	}
	if (hasErrorWohnungStr || hasErrorWohnungHausNr || hasErrorWohnungOrt
			|| hasErrorWohnungPlz || hasErrorWohnungkosten) {
		alert(ErrorMessage);
		return;
	}

	$.ajax({
		type : "POST",
		data : "what=inserierenTab2&insWohnungStr=" + WohnungStr
				+ "&insWohnungHausNr=" + WohnungHausNr + "&insWohnungZusatzNr="
				+ WohnungZusatzNr + "&insWohnungOrt=" + WohnungOrt
				+ "&insWohnungPlz=" + WohnungPlz + "&insWohnungAbDatum="
				+ WohnungEinzug + "&insWohnungBisDatum=" + WohnungAuszug
				+ "&insWohnungkosten=" + Wohnungkosten,
		url : "request/service.php",
		success : function(msg) {
			if (msg != 'false') {
				$("#tabs").tabs("enable", 2);
				$("#tabs").tabs("option", "active", 2);
				$("#tabs").tabs("disable", 1);
			}
		}
	});

}
function InserierenTab3Kontrolle() {

	var ZimmerFlaeche = $("#insFlaeche").val();
	var ZimmerBeschreibung = $("#ZimmerBeschreibung").val();
	var ZimmerTyp;
	var foto1 = $("#insFoto1").val();
	var foto2 = $("#insFoto2").val();
	var foto3 = $("#insFoto3").val();

	var hasErrorZimmerFlaeche = false;
	var hasErrorZimmerBeschreibung = false;

	var ErrorMessage = "Bitte überprüfen Sie folgende Angaben:\n";

	if (document.getElementById('insZimmerTypz').checked) {
		ZimmerTyp = 0;
	} else {
		ZimmerTyp = 1;
	}

	if (ZimmerFlaeche.length == 0) {
		hasErrorZimmerFlaeche = true;
		ErrorMessage = ErrorMessage + "fehlende Zimmergrösse\n";

	} else {
		if (isNaN(ZimmerFlaeche)) {
			hasErrorZimmerFlaeche = true;
			ErrorMessage = ErrorMessage + "ungültige Flächenangabe\n";
		} else if (ZimmerFlaeche < parseInt(document.getElementById('insFlaeche').min)) {
			hasErrorZimmerFlaeche = true;
			ErrorMessage = ErrorMessage + "ungültige Flächenangabe  min\n"+document.getElementById('insFlaeche').min;
		} else if (ZimmerFlaeche > parseInt(document.getElementById('insFlaeche').max)) {
			hasErrorZimmerFlaeche = true;
			ErrorMessage = ErrorMessage + "ungültige Flächenangabe  max\n";
		} else {
			hasErrorZimmerFlaeche = false;
		}
	}

	if (ZimmerBeschreibung.length == 0) {
		hasErrorZimmerBeschreibung = true;
		ErrorMessage = ErrorMessage + "fehlende Zimmerbeschreibung\n";
	} else {
		hasErrorZimmerBeschreibung = false;
	}

	if (hasErrorZimmerBeschreibung || hasErrorZimmerFlaeche) {
		alert(ErrorMessage);
		return;
	}


	$.ajax({
		type : "POST",
		data : "what=inserierenTab3&insZimmerTyp=" + ZimmerTyp
				+ "&insZimmerFlaeche=" + ZimmerFlaeche
				+ "&insZimmerBeschreibung=" + ZimmerBeschreibung
				+ "&$insFoto1link=" + foto1 + "&$insFoto2link=" + foto2
				+ "&$insFoto3link=" + foto3,
		url : "request/service.php",
		success : function(msg) {
			if (msg != 'false') {
				$("#tabs").tabs("enable", 3);
				$("#tabs").tabs("option", "active", 3);
				$("#tabs").tabs("disable", 2);
			}
		}
	});

}
function InserierenTab4Kontrolle() {

	var GesuchtSex;

	if (document.getElementById('SOLLgeschlechtf').checked) {
		GesuchtSex = 'f';

	} else if (document.getElementById('SOLLgeschlechtm').checked) {
		GesuchtSex = 'm';

	} else {
		GesuchtSex = 'x';
	}

	var GesuchtMinAlter = $("#SOLLminAlter").val();
	var GesuchtMaxAlter = $("#SOLLmaxAlter").val();
	var GesuchtBeschreibung = $("#gesuchtBeschreibung").val();

	var hasErrorGesuchtMinAlter = false;
	var hasErrorGesuchtMaxAlter = false;
	var hasErrorGesuchtBeschreibung = false;

	var ErrorMessage = "Bitte überprüfen Sie folgende Angaben:\n";

	if (GesuchtMinAlter.length == 0) {
		hasErrorGesuchtMinAlter = true;
		ErrorMessage = ErrorMessage + "fehlende Mindestalter\n";
	} else {
		if (isNaN(GesuchtMinAlter)) {
			hasErrorGesuchtMinAlter = true;
			ErrorMessage = ErrorMessage + "ungültiger Mindestalter\n";
		} else if (GesuchtMinAlter < parseInt(document.getElementById('SOLLminAlter').min)) {
			hasErrorGesuchtMinAlter = true;
			ErrorMessage = ErrorMessage + "ungültiger Mindestalter\n";
		} else if (GesuchtMinAlter > parseInt(document.getElementById('SOLLminAlter').max)) {
			hasErrorGesuchtMinAlter = true;
			ErrorMessage = ErrorMessage + "ungültiger Mindestalter\n";
			
		} else {
			hasErrorGesuchtMinAlter = false;
		}
	}
	if (GesuchtMaxAlter.length == 0) {
		hasErrorGesuchtMaxAlter = true;
		ErrorMessage = ErrorMessage + "fehlende Höchstalter\n";
	} else {
		if (isNaN(GesuchtMaxAlter)) {
			hasErrorGesuchtMaxAlter = true;
			ErrorMessage = ErrorMessage + "ungültiger Höchstalter\n";

		} else if (GesuchtMaxAlter < parseInt(document.getElementById('SOLLmaxAlter').min)) {
			hasErrorGesuchtMaxAlter = true;
			ErrorMessage = ErrorMessage + "ungültiger Höchstalter\n";
		} else if (GesuchtMaxAlter > parseInt(document.getElementById('SOLLmaxAlter').max)) {
			hasErrorGesuchtMaxAlter = true;
			ErrorMessage = ErrorMessage + "ungültiger Höchstalter\n";

		} else {
			hasErrorGesuchtMaxAlter = false;
		}
	}
	if (GesuchtMaxAlter<GesuchtMinAlter){
		hasErrorGesuchtMinAlter = true;
		ErrorMessage = ErrorMessage + "Mindestalter darf nicht grösser als Höchstalter sein!\n";
	
	}

	if (GesuchtBeschreibung.length == 0) {
		hasErrorGesuchtBeschreibung = true;
		ErrorMessage = ErrorMessage + "fehlende Gesuchtbeschreibung\n";
	} else {

		hasErrorGesuchtBeschreibung = false;

	}

	if (hasErrorGesuchtMinAlter || hasErrorGesuchtMaxAlter
			|| hasErrorGesuchtBeschreibung) {
		alert(ErrorMessage);
		return;
	}
	


	$.ajax({
		type : "POST",
		data : "what=inserierenTab4" + "&insGesuchtSollSex=" + GesuchtSex
				+ "&insGesuchtSollMinAlter=" + GesuchtMinAlter + "&insGesuchtSollMaxAlter="
				+ GesuchtMaxAlter + "&insGesuchtBeschreibung="
				+ GesuchtBeschreibung,
		url : "request/service.php",
		success : function(msg) {
			if (msg != 'false') {

				$("#tabs").tabs("enable", 4);
				$("#tabs").tabs("option", "active", 4);
				$("#tabs").tabs("disable", 3);
			}
		}
	});

}
function InserierenTab5Kontrolle() {
	
	// Tab1
	var BewohnerAlter = $("#ISTalter").val();
	var BewohnerBeschreibung = $("#bewohnerBeschreibung").val();
	var BewohnerGeschlecht;
	if (document.getElementById('ISTgeschlechtf').checked) {
		BewohnerGeschlecht = 'f';
	} else if (document.getElementById('ISTgeschlechtm').checked) {
		BewohnerGeschlecht = 'm';
	} else {
		BewohnerGeschlecht = 'x';
	}
	// Tab2
	var WohnungStr = $("#insZimmerStr").val();
	var WohnungHausNr = $("#insZimmerStrNr").val();
	var WohnungZusatzNr = $("#insZimmerZusatzNr").val();
	var WohnungOrt = $("#insZimmerOrt").val();
	var WohnungPlz = $("#insZimmerPlz").val();
	var WohnungEinzug = $("#insMitAbDatum").val();
	var WohnungAuszug = $("#insMitBisDatum").val();
	var Wohnungkosten = $("#insMitkosten").val();
	if ($("#insMitBisDatum").length == 0) {
		WohnungAuszug = "30.12.9999";
	}
	// Tab3
	var ZimmerFlaeche = $("#insFlaeche").val();
	var ZimmerBeschreibung = $("#ZimmerBeschreibung").val();
	var ZimmerTyp;
        
	var foto1 = $("#insFoto1").val();
	var foto2 = $("#insFoto2").val();
	var foto3 = $("#insFoto3").val();
        
	if (document.getElementById('insZimmerTypz').checked) {
		
		ZimmerTyp = '0';
		//alert("Zimmertyp= "+parseInt(ZimmerTyp));
	} else {
		
		ZimmerTyp = '1';
		//alert("Zimmertyp= "+parseInt(ZimmerTyp));
	}
	// Tab4
	var GesuchtSex;

	if (document.getElementById('SOLLgeschlechtf').checked) {
		GesuchtSex = 'f';

	} else if (document.getElementById('SOLLgeschlechtm').checked) {
		GesuchtSex = 'm';

	} else {
		GesuchtSex = 'x';
	}

	var GesuchtMinAlter = $("#SOLLminAlter").val();
	var GesuchtMaxAlter = $("#SOLLmaxAlter").val();
	var GesuchtBeschreibung = $("#gesuchtBeschreibung").val();
	
	// Tab 5
	
	var WohnungStr = $("#insZimmerStr").val();
	var BestaetigungEmail = $("#email").val();
	var BestaetigungEmailWieder = $("#wiederemail").val();
	var hasErrorBestaetigungEmail = false;
	var hasErrorBestaetigungEmailWieder = false;
	var hasErrorBestaetigungAGB = false;

	var ErrorMessage = "Bitte überprüfen Sie folgende Angaben:\n";

	if (document.getElementById('agbsakzeptiert').checked) {
		hasErrorBestaetigungAGB = false;
	} else {
		hasErrorBestaetigungAGB = true;
		ErrorMessage = ErrorMessage + "AGB\n";
	}

	if (BestaetigungEmail.length == 0) {
		hasErrorBestaetigungEmail = true;
		ErrorMessage = ErrorMessage + "fehlende Email\n";
	} else {
		hasErrorBestaetigungEmail = false;
	}

	if (BestaetigungEmailWieder.length == 0) {
		hasErrorBestaetigungEmailWieder = true;
		ErrorMessage = ErrorMessage + "fehlende Email Wiederholung\n";
	} else {
		hasErrorBestaetigungEmailWieder = false;
	}

	if (BestaetigungEmail == BestaetigungEmailWieder) {

	} else {
		hasErrorBestaetigungEmailWieder = true;
		ErrorMessage = ErrorMessage + "falsche Email Wiederholung\n";
	}

	if (hasErrorBestaetigungEmail || hasErrorBestaetigungEmailWieder
			|| hasErrorBestaetigungAGB) {
		alert(ErrorMessage);
		return;
	}

	$.ajax({
		type : "POST",
		data : "what=inserierenTab5&insEmail=" + BestaetigungEmail+
				"&insBewohnerGeschlecht="+ BewohnerGeschlecht + "&insBewohnerAlter=" + BewohnerAlter + "&insBewohnerBeschreibung=" + BewohnerBeschreibung+
				"&insWohnungStr=" + WohnungStr+ "&insWohnungHausNr=" + WohnungHausNr + "&insWohnungZusatzNr="	+ WohnungZusatzNr + "&insWohnungOrt=" + WohnungOrt	+ "&insWohnungPlz=" + WohnungPlz + "&insWohnungAbDatum=" + WohnungEinzug + "&insWohnungBisDatum=" + WohnungAuszug + "&insWohnungkosten=" + Wohnungkosten +
				"&insZimmerTyp=" + ZimmerTyp + "&insZimmerFlaeche=" + ZimmerFlaeche + "&insZimmerBeschreibung=" + ZimmerBeschreibung+ "&$insFoto1link=" + foto1 + "&$insFoto2link=" + foto2+ "&$insFoto3link=" + foto3 +
				 "&insGesuchtSollSex=" + GesuchtSex	+ "&insGesuchtSollMinAlter=" + GesuchtMinAlter + "&insGesuchtSollMaxAlter="	+ GesuchtMaxAlter + "&insGesuchtBeschreibung="	+ GesuchtBeschreibung,

				url : "request/service.php",
		success : function(msg) {
			if (msg != 'false') {
                                
				alert("Inserat wurde erfolgreich erstellt!");
				window.location.href = "?link=home&lan=de";
			}
		}
	});

}
function InseratSpeichern() {
	
	// Tab1
	var BewohnerAlter = $("#ISTalter").val();
	var BewohnerBeschreibung = $("#bewohnerBeschreibung").val();
	var BewohnerGeschlecht;
	if (document.getElementById('ISTgeschlechtf').checked) {
		BewohnerGeschlecht = 'f';
	} else if (document.getElementById('ISTgeschlechtm').checked) {
		BewohnerGeschlecht = 'm';
	} else {
		BewohnerGeschlecht = 'x';
	}
	// Tab2
	var WohnungStr = $("#insZimmerStr").val();
	var WohnungHausNr = $("#insZimmerStrNr").val();
	var WohnungZusatzNr = $("#insZimmerZusatzNr").val();
	var WohnungOrt = $("#insZimmerOrt").val();
	var WohnungPlz = $("#insZimmerPlz").val();
	var WohnungEinzug = $("#insMitAbDatum").val();
	var WohnungAuszug = $("#insMitBisDatum").val();
	var Wohnungkosten = $("#insMitkosten").val();
	if ($("#insMitBisDatum").length == 0) {
		WohnungAuszug = "30.12.9999";
	}
	// Tab3
	var ZimmerFlaeche = $("#insFlaeche").val();
	var ZimmerBeschreibung = $("#ZimmerBeschreibung").val();
	var ZimmerTyp;
        
	var foto1 = $("#insFoto1").val();
	var foto2 = $("#insFoto2").val();
	var foto3 = $("#insFoto3").val();
        
	if (document.getElementById('insZimmerTypz').checked) {
		
		ZimmerTyp = '0';
		//alert("Zimmertyp= "+parseInt(ZimmerTyp));
	} else {
		
		ZimmerTyp = '1';
		//alert("Zimmertyp= "+parseInt(ZimmerTyp));
	}
	// Tab4
	var GesuchtSex;

	if (document.getElementById('SOLLgeschlechtf').checked) {
		GesuchtSex = 'f';

	} else if (document.getElementById('SOLLgeschlechtm').checked) {
		GesuchtSex = 'm';

	} else {
		GesuchtSex = 'x';
	}

	var GesuchtMinAlter = $("#SOLLminAlter").val();
	var GesuchtMaxAlter = $("#SOLLmaxAlter").val();
	var GesuchtBeschreibung = $("#gesuchtBeschreibung").val();
	
	// Tab 5
	
	var WohnungStr = $("#insZimmerStr").val();
	var BestaetigungEmail = $("#email").val();
	var BestaetigungEmailWieder = $("#wiederemail").val();
	var hasErrorBestaetigungEmail = false;
	var hasErrorBestaetigungEmailWieder = false;
	var hasErrorBestaetigungAGB = false;

	var ErrorMessage = "Bitte überprüfen Sie folgende Angaben:\n";

	if (document.getElementById('agbsakzeptiert').checked) {
		hasErrorBestaetigungAGB = false;
	} else {
		hasErrorBestaetigungAGB = true;
		ErrorMessage = ErrorMessage + "AGB\n";
	}

	if (BestaetigungEmail.length == 0) {
		hasErrorBestaetigungEmail = true;
		ErrorMessage = ErrorMessage + "fehlende Email\n";
	} else {
		hasErrorBestaetigungEmail = false;
	}

	if (BestaetigungEmailWieder.length == 0) {
		hasErrorBestaetigungEmailWieder = true;
		ErrorMessage = ErrorMessage + "fehlende Email Wiederholung\n";
	} else {
		hasErrorBestaetigungEmailWieder = false;
	}

	if (BestaetigungEmail == BestaetigungEmailWieder) {

	} else {
		hasErrorBestaetigungEmailWieder = true;
		ErrorMessage = ErrorMessage + "falsche Email Wiederholung\n";
	}

	if (hasErrorBestaetigungEmail || hasErrorBestaetigungEmailWieder
			|| hasErrorBestaetigungAGB) {
		alert(ErrorMessage);
		return;
	}

	$.ajax({
		type : "POST",
		data : "what=speichern&insEmail=" + BestaetigungEmail+
				"&insBewohnerGeschlecht="+ BewohnerGeschlecht + "&insBewohnerAlter=" + BewohnerAlter + "&insBewohnerBeschreibung=" + BewohnerBeschreibung+
				"&insWohnungStr=" + WohnungStr+ "&insWohnungHausNr=" + WohnungHausNr + "&insWohnungZusatzNr="	+ WohnungZusatzNr + "&insWohnungOrt=" + WohnungOrt	+ "&insWohnungPlz=" + WohnungPlz + "&insWohnungAbDatum=" + WohnungEinzug + "&insWohnungBisDatum=" + WohnungAuszug + "&insWohnungkosten=" + Wohnungkosten +
				"&insZimmerTyp=" + ZimmerTyp + "&insZimmerFlaeche=" + ZimmerFlaeche + "&insZimmerBeschreibung=" + ZimmerBeschreibung+ "&$insFoto1link=" + foto1 + "&$insFoto2link=" + foto2+ "&$insFoto3link=" + foto3 +
				 "&insGesuchtSollSex=" + GesuchtSex	+ "&insGesuchtSollMinAlter=" + GesuchtMinAlter + "&insGesuchtSollMaxAlter="	+ GesuchtMaxAlter + "&insGesuchtBeschreibung="	+ GesuchtBeschreibung,

				url : "request/service.php",
		success : function(msg) {
			if (msg != 'false') {
                                
				alert("Inserat wurde erfolgreich gespeichert!");
				window.location.href = "?link=home&lan=de";
			}
		}
	});

}
function Foto1(){
    
    var Foto1 =new FormData();
    //var Foto1 = $("#foto1form").serialize();
    Foto1.append("file", $("#insfoto1").prop("files")[0]);
    //$("#insfoto1").val()
     
    $.ajax({
		type : "POST",
		data : "what=upload&tmp_insfoto1=" + Foto1,
		url : "request/upload.php",
		success : function(msg) {
			//document.getElementById("image1").src = msg;
                        alert(msg);
		}
	});
}

function ZuruckbtTab2() {

	$("#tabs").tabs("enable", 0);
	$("#tabs").tabs("option", "active", 0);
	$("#tabs").tabs("disable", 1);

}
function ZuruckbtTab3() {

	$("#tabs").tabs("enable", 1);
	$("#tabs").tabs("option", "active", 1);
	$("#tabs").tabs("disable", 2);

}
function ZuruckbtTab4() {

	$("#tabs").tabs("enable", 2);
	$("#tabs").tabs("option", "active", 2);
	$("#tabs").tabs("disable", 3);

}
function ZuruckbtTab5() {

	$("#tabs").tabs("enable", 3);
	$("#tabs").tabs("option", "active", 3);
	$("#tabs").tabs("disable", 4);

}
function filtern() {

	var BINalter = $("#BINalter").val();
	var SUCHort = $("#SUCHort").val();
	var SUCHminFlaeche = $("#SUCHminFlaeche").val();
	var SUCHmaxFlaeche = $("#SUCHmaxFlaeche").val();
	var SUCHminMiete = $("#SUCHminMiete").val();
	var SUCHmaxMiete = $("#SUCHmaxMiete").val();
	var SUCHAbDatum = $("#SUCHAbDatum").val();
	var SUCHBisDatum = $("#SUCHBisDatum").val();
	var SUCHminAlter = $("#SUCHminAlter").val();
	var SUCHmaxAlter = $("#SUCHmaxAlter").val();

	var SUCHgeschlecht;
	var Geschlecht;
	var SUCHart;
	var hasErrorDatum = false
	var hasErrorGeschlecht = false;
	var hasErrorAlter = false;
	var hasErrorSuchalter = false;
	var ErrorMessage = "Bitte überprüfen Sie folgende Angaben:\n";

	if (SUCHminAlter > SUCHmaxAlter) {

		hasErrorSuchalter = true;
		ErrorMessage = ErrorMessage + "Falsche Altersangabe\n";
	} else {
		hasErrorSuchalter = false;
	}

	if (SUCHAbDatum > SUCHBisDatum) {
		hasErrorDatum = true;
		ErrorMessage = ErrorMessage + "Falsche Datumseingabe\n";
	} else {
		hasErrorDatum = false;
	}

	if (document.getElementById('SUCHartz').checked) {
		SUCHart = 0;
	} else {
		SUCHart = 1;
	}

	if (document.getElementById('BINgeschlechtf').checked) {
		Geschlecht = 'f';
	} else if (document.getElementById('BINgeschlechtm').checked) {
		Geschlecht = 'm';
	} else {
		hasErrorGeschlecht = true;
		ErrorMessage = ErrorMessage + "bitte dein Geschlecht angeben\n";
	}
	if (BINalter.length == 0) {
		hasErrorAlter = true;
		ErrorMessage = ErrorMessage + "bitte dein Alter angeben\n";
	}

	if (document.getElementById('SUCHgeschlechtf').checked) {
		SUCHgeschlecht = "f";
	} else if (document.getElementById('SUCHgeschlechtm').checked) {
		SUCHgeschlecht = "m";
	} else if (document.getElementById('SUCHgeschlechtx').checked) {
		SUCHgeschlecht = "x";
	} else {
		SUCHgeschlecht = "";
	}

	if (hasErrorAlter || hasErrorGeschlecht || hasErrorDatum
			|| hasErrorSuchalter) {
		alert(ErrorMessage);
		return;
	}

	/*alert("suchGeschlecht=" + Geschlecht + "\nsuchWGgeschlecht="
			+ SUCHgeschlecht + "\nsuchWGminAlter=" + SUCHminAlter
			+ "\nsuchWGmaxAlter=" + SUCHmaxAlter);*/

	$.ajax({
		type : "POST",
		data : "what=suchen&suchGeschlecht=" + Geschlecht + "&suchAlter="
				+ BINalter + "&suchWGZimmerArt=" + SUCHart + "&suchWGort="
				+ SUCHort + "&suchWGminflaeche=" + SUCHminFlaeche
				+ "&suchWGmaxflaeche=" + SUCHmaxFlaeche + "&suchWGminKost="
				+ SUCHminMiete + "&suchWGmaxKost=" + SUCHmaxMiete
				+ "&suchWGabDatum=" + SUCHAbDatum + "&suchWGbisDatum="
				+ SUCHBisDatum + "&suchWGgeschlecht=" + SUCHgeschlecht
				+ "&suchWGminAlter=" + SUCHminAlter + "&suchWGmaxAlter="
				+ SUCHmaxAlter,

		url : "request/service.php",
		success : function(msg) {
			document.getElementById("Sie").innerHTML = msg;

		}
	});
	// $.ajax({
	// type: "POST",
	// data: $('#Suchen').serialize(),
	// url: "request/service.php",
	// success: function (msg) {
	// document.getElementById("Sie").innerHTML = msg;
	//            
	// }
	// });
}
function bearbeitung(link) {
	
	$.ajax({
		type : "POST",
		data : "what=bearbeitung&bearbeitungslink="+link,

		url : "request/service.php",
		success : function(msg) {
			var obj = jQuery.parseJSON(msg);
			
			$("#ISTalter").val(obj.Durchschnittsalter);
			$("#bewohnerBeschreibung").val(obj.Bewohnerbeschreibung);
			$("#insZimmerStr").val(obj.Strasse);
			$("#insZimmerStrNr").val(obj.Hausnummer);
			$("#insZimmerZusatzNr").val(obj.Wohnungszusatz);
			$("#insZimmerOrt").val(obj.Ort);
			$("#insZimmerPlz").val(obj.PLZ);
			$("#insMitAbDatum").val(obj.AbDatum);
			$("#insMitBisDatum").val(obj.BisDatum);
			$("#insMitkosten").val(obj.Mietzins);
			$("#insFlaeche").val(obj.Quadratmeter);
			$("#ZimmerBeschreibung").val(obj.Zimmerbeschreibung);
			$("#SOLLminAlter").val(obj.Minimumalter);
			$("#SOLLmaxAlter").val(obj.Maximumalter);
			$("#gesuchtBeschreibung").val(obj.Personenbeschreibung);
//			$("#insFoto1").val(obj.ImageID1);
//			$("#insFoto2").val(obj.ImageID2);
//			$("#insFoto3").val(obj.ImageID3);
			$("#email").val(obj.Email);
			$("#wiederemail").val(obj.Email);
		
			
			if (obj.IstGeschlecht ="f") {
				document.getElementById('ISTgeschlechtf').checked=true;		
			} else if (obj.IstGeschlecht == 'm') {
				document.getElementById('ISTgeschlechtm').checked=true;	
			} else {
				document.getElementById('ISTgeschlechtx').checked=true;
			}
			
			if (obj.Studio = 0) {
				document.getElementById('insZimmerTypz').checked=true;
				
			} else {	
				document.getElementById('insZimmerTyps').checked=true;
			}

			
			if (obj.SollGeschlecht = 'f') {
				document.getElementById('SOLLgeschlechtf').checked=true;
				

			} else if (obj.SollGeschlecht = 'm') {
				document.getElementById('SOLLgeschlechtm').checked=true;
				

			} else {
				document.getElementById('SOLLgeschlechtx').checked=true;
				
			}

		}
	});
	
}
