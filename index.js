
let menu = document.querySelector(".menu-icon");
let navbar = document.querySelector(".navbar");

menu.onclick = () => {
    navbar.classList.toggle('open-menu');
    menu.classList.toggle("move");
};


window.onscroll = () => {
    navbar.classList.remove('open-menu');
    menu.classList.remove("move");
}




// header background scroll 

let header =  document.querySelector('header');

window.addEventListener("scroll", () => {
    header.classList.toggle("header-active", window.scrollY > 0);
});




// scroll top 

let scrollTop =  document.querySelector(".scroll-top");

window.addEventListener("scroll", () => {
    scrollTop.classList.toggle("scroll-active", window.scrollY >= 400);
});



// music 

let music =  document.querySelector(".music");

window.addEventListener("scroll", () => {
    music.classList.toggle("scroll-active2", window.scrollY >= 400);
});



// thankyou
function downloadfunc() {
    alert("Thankyou For Downloading Press Ok To Start");
    
}










// audio 










var playpause = document.getElementById('playpause');
 var count = 0;

function play() {
  // var randomIndex = Math.floor(Math.random() * songs.length);
  // var audio = new Audio(songs[randomIndex].src);
    if(count == 0){
        count = 1;
        audio.play();
        audio.loop = true;
    }else{
        count = 0;
        audio.pause();
    }
    // audio.play();
}





// function playmusic() {
//     var audio = new Audio('music/calm.mp3');
//     audio.loop = true;
//     audio.play()

//     if(audio == audio.play()){
//         function off() {
//             audio.pause()
//         }
//     }else{
//         audio.play()
//     }
    
// }












// cookie
function setCookie(cname,cvalue,exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }
  
  function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i < ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }
  
  function checkCookie() {
    let user = getCookie("username");
    if (user != "") {
      alert("Welcome again " + user);
    } else {
       user = prompt("Welcome To This Website 💖💖💖💖💖😎 Please Enter Your Name:","");
       if (user != "" && user != null) {
         setCookie("username", user, 30);
       }
    }
    alert('❤ If You Want To run this Website With Music So Please Press The Music Button.......... Thankyou Again')

  }

  
  