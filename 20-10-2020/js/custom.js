

// let paragraph=document.querySelector('#paraID');
// paragraph.setAttribute('href','sobuj.net');
// console.log(paragraph);

let text= document.querySelector('#textID');
let btn= document.querySelector('#btnID');
let hideBtn=document.querySelector('#hideBtnID');

btn.addEventListener('click',()=>{
	text.innerHTML='I am changed';
	text.classList.add('backGround');
	text.classList.remove('hide');
});

hideBtn.addEventListener('click',()=>{
	text.classList.add('hide');
});


let ulContent=document.querySelector('#ulID');
let repeatBtn=document.querySelector('#RepeatBtn');
repeatBtn.addEventListener('click',()=>{

	let newElement=document.createElement('li');
	newElement.textContent="Meat";
	ulContent.append(newElement);
});


let newDiv=document.querySelector('#newDivID');
let addNew=document.querySelector('#addNewBtn');

addNew.addEventListener('click',()=>{
	let newHead= document.createElement('h1');
	newHead.innerHTML="Hello World";
	newDiv.append(newHead);
});

