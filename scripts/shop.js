$(function() {
    // Shopping Cart
    // Subtotal

    var subtotal =  $('section.shopping-cart-wrapper article.cart-orders table.shopping-cart-table tbody tr td#subtotal');
    var quantity =  $('section.shopping-cart-wrapper article.cart-orders table.shopping-cart-table tbody tr td#quantity input');

    $(document).on('click blur', 'section.shopping-cart-wrapper article.cart-orders table.shopping-cart-table tbody tr td#quantity input', function() {
      var price   =   $(this).parent().siblings('td#price').children('input').val();
      var p       =   price.replace('$','');
      $(this).parent().siblings('td#subtotal').children('p').html('$'+p * $(this).val());
    });

    subtotal.each(function() {
        var price   =   $(this).siblings('td#price').children('input').val();
        var p       =   price.replace('$','');
        $(this).children('p').html('$'+ p * $(this).siblings('td#quantity').children('input').val());
    });


    var orderTotal  =   $('section.shopping-cart-wrapper article.cart-orders form.cart-form table.shopping-cart-table tbody tr.order-total td#total');

});

$(document).ready(function(){
  
    /* 1. Visualizing things on Hover - See next part for action on click */
    $('#stars li').on('mouseover', function(){
      var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
     
      // Now highlight all the stars that's not after the current hovered star
      $(this).parent().children('li.star').each(function(e){
        if (e < onStar) {
          $(this).addClass('hover');
        }
        else {
          $(this).removeClass('hover');
        }
      });
      
    }).on('mouseout', function(){
      $(this).parent().children('li.star').each(function(e){
        $(this).removeClass('hover');
      });
    });
    
    
    /* 2. Action to perform on click */
    $('#stars li').on('click', function(){
      var onStar = parseInt($(this).data('value'), 10); // The star currently selected
      var stars = $(this).parent().children('li.star');
      
      for (i = 0; i < stars.length; i++) {
        $(stars[i]).removeClass('selected');
      }
      
      for (i = 0; i < onStar; i++) {
        $(stars[i]).addClass('selected');
      }
      
      // JUST RESPONSE (Not needed)
      var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
      var msg = "";
      if (ratingValue > 1) {
          msg = "Thanks! You rated this " + ratingValue + " stars.";
      }
      else {
          msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
      }
      responseMessage(msg);
      
    });
    
    
  });
  
  
  function responseMessage(msg) {
    $('.success-box').fadeIn(200);  
    $('.success-box div.text-message').html("<span>" + msg + "</span>");
  }