const searchBar = document.querySelector('.searchbar')
const searchIcon = document.querySelector('.searchbar-icon')
const searchInput = document.querySelector('.searchbar-input')
const searchClose = document.querySelector('.searchbar-close-icon')

searchIcon.addEventListener('click', () => {
  searchBar.classList.add('searchbar-open')
  searchInput.focus()
})

searchClose.addEventListener('click', () => {
  searchBar.classList.remove('searchbar-open')
})
