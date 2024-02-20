var formRepeater = $(".form-repeater");

var row = 2;
var col = 1;
var maxElements = 5;

formRepeater.on('submit', function(e) {
  e.preventDefault();
});

formRepeater.repeater({
  show: function() {
// Check if the maximum number of elements is reached
if (row <= maxElements) {
  var fromControl = $(this).find('.form-control, .form-select');
  var formLabel = $(this).find('.form-label');

  fromControl.each(function(i) {
    var id = 'form-repeater-' + row + '-' + col;
    $(fromControl[i]).attr('id', id);
    $(formLabel[i]).attr('for', id);
    col++;
  });

  row++;

  // Clone the first repeater item and append it to the repeater list
  var clonedItem = $('[data-repeater-item]').first().clone();
  $(this).find('[data-repeater-list="group-a"]').append(clonedItem);

  $(this).slideDown();
} else {
  alert('Maximum number of elements reached (5).');
}

  },
  

  hide: function(e) {
    confirm('Are you sure you want to delete this element?') && $(this).slideUp(e);
    row--; // Decrement row count when an element is removed
  }
});