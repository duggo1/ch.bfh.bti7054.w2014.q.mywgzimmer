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
    } else {
        $.ajax({
            type: "POST",
            data: "BewohnerGeschlecht",
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
        type: "POST",
        data: "tostring(WohnungEinzug), tostring(WohnungAuszug)",
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

    var ZimmerFlaeche = $("#insFlaeche").val();
    var ZimmerBeschreibung = $("#insZimmerBeschreibung").val();
    var ZimmerTyp;

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
        } else if (ZimmerFlaeche < (document.getElementById('insFlaeche').min)) {
            hasErrorZimmerFlaeche = true;
            ErrorMessage = ErrorMessage + "ungültige Flächenangabe\n";
        } else if (ZimmerFlaeche > document.getElementById('insFlaeche').max) {
            hasErrorZimmerFlaeche = true;
            ErrorMessage = ErrorMessage + "ungültige Flächenangabe\n";
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
        data: insZimmerTyp,
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
        type: "POST",
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
function filtern() {

    var BINalter = $("#BINalter").val();

    var SUCHart = $("#SUCHart").val();
    var SUCHort = $("#SUCHort").val();
    var SUCHminFlaeche = $("#SUCHminFlaeche").val();
    var SUCHmaxFlaeche = $("#SUCHmaxFlaeche").val();
    var SUCHminMiete = $("#SUCHminMiete").val();
    var SUCHmaxMiete = $("#SUCHmaxMiete").val();
    var SUCHAbDatum = $("#SUCHAbDatum").val();
    var SUCHBisDatum = $("#SUCHBisDatum").val();
    var SUCHgeschlecht = $("#SUCHgeschlecht").val();
    var SUCHminAlter = $("#SUCHminAlter").val();
    var SUCHmaxAlter = $("#SUCHmaxAlter").val();

    var Geschlecht;

    var hasErrorGeschlecht = false;
    var hasErrorAlter = false;
    var ErrorMessage = "Bitte überprüfen Sie folgende Angaben:\n";

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
    if (hasErrorAlter || hasErrorGeschlecht) {
        alert(ErrorMessage);
        return;
    }



    /*$.ajax({
        type:   "POST",
        data:   "what=suchen&" + "suchGeschlecht=" + Geschlecht +
                "&suchAlter=" + BINalter +
                "&suchWGZimmerArt=" + SUCHart +
                "&suchWGort=" + SUCHort +
                "&suchWGminflaeche=" + SUCHminFlaeche +
                "&suchWGmaxflaeche=" + SUCHmaxFlaeche +
                "&suchWGminKost=" + SUCHminMiete +
                "&suchWGmaxKost=" + SUCHmaxMiete +
                "&suchWGabDatum=" + SUCHAbDatum +
                "&suchWGbisDatum=" + SUCHBisDatum +
                "&suchWGgeschlecht=" + SUCHgeschlecht +
                "&suchWGminAlter=" + SUCHminAlter +
                "&suchWGmaxAlter=" + SUCHmaxAlter,
        url:    "request/service.php",
        success: function (msg) {
            document.getElementById("Sie").innerHTML = msg;
        }
    });*/
    $.ajax({
        type:   "POST",
        data:   {what: "suchen",
                geschlecht: Geschlecht,
                alter: BINalter},
        url:    "request/service.php",
        success: function (msg) {
            document.getElementById("Sie").innerHTML = msg;
        }
    });
}


