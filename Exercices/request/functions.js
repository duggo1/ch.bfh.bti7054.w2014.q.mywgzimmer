function InserierenTab1Kontrolle() {

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
    } else {
$.ajax({
        type: "POST",
        data: "what=inserierenTab2&" + "insZimmerStr=" + WohnungStr
                + "&insZimmerStrNr=" + WohnungHausNr + "&insZimmerZusatzNr="
                + WohnungZusatzNr + "&insZimmerOrt=" + WohnungOrt
                + "&insZimmerPlz=" + WohnungPlz + "&insMitAbDatum="
                + WohnungEinZug + "&insMitBisDatum=" + WohnungAusZug
                + "&insMitkosten=" + Wohnungkosten,
        url: "request/service.php",
        success: function (msg) {
            if (msg != 'false') {
                $("#tabs").tabs("enable", 1);
                $("#tabs").tabs("option", "active", 1);
                $("#tabs").tabs("disable", 0);
            }
        }
    });
    }
}

function InserierenTab2Kontrolle() {

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

        } else {
            hasErrorWohnungkosten = false;
        }
    }

    if (hasErrorWohnungStr || hasErrorWohnungHausNr || hasErrorWohnungOrt
            || hasErrorWohnungPlz || hasErrorWohnungkosten) {
        alert(ErrorMessage);
        return;
    }

    $.ajax({
        type: "POST",
        data: "what=inserierenTab2&" + "insZimmerStr=" + WohnungStr
                + "&insZimmerStrNr=" + WohnungHausNr + "&insZimmerZusatzNr="
                + WohnungZusatzNr + "&insZimmerOrt=" + WohnungOrt
                + "&insZimmerPlz=" + WohnungPlz + "&insMitAbDatum="
                + WohnungEinZug + "&insMitBisDatum=" + WohnungAusZug
                + "&insMitkosten=" + Wohnungkosten,
        url: "request/service.php",
        success: function (msg) {
            if (msg != 'false') {
                $("#tabs").tabs("enable", 2);
                $("#tabs").tabs("option", "active", 2);
                $("#tabs").tabs("disable", 1);
            }
        }
    });

}

