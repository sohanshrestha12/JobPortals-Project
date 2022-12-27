window.onload=()=>{
    let login_button = document.querySelector('#login'); 
    let allmodal = document.querySelector('#login-modal-background');
    let blur = document.querySelector('#blurz');
    let close_modal = document.querySelectorAll('.close-modal');

    login_button.addEventListener('click',()=>{
        allmodal.classList.add("show-modal");
        blur.classList.add('blurz');
    });
    close_modal.forEach(element => {
        element.addEventListener('click',()=>{
            allmodal.classList.remove('show-modal');
            blur.classList.remove('blurz');
            allmodal.style.opacity="1";
        });
    });
}