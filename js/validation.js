//https://stackoverflow.com/questions/995183/how-to-allow-only-numeric-0-9-in-html-inputbox-using-jquery

(function ($) {
    $.fn.inputFilter = function (callback, errMsg) {
        return this.on("input keydown keyup mousedown mouseup select contextmenu drop focusout", function (e) {
            if (callback(this.value)) {
                // Accepted value
                if (["keydown", "mousedown", "focusout"].indexOf(e.type) >= 0) {
                    $(this).removeClass("input-error");
                    this.setCustomValidity("");
                }
                this.oldValue = this.value;
                this.oldSelectionStart = this.selectionStart;
                this.oldSelectionEnd = this.selectionEnd;
            } else if (this.hasOwnProperty("oldValue")) {
                // Rejected value - restore the previous one
                $(this).addClass("input-error");
                this.setCustomValidity(errMsg);
                this.reportValidity();
                this.value = this.oldValue;
                this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
            } else {
                // Rejected value - nothing to restore
                this.value = "";
            }
        });
    };
}(jQuery));


function adoCDV() {
    var ado = document.getElementById("adoazonosito").value;

    var tmp;
    var szorzo = 1;
    var e = 0;
    for (let i = 0; i < ado.length - 1; i++) {
        e += (ado[i] * szorzo);
        szorzo++;

    }
    var maradek = e % 11;
    if (maradek == 10) {
        return false;
    } else
        if (ado[0] != "8") {
            return false;
        } else
            if (maradek == ado[ado.length - 1]) {
                return true;
            }

}


function tajCDV() {
    var taj = document.getElementById("TAJ").value;
    var sum = 0;
    var count = 1;
    for (let i = 0; i < taj.length - 1; i++) {
        const element = taj[i];
        if (count % 2 == 0) {
            sum += taj[i] * 7;
        } else {
            sum += taj[i] * 3;
        }
        count++;
    }
    if (taj[taj.length - 1] == sum % 10) {
        return true
    } else {
        return false;
    }

}

function submitSetEnable() {

    var btn = document.getElementById("createWorkerBtn");
    console.log("huhu");

    if (
        document.getElementById("vezetekNev").value != "" &&
        document.getElementById("keresztNev").value != "" &&
        document.getElementById("munkakorID").value != 0 &&
        document.getElementById("szervEgysID").value != 0 &&
        document.getElementById("bruttoBer").value != "" &&
        document.getElementById("adoazonosito").value != "" &&
        adoCDV() &&
        document.getElementById("TAJ").value != "" &&
        tajCDV() &&
        document.getElementById("bankszamlaszam").value != "") {
        btn.disabled = false;

        console.log("set disabled false");

    } else {
        btn.disabled = true;
        console.log("set disabled true");
    }
}

$("#bruttoBer").inputFilter(function (value) {
    return /^-?\d*$/.test(value);
}, "Számot lehet csak megadni");
$("#adoazonosito").inputFilter(function (value) {
    return /^-?\d*$/.test(value);
}, "Számot lehet csak megadni");
$("#TAJ").inputFilter(function (value) {
    return /^-?\d*$/.test(value);
}, "Számot lehet csak megadni");
$("#bankszamlaszam").inputFilter(function (value) {
    return /^-?\d*$/.test(value);
}, "Számot lehet csak megadni");
//--------------

//--------------

function deleteOnclick(id) {
    var result = '<?php delete_dolgozo(' + id + ',$conn) ?>';
    document.write(result);
}
