//document.querySelector(".changecolor").onclick=document.querySelector("body").style.backgroundColor="white";
const nodeList = document.querySelectorAll("p");
const navname=document.querySelectorAll("a");
const footer=document.getElementById("footer");
const heading = document.querySelectorAll("h2");
const btn = document.getElementById('changecolor');
const rbtn = document.getElementById('resetchange');


btn.addEventListener('click', function onClick(event) {
  // 👇️ change background color
  document.body.style.backgroundColor = '#F7ECDE';
  for (let i = 0; i < nodeList.length; i++) {
    nodeList[i].style.color = "black";
  }

  for (let i = 0; i < navname.length; i++) {
    navname[i].style.color = "black";
  }
  footer.style.backgroundColor="#FFC4C4";
  // This is for h2 headings
  for (let i = 0; i < heading.length; i++) {
    heading[i].style.color = "#ED5107";
  }
  
  //for copyright
  document.getElementById("copyright").style.color="black"
  // 👇️ optionally change text color
  // document.body.style.color = 'white';
});



////////////////////////////////////////////////////////////////////////////////////////////////////

rbtn.addEventListener('click', function onClick(event) {
  // 👇️ change background color
  document.body.style.background = '#1B262C';
  for (let i = 0; i < nodeList.length; i++) {
    nodeList[i].style.color = "#EEEEEE";
  }

  for (let i = 0; i < navname.length; i++) {
    navname[i].style.color = "#EEEEEE";
  }
  footer.style.backgroundColor="black";
  // This is for h2 headings
  for (let i = 0; i < heading.length; i++) {
    heading[i].style.color = "#FF5722";
  }
   //for copyright
   document.getElementById("copyright").style.color="#EEEEEE"

  // 👇️ optionally change text color
  // document.body.style.color = 'white';
});






