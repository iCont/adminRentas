const new_renter_button = document.querySelector("#new_renter_button");
const modal_windows = document.querySelector("#modal_windows");
let modal_alert_windows = document.querySelector(".modal_alert_windows_m");
const close_modal = document.querySelector(".close_modal");
const close_modal_id = document.querySelector("#close_modal_id");
const close_modalAlert = document.querySelector(".close_modalAlert");
const close_modalAlert2 = document.querySelector(".close_modalAlert2");
const alert_success_wrapper = document.querySelector("#alert_success_wrapper");
const button_delete = document.querySelector("#button_delete");
const edit_button = document.querySelector("#edit_button");

new_renter_button.addEventListener('click', launchModal);
close_modal.addEventListener('click', closeModal);
close_modal_id.addEventListener('click', closeModal);
close_modalAlert.addEventListener('click', closeModalAlert);
close_modalAlert2.addEventListener('click', closeModalAlert);
button_delete.addEventListener('click', delete_isConfirmed);
edit_button.addEventListener('click', launchModal);

function launchModal() {
    if (modal_windows.classList.contains('modal_no-visible')) {
        modal_windows.classList.remove('modal_no-visible');
        modal_windows.classList.add('modal_is-visible');
    }
}

function closeModal() {
    if (modal_windows.classList.contains('modal_is-visible')) {
        modal_windows.classList.remove('modal_is-visible');
        modal_windows.classList.add('modal_no-visible');
    }
}

function closeModalAlert() {
    if (modal_alert_windows.classList.contains('modal_is-visible')) {
        modal_alert_windows.classList.remove('modal_is-visible');
        modal_alert_windows.classList.add('modal_no-visible');
    }
}

function launchModal_edit() {
    if (modal_windows_edit.classList.contains('modal_no-visible')) {
        modal_windows_edit.classList.remove('modal_no-visible');
        modal_windows_edit.classList.add('modal_is-visible');
    }
}

function closeModal_edit() {
    if (modal_windows_edit.classList.contains('modal_is-visible')) {
        modal_windows_edit.classList.remove('modal_is-visible');
        modal_windows_edit.classList.add('modal_no-visible');
    }
}

function delete_renter($id) {
    // e.preventDefault();
    $("#id_renter").val($id);
    let id_rent = $("#id_renter").val($id);
    let modal = document.getElementById('modal_alert_windows' + $id);
    if (modal.classList.contains('modal_no-visible')) {
        modal.classList.remove('modal_no-visible');
        modal.classList.add('modal_is-visible');
    }
}

// $('.form_delete').submit(function(e) {
// });
// $('.form_delete').submit(function(e) {
//     e.preventDefault();
//     if(modal_alert_windows.classList.contains('modal_no-visible')){
//         modal_alert_windows.classList.remove('modal_no-visible');
//         modal_alert_windows.classList.add('modal_is-visible');
//     }
// });

function delete_isConfirmed() {
    // alert($id);
    let userURL = $(this).data('url');
    $.ajax({
        url: userURL,
        type: 'DELETE',
        dataType: 'json',
        success: function (result) {
            // bla bla
        }
    });
    // document.getElementById("form_delete_id").submit();
}
