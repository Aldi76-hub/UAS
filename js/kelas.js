const filters = document.querySelectorAll('.filter');
const cards = document.querySelectorAll('.catalog-card');
const search = document.querySelector('#classSearch');
const emptyState = document.querySelector('#noResult');

function showClasses() {
  const selected = document.querySelector('.filter.active').dataset.filter;
  const term = search.value.toLowerCase().trim();
  let visible = 0;
  cards.forEach(card => {
    const matchesCategory = selected === 'all' || card.dataset.category === selected;
    const matchesSearch = card.dataset.title.toLowerCase().includes(term);
    const show = matchesCategory && matchesSearch;
    card.hidden = !show;
    if (show) visible++;
  });
  emptyState.hidden = visible !== 0;
}

filters.forEach(button => button.addEventListener('click', () => {
  filters.forEach(item => item.classList.remove('active'));
  button.classList.add('active');
  showClasses();
}));
search.addEventListener('input', showClasses);
document.querySelector('#year').textContent = new Date().getFullYear();
