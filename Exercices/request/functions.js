/**
 * 
 */

function InserierenTab1() {

	var hasErrorVorname = false;
	var hasErrorNachname = false;
	var hasErrorStrasse = false;
	var hasErrorStrasseNr = false;
	var hasErrorOrt = false;
	var hasErrorPlz = false;
	var hasErrorEmail = false;
	var hasErrorEmailWierder = false;
	var hasErrorTel = false;

	var AnredeHerr = $("#radioHerr").val();
	var Anrede = $("#radioFrau").val();
	var Anrede // weclhe wurde geklickt?

	var Vorname = $("#insvorname").val();

	if (Vorname.length == 0) {
		//$("#Vorname").html("*");
		hasErrorVorname = true;
	} else {
		//$("#Vorname").html("");
		hasErrorVorname = false;
	}

	var Nachname = $("#insnachname").val();
	if (Nachname.length == 0) {
		//$("#errorNachname").html("*");
		hasErrorNachname = true;
	} else {
		//$("#errorlNachname").html("");
		hasErrorNachname = false;
	}

	var Strasse = $("#inspersonstrasse").val();
	if (Strasse.length == 0) {
		//$("#errorStrasse").html("*");
		hasErrorStrasse = true;
	} else {
		//$("#errorStrasse").html("");
		hasErrorStrasse = false;
	}

	var StrasseNr = $("#inspersonstrasseNr").val();
	if (StrasseNr.length == 0) {
		//$("#errorStrasseNr").html("*");
		hasErrorStrasseNr = true;
	} else {
		//$("#errorStrasseNr").html("");
		hasErrorStrasseNr = false;
	}

	var Ort = $("#inspersonort").val();
	if (Ort.length == 0) {
		//$("#errorOrt").html("*");
		hasErrorOrt = true;
	} else {
		//$("#errorOrt").html("");
		hasErrorOrt = false;
	}

	var Plz = $("#inspersonaplz").val();
	if (Plz.length == 0) {
		//$("#errorPlz").html("*");
		hasErrorPlz = true;
	}else {
		if ( isNaN(Plz)){
			hasErrorPlz = true;
		}else{
			
			hasErrorPlz = false;
		}
		
	}

	var Email = $("#email").val();// hier müssen wir prüfen ob erste Email mit
								  // 2. Email gleich ist.
	if (Email.length == 0) {
		//$("#errorEmail").html("*");
		hasErrorEmail = true;
	} else {
		//$("#errorEmail").html("");
		hasErrorEmail = false;
	}

	var EmailWierder = $("#wiederemail").val();
	
	
	if (EmailWierder.length == 0) {
		//$("#errorEmailWierder").html("*");
		hasErrorEmailWierder = true;
	} else {
		if (EmailWierder == Email) {
			//$("#errorEmailWierder").html("");
			hasErrorEmailWierder = false;
		} else {
			//$("#errorEmailWierder").html("*");
			hasErrorEmailWierder = true;
		}

	}

	var Tel =$("#telefonnr").val();
	if (Tel.length == 0) {
		//$("#errorTel").html("*");
		hasErrorTel = true;
	} else {
		if ( isNaN(Tel)){
			hasErrorTel = true;
		}else{
			//$("#errorTel").html("");
		hasErrorTel = false;
		}
		
	}

	if (hasErrorVorname || hasErrorNachname ||hasErrorStrasse ||hasErrorStrasseNr || hasErrorOrt ||hasErrorPlz || hasErrorEmail || hasErrorEmailWierder || hasErrorTel){
		alert ("Kontolieren Sie bitte eingegebene Daten!");
		return;
	}
	
	$.ajax({

		type : "GET",
		data : "what=inserierenTab1&insAnrede=" + Anrede + "&insVorname="
				+ Vorname + "&insNachname=" + Nachname + "&insStrasse="
				+ Strasse + "&insStrNr=" + StrasseNr + "&insOrt=" + Ort
				+ "&insPLZ=" + Plz + "&email=" + Email + "&tel=" + Tel,

		url : "request/service.php",
		success : function(msg) {
			if (msg != 'false') {
				
				$("#tabs").tabs("enable", 1);
				$("#tabs").tabs("option", "active", 1);
				$("#tabs").tabs("disable", 0);
									
				$("#insZimmerStr").val(Strasse);
				$("#insZimmerStrNr").val(StrasseNr);
				$("#insZimmerOrt").val(Ort);
				$("#insZimmerPlz").val(Plz);
				
			}
		}
	});

}

