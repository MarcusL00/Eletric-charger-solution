document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.toggle-button');
    const bookingForm = document.getElementById('bookingForm');
  
    buttons.forEach(button => {
      button.addEventListener('click', function () {
        buttons.forEach(btn => btn.classList.remove('active'));
        this.classList.add('active');
      });
    });
  
    function submitForm() {
      const selectedTime = document.querySelector('.toggle-button.active');
      if (selectedTime) {
        alert('Reservation successful for ' + selectedTime.innerText);
        window.location.href = '/index.html';
      } else {
        alert('Please select a time before reserving.');
      }
    }
  
    bookingForm.addEventListener('submit', function (event) {
      event.preventDefault(); // Prevent the default form submission behavior
    });
  
    const reserveBtn = document.querySelector('.reserveBtn');
    reserveBtn.addEventListener('click', function () {
      const selectedTime = document.querySelector('.toggle-button.active');
      if (selectedTime) {
        submitForm();
      } else {
        alert('Please select a time before reserving.');
      }
    });
  });