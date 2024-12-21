window.onload = function() {
  var boxes = document.querySelectorAll('.box');
  var currentIndex = 0;

  function showBox(index) {
    for (var i = 0; i < boxes.length; i++) {
      boxes[i].style.display = 'none';
    }
    boxes[index].style.display = 'flex';
  }

  function nextBox() {
    currentIndex = (currentIndex + 1) % boxes.length;
    showBox(currentIndex);
  }

  function prevBox() {
    currentIndex = (currentIndex - 1 + boxes.length) % boxes.length;
    showBox(currentIndex);
  }

  // Add event listeners to the buttons
  document.querySelectorAll('.next').forEach(function(button) {
    button.addEventListener('click', nextBox);
  });
  document.querySelectorAll('.back').forEach(function(button) {
    button.addEventListener('click', prevBox);
  });

  // Show the first box by default
  showBox(currentIndex);
};