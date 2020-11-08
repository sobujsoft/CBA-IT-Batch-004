let name=document.querySelector('#NameID');
let email=document.querySelector('#EmailID');
let password=document.querySelector('#PasswordID');
let confirmPassword=document.querySelector('#ConfirmPasswordID');
let submitBtn=document.querySelector('#SubmitBtnID');

submitBtn.addEventListener('click',()=>{
	if(name.value===""){
		alert('Name Required!');
	}
	else if(email.value===""){
		alert('Email Required!');
	}
	else if(password.value===""){
		alert('password Required!');
	}
	else if(confirmPassword.value===""){
		alert('confirmPassword Required!');
	}
	else if(confirmPassword.value != password.value){
		alert('Password Should be Matched!');
	}
});