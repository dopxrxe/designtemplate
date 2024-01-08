// Jquery Dependency

$("input[data-type='currency']").on({
    keyup: function () {
        formatCurrency($(this));
    },
    blur: function () {
        formatCurrency($(this), "blur");
    }
});


function formatNumber(n) {
    // format number 1000000 to 1,234,567
    return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
}


function formatCurrency(input, blur) {
    // appends $ to value, validates decimal side
    // and puts cursor back in right position.

    // get input value
    var input_val = input.val();

    // don't validate empty input
    if (input_val === "") { return; }

    // original length
    var original_len = input_val.length;

    // initial caret position 
    var caret_pos = input.prop("selectionStart");

    // check for decimal
    if (input_val.indexOf(".") >= 0) {

        // get position of first decimal
        // this prevents multiple decimals from
        // being entered
        var decimal_pos = input_val.indexOf(".");

        // split number by decimal point
        var left_side = input_val.substring(0, decimal_pos);
        var right_side = input_val.substring(decimal_pos);

        // add commas to left side of number
        left_side = formatNumber(left_side);

        // validate right side
        right_side = formatNumber(right_side);

        // On blur make sure 2 numbers after decimal
        if (blur === "blur") {
            right_side += "00";
        }

        // Limit decimal to only 2 digits
        right_side = right_side.substring(0, 2);

        // join number by .
        input_val = "Rp " + left_side + "." + right_side;

    } else {
        // no decimal entered
        // add commas to number
        // remove all non-digits
        input_val = formatNumber(input_val);
        input_val = "Rp " + input_val;

        // final formatting
        if (blur === "blur") {
            input_val += ".00";
        }
    }

    // send updated string to input
    input.val(input_val);

    // put caret back in the right position
    var updated_len = input_val.length;
    caret_pos = updated_len - original_len + caret_pos;
    input[0].setSelectionRange(caret_pos, caret_pos);
}

// var clipboard = new ClipboardJS('.btn-copy');

var clipboard = new ClipboardJS('.btn-copy', {
    text: function (trigger) {
        return trigger.getAttribute('aria-label');
    },
});

// Success action handler
clipboard.on('success', function (e) {
    var checkIcon = document.getElementById('fa-check');
    var copyIcon = document.getElementById('fa-copy');

    // alert(checkIcon);
    // alert(copyIcon);
    // exit();

    // Exit check icon when already showing
    // if (checkIcon) {
    //     return;
    // }

    // Create check icon
    // checkIcon = document.createElement('i');
    // checkIcon.classList.add('fa-solid');
    // checkIcon.classList.add('fa-check');
    // checkIcon.classList.add('duration-500');

    // Append check icon
    // button.appendChild(checkIcon);

    // Highlight button
    // button.classList.add('btn-success');

    // Hide copy icon
    checkIcon.classList.remove('d-none');
    checkIcon.classList.add('!text-green-500');
    copyIcon.classList.add('d-none');

    // Revert button label after 3 seconds
    setTimeout(function () {
        // Remove check icon
        copyIcon.classList.remove('d-none');
        checkIcon.classList.add('d-none');
        checkIcon.classList.remove('!text-green-500');

        // Revert icon
        // button.removeChild(checkIcon);

        // Remove button highlight
        // button.classList.remove('btn-success');
    }, 3000)
});


// START: Limit size fileinput
var uploadField = document.getElementById("std-file-input");

uploadField.onchange = function () {
    if (this.files[0].size > 102400) {
        alert("Maks : 100 MB!");
        this.value = "";
    };
};
// END: Limit size fileinput