function InserierenTab2() {

	var hasErrorTitel = false;
	var hasErrorZimmerFlaeche = false;
	var hasErrorZimmerBeschreibung = false;

	
	var Titel = $("#insTitel").val();
	if (Titel.length == 0) {
	
		//$("#errorTitel").html("*");
		hasErrorTitel = true;
	} else {
		//$("#errorTitel").html("");
		hasErrorTitel = false;
	}

		
	var ZimmerStr= $("#insZimmerStr").val();
	var ZimmerStrNr= $("#insZimmerStrNr").val();	
	var ZimmerOrt= $("#insZimmerOrt").val();	
	var ZimmerPlz= $("#insZimmerPlz").val();
	
	if (ZimmerStr.length==0){		
		ZimmerStr= $("#inspersonstrasse").val();
	}
	if (ZimmerStrNr.length==0){		
		ZimmerStrNr= $("#inspersonstrasseNr").val();
	}
	if (ZimmerOrt.length==0){		
		ZimmerOrt= $("#inspersonort").val();	
	}
	if (ZimmerPlz.length==0){	
		ZimmerPlz = $("#inspersonaplz").val();	
	}
		
	var ZimmerBeschreibung = $("#Zimmerbeschreibung").val();
	if (ZimmerBeschreibung.length == 0) {
		
		//$("#errorTitel").html("*");
		hasErrorZimmerBeschreibung = true;
	} else {
		//$("#errorTitel").html("");
		hasErrorZimmerBeschreibung = false;
	}

	
	var ZimmerArt = $("#insZimmerart").val();
	
	var ZimmerFlaeche = $("#insFlaeche").val();
	if (ZimmerFlaeche.length == 0) {
		//$("#errorTel").html("*");
		hasErrorZimmerFlaeche = true;
	} else {
		if ( isNaN(ZimmerFlaeche)){
			hasErrorZimmerFlaeche = true;
		}else{
			//$("#errorTel").html("");
			hasErrorZimmerFlaeche = false;
		}
		
	}

	var nurStudent = $("#insnurStdLhr").val();
	var ZimmerGeschlecht = $("#insZimmerSex").val();
	
	if (hasErrorTitel || hasErrorZimmerFlaeche || hasErrorZimmerBeschreibung){
		alert ("Kontolieren Sie bitte eingegebene Daten!");
		return;
	}
		
	
	$.ajax({
		type : "GET",
		data : "what=inserierenTab2&insTitel=" + Titel 
				+ "&insZimmerStr=" + ZimmerStr 
				+ "&insZimmerStrNr=" + ZimmerStrNr 
				+ "&insZimmerOrt=" + ZimmerOrt 
				+ "&insZimmerPlz=" + ZimmerPlz 
				+ "&insZimmerBeschreibung=" + ZimmerBeschreibung 
				+ "&insZimmerart=" + ZimmerArt 
				+ "&insFlaeche=" + ZimmerFlaeche 
				+ "&insnurStdLhr=" + nurStudent
				+ "&insZimmerSex=" + ZimmerGeschlecht,

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

	$("#tabs").tabs("enable", 3);
	$("#tabs").tabs("option", "active", 3);
	$("#tabs").tabs("disable", 2);
	
}
function InserierenTab4() {

	$("#tabs").tabs("enable", 4);
	$("#tabs").tabs("option", "active", 4);
	$("#tabs").tabs("disable", 3);
	
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

	var Ort =  $("#suchOrt").val();
	var Plz=  $("#suchPlz").val();
	var Strasse=  $("#suchStr").val();
	var PreisVon=  $("#suchPreisvon").val();
	var PreisBis=  $("#suchPreisbis").val();
	var FlaecheVon=  $("#suchflaechevon").val();
	var FlaecheBis=  $("#suchflaechebis").val();
	var FreiAb=  $("#suchFreiDatum").val();
	
	
	$.ajax({
		type : "GET",
		data : "what=suchen&suchOrt=" + Ort 
				+ "&suchPlz=" + Plz 
				+ "&suchStr=" + Strasse 
				+ "&suchPreisvon=" + PreisVon 
				+ "&suchPreisbis=" + PreisBis 
				+ "&suchflaechevon=" + FlaecheVon 
				+ "&suchflaechebis=" + FlaecheBis 
				+ "&suchFreiDatum=" + FreiAb,

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

//	var adminName = $("#adminName").val();
//	var passwort = $("#passwort").val();
//	
//	$.ajax({
//		type : "GET",
//		data : "what=admin&adminName=" + adminName + "&passwort=" + passwort,
//		url : "request/service.php",
//		success : function(msg) {
//			if (msg != 'false') {
//			
//				// Burada eger girilen admin bilgileri dogru ise admin sayfasini cagircaz.
//				
//			} else {
//				alert(unescape("%DCberprufen Sie bitt Ihre Angaben!"));
//			}
//		}
//	});
	
}
function UserLogin(){
	
	
	
}
