var product_qty = $("input.product_qty");

// if (product_qty.val() <= 1) {
//     $(".btn_num.num_1").prop('disabled', true)
//     product_qty.val(1)
// } else {
//     $(".btn_num.num_1").prop('disabled', false)
// }
// product_qty.blur(function() {

//     if (product_qty.val() <= 0) {
//         $(".btn_num.num_1").prop('disabled', true)
//         product_qty.val(1)
//     } else {
//         $(".btn_num.num_1").prop('disabled', false)
//         product_qty.val(product_qty.val())
//     }
// });

  
product_qty.oninput = function () {
    if (product_qty.val() <= 0) {
        product_qty.val() = Math.abs(product_qty.val());
    }
    if (product_qty.val() > 1) {
        $(".btn_num.num_1").prop('disabled', false)
    }
}

product_qty.oninput = function() {
    if (product_qty.val() <= 1) {
        $(".btn_num.num_1").prop('disabled', true)
    } else {
        $(".btn_num.num_1").prop('disabled', false)
    }
};
$(document).ready(function () {
    $(document).on('submit', '#add_product_to_cart', addToCart)
    $(document).on('click', '.btn-plus', plus)
    $(document).on('click', '.btn-minus', minus)
    $(document).on('click', '.cart_update', updateCart)
    $(document).on('blur', '.product_qty', updateInputCart)
    $(document).on('click', '.remove-item-cart', removeProductFromCart)
})

function minus() {

    let id = $(this).data('id')
    var qty = $(".input-quantity-" + id)
    for (let i = 0; i <= 100; i++) {
        if (i === 100) {
            break;
        }
    }
    var number = (parseInt(qty.val()) - 1);
    if (number <= 1) {
        qty.val(1);
        $(".btn_num.num_1").prop('disabled', true)
    } else {
        qty.val(number);
    }
}

function plus() {
    let id = $(this).data('id')
    var qty = $(".input-quantity-" + id)
    for (let i = 0; i <= 100; i++) {
        if (i === 100) {
            break;
        }
    }
    var number = (parseInt(qty.val()) + 1);
    $(".btn_num.num_1").prop('disabled', false)
    qty.val(number);
}

function redirect(url) {
   return window.location.href = url;
}

function sleep(delay) {
    let start = new Date().getTime();
    while (new Date().getTime() < start + delay);
}

// Add product to cart
function addToCart(e) {
    e.preventDefault();
    let urlCart = $(this).data('url')
    let id = $('.add_cart').data('id')
    var quantity = $('input[name=product_qty]').val()
    $.ajax({
      url: urlCart,
      method: "Post",
      dataType: 'json',
      data: {
        _token: $("input[name=_token]").val(),
        id: id,
        quantity: quantity,
      },
      success: function (data) {
        console.log(data)
        sleep(1000)
        $("body").addClass("stopScroll")
        if (data.error) {
            Swal.fire({
                position: "center",
                icon: "error",
                html: data.error,
                timer: 3000,
                showConfirmButton: true,
                showCancelButton: true,
                cancelButtonText: "Tiếp tục mua hàng",
                confirmButtonText: 'Xem giỏ hàng',
                customClass: {
                    actions: 'my-actions',
                    cancelButton: 'order-1 btn btn-danger',
                    confirmButton: 'order-2 btn btn-success btn-proceed-checkout',
                },
            }).then(function(result) {
                if (result.isConfirmed) {
                    redirect_to_url()
                }
                $("body").removeClass("stopScroll")
            });
        } 
        if (data.message) {
            Swal.fire({
                position: "center",
                icon: "success",
                html: "Bạn đã thêm <a style='color: #800020;'> [ " + `${data.items.name}` + " ] </a> vào giỏ hàng thành công !",
                timer: 1500,
                showConfirmButton: true,
                showCancelButton: true,
                cancelButtonText: "Tiếp tục mua hàng",
                confirmButtonText: 'Thực hiện thanh toán',
                customClass: {
                    actions: 'my-actions',
                    cancelButton: 'order-1 btn btn-danger',
                    confirmButton: 'order-2 btn btn-success btn-proceed-checkout',
                },
            }).then(function(result) {
                if (result.isConfirmed) {
                    redirect_to_checkout()
                }
                $("body").removeClass("stopScroll")
            });
            $('#vnt-menu-fixed ul li.cart>a .sl').text(data.total_items)
        }
      }
    })
}
$(document).ready(function() {
    $(document).ajaxStart(function () {
        $("#loader").show();
    }).ajaxStop(function () {  
        $('#loader').hide();  
    });
});

