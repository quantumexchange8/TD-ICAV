import './bootstrap';


$(document).ready(function() {
    // Hide all sections initially except the first one
    $('.content-section').hide();
    $('#section1').show();

    $('.sidebar__common__input').on('click', function(event) {
        event.preventDefault();

        var sectionIndex = $(this).data('index');
        var target = '#section' + sectionIndex;

        // Hide all sections
        $('.content-section').hide();

        // Show the selected section
        $(target).fadeIn(); 
    });
});