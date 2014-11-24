/**
 * 
 */

function InserierenTab1() {

	var BewohnerGeschlecht = $("#ISTgeschlecht").val();
	var BewohnerAlter = $("#ISTalter").val();
	var BewohnerBeschreibung = $("#bewohnerBeschreibung").val();

	var hasErrorBewohnerAlter = false;
	var hasErrorBewohnerBeschreibung = false;
        var ErrorMessage = "Bitte überprüfen Sie folgende Angaben:\n";

	if (BewohnerAlter.length == 0) {
		// $("#errorTel").html("*");
		hasErrorBewohnerAlter = true;
                ErrorMessage = ErrorMessage + "ungültige Altersangabe\n";
	} else {
		if (isNaN(BewohnerAlter)) {
			hasErrorBewohnerAlter = true;
                        ErrorMessage = ErrorMessage + "ungültige Altersangabe\n";
		} else {
			// $("#errorTel").html("");
			hasErrorBewohnerAlter = false;
		}
	}
	if (BewohnerBeschreibung.length == 0) {

		// $("#errorTitel").html("*");
		hasErrorBewohnerBeschreibung = true;
                ErrorMessage = ErrorMessage + "fehlende Bewohnerbeschreibung\n";
	} else {
		// $("#errorTitel").html("");
		hasErrorBewohnerBeschreibung = false;
	}

	if (hasErrorBewohnerAlter || hasErrorBewohnerBeschreibung) {
		alert(ErrorMessage);
		return;
	}

	$.ajax({

		type : "GET",
		data : "what=inserierenTab1&&insBewohnerGeschlecht="
				+ BewohnerGeschlecht + "&insBewohnerAlter=" + BewohnerAlter
				+ "&iinsBewohnerBeschreibung=" + BewohnerBeschreibung,

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

function InserierenTab2() {

	var WohnungStr = $("#insZimmerStr").val();
	var WohnungHausNr = $("#insZimmerStrNr").val();
	var WohnungZusatzNr = $("#insZimmerZusatzNr").val();
	var WohnungOrt = $("#insZimmerOrt").val();
	var WohnungPlz = $("#insZimmerPlz").val();
	var WohnungEinZug = $("#insMitAbDatum").val();
	var WohnungAusZug = $("#insMitBisDatum").val();
	var Wohnungkosten = $("#insMitkosten").val();

	var hasErrorWohnungStr = false;
	var hasErrorWohnungHausNr = false;
	var hasErrorWohnungOrt = false;
	var hasErrorWohnungPlz = false;
	var hasErrorWohnungkosten = false;

	if (WohnungStr.length == 0) {
		hasErrorWohnungStr = true;
	} else {
		hasErrorWohnungStr = false;
	}

	if (WohnungHausNr.length == 0) {
		hasErrorWohnungStr = true;
	} else {
		if (isNaN(WohnungHausNr)) {
			hasErrorWohnungStr = true;
		} else {
			hasErrorWohnungStr = false;
		}
	}

	if (WohnungOrt.length == 0) {
		hasErrorWohnungOrt = true;
	} else {
		hasErrorWohnungOrt = false;
	}

	if (WohnungPlz.length == 0) {
		hasErrorWohnungPlz = true;
	} else {
		if (isNaN(WohnungPlz)) {
			hasErrorWohnungPlz = true;
		} else {
			hasErrorWohnungPlz = false;
		}
	}

	if (WohnungPlz.length == 0) {
		hasErrorWohnungPlz = true;
	} else {
		if (isNaN(WohnungPlz)) {
			hasErrorWohnungPlz = true;
		} else {
			hasErrorWohnungPlz = false;
		}
	}
	if (Wohnungkosten.length == 0) {
		hasErrorWohnungkosten = true;
	} else {
		if (isNaN(Wohnungkosten)) {
			hasErrorWohnungkosten = true;
		} else {
			hasErrorWohnungkosten = false;
		}
	}

	if (hasErrorWohnungStr || hasErrorWohnungHausNr || hasErrorWohnungOrt
			|| hasErrorWohnungPlz || hasErrorWohnungkosten) {
		alert("Kontolieren Sie bitte eingegebene Daten!");
		return;
	}

	$.ajax({
		type : "GET",
		data : "what=inserierenTab2&" + "insZimmerStr=" + WohnungStr
				+ "&insZimmerStrNr=" + WohnungHausNr + "&insZimmerZusatzNr="
				+ WohnungZusatzNr + "&insZimmerOrt=" + WohnungOrt
				+ "&insZimmerPlz=" + WohnungPlz + "&insMitAbDatum="
				+ WohnungEinZug + "&insMitBisDatum=" + WohnungAusZug
				+ "&insMitkosten=" + Wohnungkosten,

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

function InserierenTab3() {

	var ZimmerTyp = $("#insZimmerTyp").val();
	var ZimmerFlaeche = $("#insFlaeche").val();
	var ZimmerBeschreibung = $("#insZimmerBeschreibung").val();

	var hasErrorZimmerFlaeche = false;
	var hasErrorZimmerBeschreibung = false;

	if (ZimmerFlaeche.length == 0) {
		hasErrorZimmerFlaeche = true;
	} else {
		if (isNaN(ZimmerFlaeche)) {
			hasErrorZimmerFlaeche = true;
		} else {
			hasErrorZimmerFlaeche = false;
		}
	}

	if (ZimmerBeschreibung.length == 0) {
		hasErrorZimmerBeschreibung = true;
	} else {
		hasErrorZimmerBeschreibung = false;
	}
	
	if (hasErrorZimmerBeschreibung || hasErrorZimmerFlaeche) {
		alert("Kontolieren Sie bitte eingegebene Daten!");
		return;
	}

	$.ajax({
		type : "GET",
		data : "what=inserierenTab3&" + "insZimmerTyp=" + ZimmerTyp
				+ "&insFlaeche=" + ZimmerFlaeche + "&insZimmerBeschreibung="
				+ ZimmerBeschreibung ,

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
function InserierenTab4() {

	var GesuchtSex = $("#SOLLgeschlecht").val();
	var GesuchtMinAlter = $("#SOLLminAlter").val();
	var GesuchtMaxAlter = $("#SOLLmaxAlter").val();
	var GesuchtBeschreibung = $("#gesuchtBeschreibung").val();

	var hasErrorGesuchtMinAlter = false;
	var hasErrorGesuchtMaxAlter = false;
	var hasErrorGesuchtBeschreibung = false;
	
	if (GesuchtMinAlter.length == 0) {
		hasErrorGesuchtMinAlter = true;
	} else {
		if (isNaN(GesuchtMinAlter)) {
			hasErrorGesuchtMinAlter = true;
		} else {
			hasErrorGesuchtMinAlter = false;
		}
	}
	if (GesuchtMaxAlter.length == 0) {
		hasErrorGesuchtMaxAlter = true;
	} else {
		if (isNaN(GesuchtMaxAlter)) {
			hasErrorGesuchtMaxAlter = true;
		} else {
			hasErrorGesuchtMaxAlter = false;
		}
	}
	
	if (GesuchtBeschreibung.length == 0) {
		hasErrorGesuchtBeschreibung = true;
	} else {

		hasErrorGesuchtBeschreibung = false;
		
	}
	
	if (hasErrorGesuchtMinAlter || hasErrorGesuchtMaxAlter||hasErrorGesuchtBeschreibung) {
		alert("Kontolieren Sie bitte eingegebene Daten!");
		return;
	}

	var GesuchtSex = $("#SOLLgeschlecht").val();
	var GesuchtMinAlter = $("#SOLLminAlter").val();
	var GesuchtMaxAlter = $("#SOLLmaxAlter").val();
	var GesuchtBeschreibung = $("#gesuchtBeschreibung").val();

	
	$.ajax({
		type : "GET",
		data : "what=inserierenTab4&" + "SOLLgeschlecht=" + GesuchtSex
				+ "&SOLLminAlter=" + GesuchtMinAlter + "&SOLLmaxAlter="
				+ GesuchtMaxAlter + "&gesuchtBeschreibung="
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
function InserierenTab5() {

	
	var BestaetigungEmail = $("#email").val();
	var BestaetigungEmailWieder = $("#wiederemail").val();
	var BestaetigungAGB = $("#agbsakzeptiert").val();

	var hasErrorBestaetigungEmail = false;
	var hasErrorBestaetigungEmailWieder = false;
	var hasErrorBestaetigungAGB = false;
	
	
	if (BestaetigungEmail.length==0){
		hasErrorBestaetigungEmail=true;
	}else{
		hasErrorBestaetigungEmail=false;
	}
	
	if (BestaetigungEmailWieder.length==0){
		hasErrorBestaetigungEmailWieder=true;
	}else{
		hasErrorBestaetigungEmailWieder=false;
	}
	alert(BestaetigungAGB);

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
function Suchen() {

	var Ort = $("#suchOrt").val();
	var Plz = $("#suchPlz").val();
	var Strasse = $("#suchStr").val();
	var PreisVon = $("#suchPreisvon").val();
	var PreisBis = $("#suchPreisbis").val();
	var FlaecheVon = $("#suchflaechevon").val();
	var FlaecheBis = $("#suchflaechebis").val();
	var FreiAb = $("#suchFreiDatum").val();

	$.ajax({
		type : "GET",
		data : "what=suchen&suchOrt=" + Ort + "&suchPlz=" + Plz + "&suchStr="
				+ Strasse + "&suchPreisvon=" + PreisVon + "&suchPreisbis="
				+ PreisBis + "&suchflaechevon=" + FlaecheVon
				+ "&suchflaechebis=" + FlaecheBis + "&suchFreiDatum=" + FreiAb,

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

function adminLogin() {

	// var adminName = $("#adminName").val();
	// var passwort = $("#passwort").val();
	//	
	// $.ajax({
	// type : "GET",
	// data : "what=admin&adminName=" + adminName + "&passwort=" + passwort,
	// url : "request/service.php",
	// success : function(msg) {
	// if (msg != 'false') {
	//			
	// // Burada eger girilen admin bilgileri dogru ise admin sayfasini
	// cagircaz.
	//				
	// } else {
	// alert(unescape("%DCberprufen Sie bitt Ihre Angaben!"));
	// }
	// }
	// });

}
function UserLogin() {

}
