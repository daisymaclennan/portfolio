const sections = document.querySelectorAll('.expandingSection > button')
sections.forEach(function(section){
  section.addEventListener('click', () => {
    console.log('click')
    section.classList.toggle('open')
  })
})
