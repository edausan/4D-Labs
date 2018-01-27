$(function () {
  // Shopping Cart
  // Subtotal
  var minusBtn = $(document).find('button#minus');
  var plusBtn = $(document).find('button#plus');
  var subtotal = $('section.shopping-cart-wrapper article.cart-orders table.shopping-cart-table tbody tr td#subtotal');
  var quantity = $('section.shopping-cart-wrapper article.cart-orders table.shopping-cart-table tbody tr td#quantity input');

  // When Minus Button is clicked
  // Call addMinus function
  minusBtn.on('click', function () {
    var x = $(this);
    var operator = 'minus';
    addMinus(x, operator);
  });

  // When Plus Button is clicked
  // Call addMinus function
  plusBtn.on('click', function () {
    var x = $(this);
    var op = 'plus';
    addMinus(x, op);
  });

  // this function is responsible for getting the actual value of quantity
  // and responsible for adding and subtracting by 1 on the actual value of quantity
  function addMinus(x, op) {
    var quanInput = x.siblings('input');
    var qVal = quanInput.val();

    if (op == 'minus') {
      console.log(qVal--);
      quanInput.val(qVal--);


    } else {
      console.log(qVal++);
      quanInput.val(qVal++);
    }

    quanInput.keyup();
  }

  $(document).on('blur keyup change', 'section.shopping-cart-wrapper article.cart-orders table.shopping-cart-table tbody tr td#quantity input', function () {
    var price = $(this).parent().siblings('td#price').children('input').val();
    var p = price.replace('$', '');
    var q = $(this);
    var total = p * q.val();
    $(this).parent().siblings('td#subtotal').children('input').val(curr(total)).attr('title', '$' + curr(total));
  });

  function curr(r) {
    return r.toLocaleString('en');
  }

  $(document).find('td#subtotal').each(function () {
    var price = $(this).siblings('td#price').children('input').val();
    var p = price.replace('$', '');
    var total = p * $(this).siblings('td#quantity').children('input').val();
    $(this).children('input').val(total.toLocaleString('en')).attr('title', '$' + total.toLocaleString('en'));
  });


  var orderTotal = $('section.shopping-cart-wrapper article.cart-orders form.cart-form table.shopping-cart-table tbody tr.order-total td#total');

  var selectedCountry = $('input#selected-country').val();
  var selectCountry = $(document).find('select.shipping-country');

  if (selectCountry) {
    $(this).find('option[value=' + selectedCountry + ']').attr('selected', true);
  }



  var acceptBtn = $('section.shipping-method-wrapper section.acceptance-wrapper ul li input');

  $(document).on('change', 'section.shipping-method-wrapper section.acceptance-wrapper ul li input', function() {
      if ($(this).is(':checked')) {
        $(this).parent().addClass('checked');
      } else {
        $(this).parent().removeClass('checked');
      }
      
  });

});