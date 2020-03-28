
/**
* Theme: SimpleAdmin Template
* Author: Coderthemes
* Form Advanced
*/

// Select2
$(".select2").select2();


// Time Picker
jQuery('#timepicker').timepicker({
    defaultTIme: false,
    icons: {
        up: 'mdi mdi-chevron-up',
        down: 'mdi mdi-chevron-down'
    }
});
jQuery('#timepicker2').timepicker({
    showMeridian: false,
    icons: {
        up: 'mdi mdi-chevron-up',
        down: 'mdi mdi-chevron-down'
    }
});
jQuery('#timepicker3').timepicker({
    minuteStep: 15,
    icons: {
        up: 'mdi mdi-chevron-up',
        down: 'mdi mdi-chevron-down'
    }
});

//colorpicker start

$('.colorpicker-default').colorpicker({
    format: 'hex'
});
$('.colorpicker-rgba').colorpicker();

// Date Picker
jQuery('#datepicker').datepicker();
jQuery('#datepicker-autoclose').datepicker({
    autoclose: true,
    todayHighlight: true
});
jQuery('#datepicker-inline').datepicker();
jQuery('#datepicker-multiple-date').datepicker({
    format: "mm/dd/yyyy",
    clearBtn: true,
    multidate: true,
    multidateSeparator: ","
});
jQuery('#date-range').datepicker({
    toggleActive: true
});

//Clock Picker
$('.clockpicker').clockpicker({
    donetext: 'Done'
});

$('#single-input').clockpicker({
    placement: 'bottom',
    align: 'left',
    autoclose: true,
    'default': 'now'
});
$('#check-minutes').click(function (e) {
    // Have to stop propagation here
    e.stopPropagation();
    $("#single-input").clockpicker('show')
        .clockpicker('toggleView', 'minutes');
});