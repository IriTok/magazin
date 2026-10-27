import * as bootstrap from 'bootstrap';

window.clearCart = function(action) {
    $.ajax({
        url: action,
        type: 'get',
        success: function(result) {
            let now_location = document.location.pathname;
            if (now_location == '/cart/checkout') {
                location = '/cart/checkout';
            } else {
                showCart(result);
            }
        },
        error: function() {
            alert('Error');
        }
    });
}

window.getCart = getCart; 

function getCart(action) {
    $.ajax({
        url: action,
        type: 'get',
        success: function (result) {
            showCart(result);
        },
        error: function () {
            alert('Error');
        }
    });
}

function showCart(cart) {
    $('.cart-modal .modal-body').html(cart);
    const modalElement = document.getElementById('cart-modal');
    const modalInstance = bootstrap.Modal.getOrCreateInstance(modalElement);
    modalInstance.show();

    if ($('.cart-modal .modal-body table').length > 0) {
        $('#cart-modal .modal-footer .btn').removeClass('d-none'); 
    } else {
        $('#cart-modal .modal-footer .btn').addClass('d-none');
    }
}

$(function() {
    $('.addtocart').on('submit', function (){
        let form = $(this);
        $.ajax({
            url: form.attr('action'),
            data: form.serialize(),
            type: 'post',
            success: function (result) {
                showCart(result);
            },
            error: function (msg) {
                alert('Error!');
                console.log(msg.responseJSON);
                form[0].reset();
            }
        });
        return false;
    });

    $('#cart-modal .modal-body').on('click', '.del-item', function () {
        $.ajax({
            url: $(this).data('action'),
            type: 'get',
            success: function (result) {
                let now_location = document.location.pathname;
                if (now_location == '/cart/checkout') {
                    location = '/cart/checkout';
                } else {
                    showCart(result);
                }
            },
            error: function (msg) {
                alert('Error!');
            }
        });
    });
});