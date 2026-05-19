$(function() {
    $('#orderForm, #contactForm').on('submit', function(event) {
        var form = $(this);
        var valid = true;
        var requiredFields = form.find('[required]');

        requiredFields.each(function() {
            if (!$(this).val().trim()) {
                valid = false;
                $(this).addClass('invalid');
            } else {
                $(this).removeClass('invalid');
            }
        });

        if (!valid) {
            event.preventDefault();
            form.find('.form-message').text('Please fill all required fields correctly.').show();
        }
    });

    $('input, textarea, select').on('input change', function() {
        if ($(this).val().trim()) {
            $(this).removeClass('invalid');
        }
    });
});
