const ham = document.getElementById('ham-menu');
const sidebar = document.getElementById('sidebar')

let sidebar_flag = false;

ham.addEventListener('click', () => {

    if(!sidebar_flag) {   
        sidebar.style.display = "inline-block";
        sidebar_flag = true;
    }
    else {
        sidebar.style.display = "none";
        sidebar_flag = false;
    }
})