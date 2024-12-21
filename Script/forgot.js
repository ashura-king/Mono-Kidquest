const form = document.querySelector('form')
const msg = document.getElementById('msg')

form.addEventListener('submit', async function(e) {
  e.preventDefault()

  const formData = new FormData(form)

  const body = {
    username: formData.get('username'),
    password: formData.get('password'),
    confirm: formData.get('confirm')

  }

  const res = await fetch('/forgot', {
    headers: {
      'Content-Type': 'application/json'
    },
    method: 'POST',
    body: JSON.stringify(body)
  })

  const data = await res.json()

  if (res.status == 400) {
    msg.innerText = data.msg
  }
  
  if (res.status == 200) {
    window.open(data.route, '_self')
  }
})