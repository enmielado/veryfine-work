// comment
const colors = [
  'hotpink',
  'hotpink',
  'hotpink',
  'hotpink'
];
const els = document.querySelectorAll('.dot, h1 span');

els.forEach( function(el) {
    el.addEventListener('mouseover', function(e) {
        const randomColorIndex = Math.floor(Math.random() * 4);
        if (el.classList.contains('fill')) {
            el.style.backgroundColor = colors[randomColorIndex];
        }
        el.style.borderColor = colors[randomColorIndex];
        el.style.color = colors[randomColorIndex];
    })
    el.addEventListener('mouseout', function(e) {
        el.style.backgroundColor = "";
        el.style.borderColor = "";
        el.style.color = "";
    })
})