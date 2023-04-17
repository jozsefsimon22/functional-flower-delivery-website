$(document).ready(function () {
    $('.add-to-cart').on('click', function () {
        var flowerId = $(this).attr('id');

        $.ajax({
            url: 'add-to-basket.php',
            type: 'POST',
            data: { id: flowerId },
            success: function (response) {
                // Do something with the response, e.g., show a success message
                console.log(response);
            },
            error: function () {
                // Handle errors, e.g., show an error message
                console.error('An error occurred while adding the item to the cart.');
            }
        });
    });
});
