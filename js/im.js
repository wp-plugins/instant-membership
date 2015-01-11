$j = jQuery.noConflict();

$j(document).ready(function () {
    $j('#im-form').submit(function (event) {
        event.preventDefault();

        code_input = $j('#in-input-code').val();

        if (im_code.toLowerCase() === code_input.toLowerCase()) {
            $j('#im-content').show('slow');
            $j('#im-form').hide('slow');
        } else {
            $j('#im-error').hide().show('slow');
        }
    })
});
