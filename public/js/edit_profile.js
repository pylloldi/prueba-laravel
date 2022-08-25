window.onload = function () {
    const update_password = document.querySelector("#update_password");
    const old_password = document.querySelector("#old_password");
    update_password.addEventListener('click', (event) => {
        if(update_password.checked){
            console.log("checked");
            old_password.removeAttribute("disabled");
            old_password.focus();
            password.removeAttribute("disabled");
            password_confirmation.removeAttribute("disabled");
        }    
    });
}