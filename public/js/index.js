window.onload = () => {
    let login_button = document.querySelectorAll('.login');
    let allmodal = document.querySelector('#login-modal-background');
    let blur = document.querySelector('#blurz');
    let close_modal = document.querySelectorAll('.close-modal');
    let register_openeye = document.querySelector('#register-eye-show');
    let register_closeeye = document.querySelector('#register-eye-hide');
    let register_password = document.querySelector('#register-eye');
    let eyes = document.querySelector('#eyes');


    login_button.forEach(element => {
        element.addEventListener('click', () => {
            allmodal.classList.add("show-modal");
            blur.classList.add('blurz');
        });
    });
    close_modal.forEach(element => {
        element.addEventListener('click', () => {
            allmodal.classList.remove('show-modal');
            blur.classList.remove('blurz');
            allmodal.style.opacity = "1";
        });
    });

    // show and hide password 

    register_closeeye.style.fontSize = "0";

    eyes.addEventListener('click', () => {
        if (register_password.type == "text") {
            register_password.type = "password";
            register_openeye.style.fontSize = "2.2rem";
            register_closeeye.style.fontSize = "0";

        }
        else {
            register_password.type = "text";
            register_closeeye.style.fontSize = "2.2rem";
            register_openeye.style.fontSize = "0";
        }

    });


   

}