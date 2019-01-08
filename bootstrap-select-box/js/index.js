// OPTIONAL JS

// Change the button text & add active class
$('.jRadioDropdown').change(function() {
  var dropdown = $(this).closest('.dropdown');
  var thislabel = $(this).closest('label');

  dropdown.find('label').removeClass('active');
  if( $(this).is(':checked') ) {
    thislabel.addClass('active');
    dropdown.find('ins').html( thislabel.text() );
  }

});    
 
//Add tabindex on labels
	$('label.dropdown-item').each(function (index, value){
  		$(this).attr('tabindex', 0 );
  		$(this).find('input').attr('tabindex', -1 );
	});

//Add keyboard navigation
$('label.dropdown-item').keypress(function(e){
  if((e.keyCode ? e.keyCode : e.which) == 13){
    $(this).find('input').trigger('click');
    $(this).closest('.dropdown').dropdown('toggle')
  }
});