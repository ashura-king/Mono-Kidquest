const form = document.querySelector('form');
const msg = document.getElementById('msg');

const inputBox = document.querySelectorAll('.input-box');

function showError(errors) {
  inputBox.forEach(box => {
    if (errors[box.children[0].name]) {
      const msg = document.createElement('p')
      msg.innerText = errors[box.children[0].name]
      msg.style.color = "red"
      msg.style.transform = "translate(-1rem)"
      msg.style.width = "100%";
      msg.style.textAlign = "center"
      box.append(msg)
    }
  })
}

form.addEventListener('submit', async function(e) {
  e.preventDefault();

  const formData = new FormData(form);
  const body = Object.fromEntries(formData.entries());

  const res = await fetch('/register/create', {
    headers: {
      'Content-Type': 'application/json'
    },
    method: 'POST',
    body: JSON.stringify(body)
  });

  const data = await res.json();

  if (res.status == 400) {
      showError(data.errors);
  }

  if (res.status == 200) {
    window.open(data.route, '_self');
  }
});
