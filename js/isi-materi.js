const params = new URLSearchParams(window.location.search);
const selectedTopic = params.get('topik');
if (selectedTopic) document.querySelector('#articleTitle').textContent = selectedTopic;
document.querySelector('#markRead').addEventListener('click', event => { event.currentTarget.textContent = '✓ Sudah selesai'; document.querySelector('#readStatus').textContent = 'Bagus! Materi telah ditandai selesai.'; });
document.querySelector('#year').textContent = new Date().getFullYear();
