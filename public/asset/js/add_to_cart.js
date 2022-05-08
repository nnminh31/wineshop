var product_qty = document.querySelector("input[name='product_qty']");
if (product_qty.value <= 1) {
    $(".btn_num.num_1").prop('disabled', true)
} else {
    $(".btn_num.num_1").prop('disabled', false)
}
product_qty.onblur = function () {
    if (product_qty.value <= 0 || product_qty.value == "") {
        $(".btn_num.num_1").prop('disabled', true)
        product_qty.value = 1
    } else {
        $(".btn_num.num_1").prop('disabled', false)
        product_qty.value = product_qty.value
    }
};
product_qty.oninput = function () {
    if (product_qty.value < 0) {
        product_qty.value = Math.abs(product_qty.value);
    }
    if (product_qty.value > 1) {
        $(".btn_num.num_1").prop('disabled', false)
    }
}

// product_qty.oninput = function() {
//     if (product_qty.value <= 1) {
//         $(".btn_num.num_1").prop('disabled', true)
//     } else {
//         $(".btn_num.num_1").prop('disabled', false)
//     }
// };
$(document).ready(function () {
    $(document).on('submit', '#add_product_to_cart', addToCart)
    $(document).on('click', '.btn-plus', plus)
    $(document).on('click', '.btn-minus', minus)
    // $(document).on('click', '.cart_update', cartUpdate)
    // $(document).on('click', '.remove-cart-item', removeCart)
})

function minus() {

    let id = $(this).data('id')
    var qty = $(".input-quantity-" + id)
    var price = $(".price_sale_" + id)
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
        $('#vnt-menu-fixed ul li.cart>a .sl').text(data.total_items)
      }
    })
  }
  