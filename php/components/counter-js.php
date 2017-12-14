$(document).ready(function() {
    $('#counterDemo1,#counterDemo2,').maxlength({
        threshold: 10,
        warningClass: "badge badge-success counter",
        limitReachedClass: "badge badge-danger counter",
        placement: 'bottom',
    });
});