
$(function ()
{
    function after_form_submitted(data)
    {
        if (data.result === 'success')
        {
            $('form#reused_form').hide();
            $('#success_message').show();
            $('#error_message').hide();
        } else
        {
            $('#error_message').append('<ul></ul>');

            jQuery.each(data.errors, function (key, val)
            {
                $('#error_message ul').append('<li>' + key + ':' + val + '</li>');
            });
            $('#success_message').hide();
            $('#error_message').show();

            //reverse the response on the button
            $('button[type="button"]', $form).each(function ()
            {
                $btn = $(this);
                label = $btn.prop('orig_label');
                if (label)
                {
                    $btn.prop('type', 'submit');
                    $btn.text(label);
                    $btn.prop('orig_label', '');
                }
            });

        }//else
    }

    $('#reused_form').submit(function (e)
    {
        e.preventDefault();

        $form = $(this);
        //show some response on the button
        $('button[type="submit"]', $form).each(function ()
        {
            $btn = $(this);
            $btn.prop('type', 'button');
            $btn.prop('orig_label', $btn.text());
            $btn.text('Envoi ...');
        });


        var formdata = new FormData(this);
        $.ajax({
            type: "POST",
            url: 'formpage.php',
            data: formdata,
            success: after_form_submitted,
            dataType: 'json',
            processData: false,
            contentType: false,
            cache: false
        });

    });
});