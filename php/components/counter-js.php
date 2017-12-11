$(document).ready(function() {
    $('input.form-control, textarea.form-control').maxlength({
        threshold: 10,
        warningClass: "badge badge-success counter",
        limitReachedClass: "badge badge-danger counter",
        placement: 'bottom',
    });
});