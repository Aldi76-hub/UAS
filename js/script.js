const menu = document.querySelector('.menu-toggle');
const links = document.querySelector('.nav-links');
menu?.addEventListener('click', () => {
  const open = links.classList.toggle('open');
  menu.setAttribute('aria-expanded', open);
  menu.textContent = open ? '×' : '☰';
});
document.querySelectorAll('.nav-links a').forEach(link => link.addEventListener('click', () => {
  links.classList.remove('open'); menu.setAttribute('aria-expanded', 'false'); menu.textContent = '☰';
}));

const modal = document.querySelector('#videoModal');
const video = modal.querySelector('video');
document.querySelector('#openVideo').addEventListener('click', () => { modal.classList.add('open'); modal.setAttribute('aria-hidden', 'false'); });
function closeModal(){ modal.classList.remove('open'); modal.setAttribute('aria-hidden', 'true'); video.pause(); }
document.querySelector('.close-modal').addEventListener('click', closeModal);
modal.addEventListener('click', e => { if(e.target === modal) closeModal(); });
document.addEventListener('keydown', e => { if(e.key === 'Escape') closeModal(); });

const audioButton = document.querySelector('#audioToggle');
const audio = document.querySelector('#previewAudio');
let playing = false;
audioButton.addEventListener('click', async () => { 
  playing = !playing;
  if (playing) { try { await audio.play(); } catch { playing = false; } } else { audio.pause(); }
  audioButton.textContent = playing ? '❚❚' : '▶'; audioButton.setAttribute('aria-label', playing ? 'Jeda audio' : 'Putar audio');
});
audio.addEventListener('ended', () => { playing = false; audioButton.textContent = '▶'; audioButton.setAttribute('aria-label', 'Putar audio'); });

document.querySelector('#signupForm').addEventListener('submit', event => {
  event.preventDefault(); const form = event.currentTarget; const message = document.querySelector('#formMessage');
  if (!form.checkValidity()) { message.textContent = 'Mohon lengkapi data dan persetujuan terlebih dahulu.'; message.style.color = '#c64e36'; form.reportValidity(); return; }
  const name = new FormData(form).get('name').trim(); message.textContent = `Terima kasih, ${name}! Pendaftaranmu sudah kami terima.`; message.style.color = '#2d6e46'; form.reset();
});
document.querySelector('#year').textContent = new Date().getFullYear();
