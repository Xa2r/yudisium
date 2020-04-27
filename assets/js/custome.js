// Kabag Lab sidebar
 $(document).ready(function () {
    $('.dropdown-kabag a').unbind('click').click(function () {
        $(this).children('.show-icon').toggle().end().children('.hide-icon').toggle().end().siblings().slideToggle(400);
    });
});