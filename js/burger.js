var sidenav = document.getElementById("mytopnav");
var openBtn = document.getElementById("openBtn");
var closeBtn = document.getElementById("closeBtn");


openBtn.addEventListener('click',()=>{
    if(sidenav.classList.toggle('active')){
        sidenav.classList.add('active')
    }else{
        
    sidenav.classList.remove('active')  
    }
})
closeBtn.addEventListener('click',()=>{
    sidenav.classList.remove('active')
})