/*
    To make Navbar Responsive -- A CLICKABLE dropdown menu appears
    on smaller screens.
*/ 
const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if(bar){
    bar.addEventListener('click', () => {
        nav.classList.add('active');
    });
}
if(close){
    close.addEventListener('click', () => {
        nav.classList.remove('active');
    });
}

/*  
    Programs Description - Homepage
    Onclick, description appears.
*/
const bbb = document.getElementById('bbb');
var bbD = document.getElementById('bbD');
if(bbb){
    bbb.addEventListener('click', () =>{
        bbD.innerHTML = "  Bodybuilding is the use of progressive resistance exercise to control and develop one's muscles by muscle hypertrophy for aesthetic purposes. \n\n\nIt is distinct from similar activities such as powerlifting because it focuses on physical appearance instead of strength. Lightweight Baby!  ";
    });
}

const plb = document.getElementById('plb');
var plD = document.getElementById('plD');
if(bbb){
    plb.addEventListener('click', () =>{
        plD.innerHTML = "Powerlifting is a strength sport that consists of three attempts at maximal weight on three lifts: squat, bench press, and deadlift. As in the sport of Olympic weightlifting, it involves the athlete attempting a maximal weight single-lift effort of a barbell loaded with weight plates.";
    });
}

const clb = document.getElementById('clb');
var clD = document.getElementById('clD');
if(clb){
    clb.addEventListener('click', () =>{
        clD.innerHTML = "Calisthenics is a form of strength training consisting of a variety of movements that exercise large muscle groups, such as standing, grasping, pushing, etc. These exercises are often performed rhythmically and with minimal equipment, as bodyweight exercises.";
    });
}
