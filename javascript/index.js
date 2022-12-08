//document.querySelector(".changecolor").onclick=document.querySelector("body").style.backgroundColor="white";
const btn = document.getElementById('changecolor');

btn.addEventListener('click', function onClick(event) {
  // 👇️ change background color
  document.body.style.backgroundColor = '#EEEEEE';
  document.getElementById("pid").style.color="black";
  // 👇️ optionally change text color
  // document.body.style.color = 'white';
});

const rbtn = document.getElementById('resetchange');

rbtn.addEventListener('click', function onClick(event) {
  // 👇️ change background color
  document.body.style.backgroundColor = '#1B262C';

  // 👇️ optionally change text color
  // document.body.style.color = 'white';
});
