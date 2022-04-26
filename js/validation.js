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

function submitSetEnable() {

    var btn = document.getElementById("createWorkerBtn");
    if ((document.getElementById("szervEgysID").value != 0 &&
        document.getElementById("munkakorID").value != 0) && 
        (document.getElementById("vezetekNev").value != null || 
        document.getElementById("vezetekNev").value != "" )&&
        (document.getElementById("keresztNev").value != null || 
        document.getElementById("keresztNev").value != "" )&&
        (document.getElementById("bruttoBer").value != null || 
        document.getElementById("bruttoBer").value != "" )&&
        (document.getElementById("adoazonosito").value != null || 
        document.getElementById("adoazonosito").value != "" )&&
        (document.getElementById("TAJ").value != null || 
        document.getElementById("TAJ").value != "" )&&
        (document.getElementById("bankszamlaszam").value != null || 
        document.getElementById("bankszamlaszam").value != "" )) {
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

function deleteOnclick (id){
    var result = '<?php delete_dolgozo('+id+',$conn) ?>';
    document.write(result);
}
