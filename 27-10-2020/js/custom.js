let email= document.querySelector('#emailID');
let password= document.querySelector('#passwordID');
let conPassword= document.querySelector('#conPasswordID');
let details= document.querySelector('#detailsID');
let check= document.querySelector('#checkID');
let submit= document.querySelector('#submitID');

submit.addEventListener('click',()=>{
    if (email.value===''){
        toastr.error('Email Required!');
    }
    else if (password.value===''){
        toastr.error('Password Required!');
    }
})