function InserierenTab3Kontrolle() {

    var ZimmerTyp = $("#insZimmerTyp").val();

    if (document.getElementById('insZimmerTypz').checked) {
        ZimmerTyp = document.getElementById('insZimmerTypz').value;

    } else if (document.getElementById('insZimmerTyps').checked) {
        ZimmerTyp = document.getElementById('insZimmerTyps').value;
    }
    alert(ZimmerTyp);

    var ZimmerFlaeche = $("#insFlaeche").val();
    var ZimmerBeschreibung = $("#insZimmerBeschreibung").val();

    var hasErrorZimmerFlaeche = false;
    var hasErrorZimmerBeschreibung = false;

    var ErrorMessage = "Bitte überprüfen Sie folgende Angaben:\n";

    if (ZimmerFlaeche.length == 0) {
        hasErrorZimmerFlaeche = true;
        ErrorMessage = ErrorMessage + "fehlende Zimmergrössen\n";

    } else {
        if (isNaN(ZimmerFlaeche)) {
            hasErrorZimmerFlaeche = true;
            ErrorMessage = ErrorMessage + "ungültiger Zimmergrössen\n";
        } else if (ZimmerFlaeche < (document.getElementById('insFlaeche').min)) {
            alert(ZimmerFlaeche + "kücük" + document.getElementById('insFlaeche').min);

            hasErrorZimmerFlaeche = true;
            ErrorMessage = ErrorMessage + "ungültiger Zimmergrössen\n";
        } else if (ZimmerFlaeche > document.getElementById('insFlaeche').max) {

            alert(ZimmerFlaeche + "büyük" + document.getElementById('insFlaeche').max);
            hasErrorZimmerFlaeche = true;
            ErrorMessage = ErrorMessage + "ungültiger Zimmergrössen\n";

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
        type: "GET",
        data: "what=inserierenTab3&" + "insZimmerTyp=" + ZimmerTyp
                + "&insFlaeche=" + ZimmerFlaeche + "&insZimmerBeschreibung="
                + ZimmerBeschreibung,
        url: "request/service.php",
        success: function (msg) {
            if (msg != 'false') {
                $("#tabs").tabs("enable", 3);
                $("#tabs").tabs("option", "active", 3);
                $("#tabs").tabs("disable", 2);
            }
        }
    });

}
function InserierenTab4Kontrolle() {

    var GesuchtSex = $("#SOLLgeschlecht").val();

    if (document.getElementById('SOLLgeschlechtf').checked) {
        GesuchtSex = document.getElementById('SOLLgeschlechtf').value;

    } else if (document.getElementById('SOLLgeschlechtm').checked) {
        GesuchtSex = document.getElementById('SOLLgeschlechtm').value;

    } else if (document.getElementById('SOLLgeschlechtx').checked) {
        GesuchtSex = document.getElementById('SOLLgeschlechtx').value;
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
        } else if (GesuchtMinAlter < document.getElementById('SOLLminAlter').min) {
            hasErrorGesuchtMinAlter = true;
            ErrorMessage = ErrorMessage + "ungültiger Mindestalter\n";
        } else if (GesuchtMinAlter > document.getElementById('SOLLminAlter').max) {
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

        } else if (GesuchtMaxAlter < document.getElementById('SOLLmaxAlter').min) {
            hasErrorGesuchtMaxAlter = true;
            ErrorMessage = ErrorMessage + "ungültiger Höchstalter\n";
        } else if (GesuchtMaxAlter > document.getElementById('SOLLmaxAlter').max) {
            hasErrorGesuchtMaxAlter = true;
            ErrorMessage = ErrorMessage + "ungültiger Höchstalter\n";


        } else {
            hasErrorGesuchtMaxAlter = false;
        }
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
        type: "GET",
        data: "what=inserierenTab4&" + "SOLLgeschlecht=" + GesuchtSex
                + "&SOLLminAlter=" + GesuchtMinAlter + "&SOLLmaxAlter="
                + GesuchtMaxAlter + "&gesuchtBeschreibung="
                + GesuchtBeschreibung,
        url: "request/service.php",
        success: function (msg) {
            if (msg != 'false') {

                $("#tabs").tabs("enable", 4);
                $("#tabs").tabs("option", "active", 4);
                $("#tabs").tabs("disable", 3);
            }
        }
    });

}
function InserierenTab5Kontrolle() {
    alert("Hallo");
    var BestaetigungEmail = $("#email").val();
    var BestaetigungEmailWieder = $("#wiederemail").val();
    var BestaetigungAGB = $("#agbsakzeptiert").val();

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

    alert("Hallo");
    if (hasErrorBestaetigungEmail || hasErrorBestaetigungEmailWieder
            || hasErrorBestaetigungAGB) {
        alert(ErrorMessage);
        return;
    }

    alert("Hallo");

    $.ajax({
        type: "GET",
        data: "what=inserierenTab5&" + "email=" + BestaetigungEmail
                + "&wiederemail=" + BestaetigungEmailWieder,
        url: "request/service.php",
        success: function (msg) {
            if (msg != 'false') {

                alert("Inserat wurde erfolgreich gespeichert!");
            }
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
        type: "GET",
        data: "what=suchen&suchOrt=" + Ort + "&suchPlz=" + Plz + "&suchStr="
                + Strasse + "&suchPreisvon=" + PreisVon + "&suchPreisbis="
                + PreisBis + "&suchflaechevon=" + FlaecheVon
                + "&suchflaechebis=" + FlaecheBis + "&suchFreiDatum=" + FreiAb,
        url: "request/service.php",
        success: function (msg) {
            if (msg != 'false') {
                $("#tabs").tabs("enable", 2);
                $("#tabs").tabs("option", "active", 2);
                $("#tabs").tabs("disable", 1);
            }
        }
    });

}

