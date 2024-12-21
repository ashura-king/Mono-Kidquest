window.addEventListener("load",() =>{
  const loader = document.querySelector(".loader");
  loader.classList.add("loader--hidden");

  loader.addEventListener("transition" , () =>{
 document.body.removeChild(".loader");
  });
});