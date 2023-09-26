// sidebar
const ham = document.getElementById('ham-menu');
const sidebar = document.getElementById('sidebar');
const section = document.querySelector('.section');

let sidebar_flag = false;

ham.addEventListener('click', () => {
    
    if(section.style.position == "fixed") {
        section.style.position = "static";
    }else {
        section.style.position = "fixed";
    }

    if(!sidebar_flag) {   
        sidebar.style.display = "inline-block";
        sidebar_flag = true;
    }
    else {
        sidebar.style.display = "none";
        sidebar_flag = false;
    }
})
// sidebar ended


// removing navbar from login and register page
console.log(window.location.pathname.split("/").pop())

const nav = document.querySelector('.navbar');

if(window.location.pathname.split("/").pop() == '' || window.location.pathname.split("/").pop() == 'register') 
{
    nav.style.display = "none";
}
// navbar removed


// JavaScript code to handle increment and decrement
const decrementButton = document.getElementById("decrement");
const incrementButton = document.getElementById("increment");
const valueInput = document.getElementById("value");

decrementButton.addEventListener("click", () => {
    let currentValue = parseInt(valueInput.value);
    if (currentValue > 0) {
        valueInput.value = currentValue - 1;
    }
});

incrementButton.addEventListener("click", () => {
    let currentValue = parseInt(valueInput.value);
    valueInput.value = currentValue + 1;
});
// increment and decrement done