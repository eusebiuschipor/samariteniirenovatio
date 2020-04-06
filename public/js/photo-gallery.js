// Get the modal
var modal = document.getElementById("myModal");
var numberOfRowsInPhotoModal = 3;
var numberOfPhotosPerRowInModal = 4;
var modalOpen = false;

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

var prev = function() {
  var selected = $('.selected-gallery-image');
  var dataImageLoad = selected.prev().attr('data-image-load');

  if (!dataImageLoad) {
    selected = $('.gallery-container').children(":last");
    dataImageLoad = $('.gallery-container').children(":last").attr('data-image-load');
  }

  selected.removeClass('selected-gallery-image');
  selected.prev().addClass('selected-gallery-image');

  var img = $('<img>');
  img.attr('src', dataImageLoad.replace('_tn',''));
  $('#modal-container').html(img);
};

var next = function() {
  var selected = $('.selected-gallery-image');
  var dataImageLoad = selected.next().attr('data-image-load');

  if (!dataImageLoad) {
    selected = $('.gallery-container').children(":first");
    dataImageLoad = $('.gallery-container').children(":first").attr('data-image-load');
  }

  selected.removeClass('selected-gallery-image');
  selected.next().addClass('selected-gallery-image');

  var img = $('<img>');
  img.attr('src', dataImageLoad.replace('_tn',''));
  $('#modal-container').html(img);
};

var closeModal = function() {
  modal.style.display = "none";
};

$('.gallery-image').click(function(e) {
  modalOpen = true;
  modal.style.display = "block";
  //e.stopPropagation();

  $(this).addClass('selected-gallery-image');

  var img = $('<img>');
  img.attr('src', $(this).attr('data-image-load').replace('_tn',''));
  $('#modal-container').html(img);
});

$('.prev').click(function() { prev(); });
$('.next').click(function() { next(); });

$('.prev').on({'touchstart' : function() { prev(); } });
$('.next').on({'touchstart' : function() { next(); } });

// When the user clicks on <span> (x), close the modal
$('span').click(function(event) { 
  event.preventDefault();
  closeModal(); 
});

$('span').on({'touchstart' : function(event) { 
    event.preventDefault();
    closeModal(); 
  } 
});

var navbarCollapse = function() {
  if ($("#mainNav").offset().top > 100) {
    $("#mainNav").addClass("navbar-shrink");
  } else {
    $("#mainNav").removeClass("navbar-shrink");
  }
};
// Collapse now if page is not at top
navbarCollapse();

$(window).load(function() {
  // Animate loader off screen
  $(".se-pre-con").hide();
});

// When the user clicks anywhere outside of the modal, close it
// $(document).click(function(e) {
//     // if (!$(e.target).closest('#myModal').length) {
//     //     closeModal();
//     // }
//
//     var target = e.target; //target div recorded
//
//     if (!jQuery(target).is('#myModal') && modalOpen) {
//         closeModal();
//         modalOpen = false;
//     }
// });
// $(document).on({'touchstart' : function(e) {
//   var target = e.target; //target div recorded
//
//   if (!jQuery(target).is('#myModal') && modalOpen) {
//       closeModal();
//       modalOpen = false;
//   }
// } });
