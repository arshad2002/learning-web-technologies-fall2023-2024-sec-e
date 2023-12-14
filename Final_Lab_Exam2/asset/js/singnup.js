document.addEventListener('DOMContentLoaded', function () {
  const signupForm = document.getElementById('signupForm');
  const errorMessageDiv = document.getElementById('errorMessage');

  signupForm.addEventListener('submit', function (event) {
    event.preventDefault();

    const xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        try {
          const data = JSON.parse(xhr.responseText);
          if (data.error) {
            errorMessageDiv.textContent = data.error;
          }
        } catch (error) {
          console.error('Error parsing JSON response:', error.message);
        }
      } else if (xhr.readyState === XMLHttpRequest.DONE) {
        console.error('Network request failed');
      }
    };

    xhr.open('POST', signupForm.action, true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send(new URLSearchParams(new FormData(signupForm)));
  });
});
