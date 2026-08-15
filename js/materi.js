const topics = document.querySelectorAll('.topic');
const lessons = document.querySelectorAll('.lesson');
const title = document.querySelector('#detailTitle');
const type = document.querySelector('#detailType');
const copy = document.querySelector('#detailCopy');
const status = document.querySelector('#lessonStatus');
const openMaterial = document.querySelector('#openMaterial');
function choose(lesson) { lessons.forEach(item => item.classList.remove('active')); lesson.classList.add('active'); title.textContent = lesson.dataset.title; type.textContent = lesson.dataset.type; copy.textContent = lesson.dataset.copy; openMaterial.href = `isi-materi.html?topik=${encodeURIComponent(lesson.dataset.title)}`; status.textContent = ''; }
topics.forEach(topic => topic.addEventListener('click', () => { topics.forEach(item => item.classList.remove('active')); topic.classList.add('active'); const matches = [...lessons].filter(lesson => lesson.dataset.topic === topic.dataset.topic); lessons.forEach(lesson => lesson.hidden = lesson.dataset.topic !== topic.dataset.topic); choose(matches[0]); }));
lessons.forEach(lesson => lesson.addEventListener('click', () => choose(lesson)));
document.querySelector('#saveLesson').addEventListener('click', event => event.currentTarget.textContent = '♥ Materi tersimpan');
document.querySelector('#year').textContent = new Date().getFullYear();
