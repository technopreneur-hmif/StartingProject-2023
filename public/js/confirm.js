document.addEventListener('DOMContentLoaded', function() {
  const voteButtons = document.querySelectorAll('.vote-button');
  const popup = document.querySelector('.popup');
  const closeButton = popup.querySelector('.close');
  const confirmButton = popup.querySelector('.btn-all');

  voteButtons.forEach(button => {
    button.addEventListener('click', () => {
      const kandidatId = button.getAttribute('data-popup-target');
      popup.classList.toggle("show");

      const test = document.getElementById('kandidatId');
      test.value = kandidatId;
    });
  });

  closeButton.addEventListener('click', () => {
    popup.classList.toggle("show");
  });

  confirmButton.addEventListener('click', () => {
    console.log('Vote confirmed!');
  });
});