// Update product in cart
function update_qty(urlCart, id, quantity) {
    $.ajax({
        type: "Post",
        url: urlCart,
        dataType: 'json',
        data: {
            _token: $("input[name=_token]").val(),
            id: id,
            quantity: quantity
        },
        success: function (data) {
            console.log(data)
            sleep(1000)
            // console.log(data.items)
            if (data.error) {
                Swal.fire({
                    position: "center",
                    icon: "error",
                    html: data.error,
                    timer: 3000,
                    showConfirmButton: false,
                    showCancelButton: true,
                    cancelButtonText: "Tiếp tục mua hàng",
                    customClass: {
                        actions: 'my-actions',
                        cancelButton: 'order-1 btn btn-danger',
                    },
                }).then(function(result) {
                    $("body").removeClass("stopScroll")
                });
            
                $(".input-quantity-" + data.id).val(data.quantity)
            }
            if (data.message) {
                Swal.fire({
                    position: "center",
                    icon: "success",
                    html: data.message,
                    timer: 2000,
                    showConfirmButton: false,
                    showCancelButton: true,
                    cancelButtonText: "Tiếp tục mua hàng",
                    customClass: {
                        actions: 'my-actions',
                        cancelButton: 'order-1 btn btn-danger',
                    },
                }).then(function(result) {
                    $("body").removeClass("stopScroll")
                });
                $(".cart-price .price").each(function(index, element) {
                    $(this).text(data.items[index].amount)
                })
                for (var i = 0; i < data.items.length; i++) {
                    $(".input-quantity-"+data.items[i].id).val(data.items[i].quantity)
                }
                $(".totals_price").text(data.total_carts)
            }
        }
    })
}
function updateCart() {
    let urlCart = $('.update_cart_url').data('url')
    let id = $(this).data('id')
    let quantity = $(this).parents('.input_qty_cart').find('input.product_qty').val();
    update_qty(urlCart, id, quantity)   
}

function updateInputCart() {
    let urlCart = $('.update_cart_url').data('url')
    let id = $(this).data('id')
    let quantity = $(this).val();
    if (quantity <= 0) {
        $(".btn_num.num_1").prop('disabled', true)
        quantity = 1
    } else {
        $(".btn_num.num_1").prop('disabled', false)
        quantity = $(this).val()
    }
    // quantity = product_qty.val()
    // let curent_quantity = $(this).data('value');

    // if (quantity <= 1 ) {
    //     quantity = 1
    // }
    // if quantity
    // $('input[name=product_qty1]').val(quantity)
    // $('input[name=product_qty2]').val(quantity)
    update_qty(urlCart, id, quantity)

}

// Remove a product from cart
function removeProductFromCart() {
    let id = $(this).data('id')
    let url = $(this).data('url')
    $.ajax({
        type: "DELETE",
        url: url,
        dataType: 'json',
        data: {
            _token: $("input[name=_token]").val(),
            id: id,
        },
        success: function (data) {
            console.log(data)
            $(".productid-" + id).remove()
            $(".cart-price .price").each(function(index, element) {
                $(this).text(data.items[index].amount)
            })
            $(".totals_price").text(data.total_carts)
            $('#vnt-menu-fixed ul li.cart>a .sl').text(data.total_items)
            $('.count_item_pr').text(data.total_items)
            if (!data.items.length) {
                $('.btn-proceed-checkout').prop('disabled', true)
                $('.btn-proceed-checkout-mobile').addClass('disabled')
            }
        }
    })
}