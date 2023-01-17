const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.navmenu');

//Hamburger start
hamburger.addEventListener("click", () => {
    hamburger.classList.toggle('active');
    navMenu.classList.toggle('active');
})

document.querySelectorAll('a').forEach(n => n. 
    addEventListener("click", () => {
        hamburger.classList.remove('active');
        navMenu.classList.remove('active');
    }))
//Hamburger End

//Booking Form Start
const popup = document.querySelector("#bookme");
const close_btn = document.querySelector('.closebtn');
const submit_btn = document.querySelector('#bookbtn');

let book_name = document.querySelector("name");
let book_email = document.querySelector("email");
let book_date = document.querySelector("date");
let book_questions = document.querySelector("questions");


popup.addEventListener("click", function(){
    document.querySelector(".book-form").classList.add("active");
});

close_btn.addEventListener("click", function(){
    document.querySelector(".book-form").classList.remove("active");
});


// submit_btn.addEventListener("click", function(){
//     window.open("../portfolio/thankyou.html", "_self");
// });
//Booking Form End

