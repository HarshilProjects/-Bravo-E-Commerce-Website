
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('search');
  filter = input.value.toUpperCase();
  ul = document.getElementsByClassName("LIST_UL")[0];
  li = ul.getElementsByTagName('li');

function Seach() {
  input = document.getElementById('search');
  filter = input.value.toUpperCase();
  ul = document.getElementsByClassName("LIST_UL")[0];
  li = ul.getElementsByTagName('li');
  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("h6")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "block";
      li[i].style.cursor = "pointer";
      ul.style.display = "block";
    } else {
        // ul.style.height = "fit-content";
      li[i].style.display = "none";
      
    }
    if(filter ==="" || filter ===" ")
    {
      li[i].style.display = "none";
      ul.style.display = "none";
      document.getElementsByTagName("form")[0].method=" ";
    }

 
  }
}

input.addEventListener("focusout", ()=>{
  ul.style.display="none";
});

function maketext(el) { 
  console.log(el.getElementsByTagName("h6"));
  let input=document.getElementById("search");
  let text=el.getElementsByTagName("h6")[0].innerText;
  input.value=text;
}
