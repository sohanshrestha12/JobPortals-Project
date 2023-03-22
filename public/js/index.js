
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
    if (register_closeeye) {
        register_closeeye.style.fontSize = "0";
    }
    if (eyes) {
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

    // Company Menu Toggle
    let toggle = document.querySelector('.toggle');
    let navigation = document.querySelector('.navigation');
    let main = document.querySelector('.main');
    if (toggle) {
        toggle.onclick = function () {
            navigation.classList.toggle('Company-sidebar-toggle');
            main.classList.toggle('active');
        }
    }

    //filter jobs
    let filter = document.querySelector('.JobFilter');
    let Jfilter = document.querySelector('#Jfilter');
    if (filter) {
        filter.addEventListener('click', () => {
            Jfilter.classList.toggle('Jactive');
        });
    }
}


jQuery.noConflict();
jQuery(document).ready(function ($) {
    //ApplyJobs
    $('.JobApplyNowBtn').click(function (e) {
        e.preventDefault();

        $('#ApplyJobs').modal('show');
    });



    // deletejobs jquery 
    $('.DeleteJobs').click(function (e) {
        e.preventDefault();

        var Jobid = $(this).data("value");
        $('#Jobid').val(Jobid);
        $('#deleteModal').modal('show');
    });


    //adminMessageDelete
    $('.AdminDeleteContact').click(function (e) {
        e.preventDefault();

        var Messageid = $(this).data("value");
        $('#AdminMessageid').val(Messageid);
        $('#AdmindeleteMessageModal').modal('show');
    });

    //adminMessageDeletePermanent
    $('.AdminDeleteJobsPermanent').click(function (e) {
        e.preventDefault();

        var Messageid = $(this).data("value");
        $('#PermanentAdminJobid').val(Messageid);
        $('#AdmindeletePermanentModal').modal('show');
    });

});
//search
jQuery(document).ready(function ($) {
    $(document).on("input", ".adminsearch", function () {
        var value = $(this).val();
        var verified = $('#verified').val();
        var verify = $('#verify').val();
        var url;
        if(verified){
            url = '/AdminVerifiedsearch';
        }else if(verify){
            url = '/AdminVerifysearch';
        }else{
            url = '';
        }
        $.ajax({
            type:"GET",
            url: url,
            dataType:"html",
            data: {
                value:value,
            },
            success:function(t){
                console.log(t);
                if(url === '/AdminVerifiedsearch'){
                    $("#Verifiedsearch").html(t);
                }
                if(url === '/AdminVerifysearch'){
                    $("#VerifySearch").html(t);
                }
            }
        }); 
    });
});  
