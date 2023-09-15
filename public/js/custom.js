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