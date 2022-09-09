const new_renter_button = document.querySelector("#new_renter_button");
const modal_windows = document.querySelector("#modal_windows");
const close_modal = document.querySelector("#close_modal");

new_renter_button.addEventListener('click',lauchModal);
close_modal.addEventListener('click',closeModal);

function lauchModal(){
    if(modal_windows.classList.contains('modal_no-visible')){
        console.log('quitar visible');
        modal_windows.classList.remove('modal_no-visible');
        modal_windows.classList.add('modal_is-visible');
    }
}

function closeModal(){
    if(modal_windows.classList.contains('modal_is-visible')){
        modal_windows.classList.remove('modal_is-visible');
        modal_windows.classList.add('modal_no-visible');
    }
}
