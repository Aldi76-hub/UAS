const loginForm = document.querySelector('#loginForm');
const password = document.querySelector('#loginPassword');
const message = document.querySelector('#loginMessage');

document.querySelector('#showPassword').addEventListener('click', () => {
  password.type = password.type === 'password' ? 'text' : 'password';
});
loginForm.addEventListener('submit', event => {
  event.preventDefault();
  if (!loginForm.checkValidity()) { loginForm.reportValidity(); return; }
  const data = new FormData(loginForm);
  localStorage.setItem('manabuUser', JSON.stringify({ name: data.get('name'), email: data.get('email') }));
  message.textContent = 'Login berhasil. Mengarahkan ke beranda...';
  setTimeout(() => { window.location.href = 'index.html'; }, 650);
});
