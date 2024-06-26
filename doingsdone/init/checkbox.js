const checkbox = document.getElementById('c1');

const p = document.getElementById('p1')

let a;

checkbox.addEventListener('change', event => {
  if (checkbox.checked === true) {
    p.innerHTML = `a = "${a = "value1"}"`;
    $show_complete_tasks = 1; 
  } else {
    a = "";
    p.innerHTML = "";
    $show_complete_tasks = 0; 
  }
});