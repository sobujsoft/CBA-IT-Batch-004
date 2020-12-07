/* let testHead= document.getElementById('headOne');

let testHead=document.querySelector('#headOne');

console.log(testHead.innerHTML);


$(selector).action();
*/

//$ is sign to define/access jQuery

//selector --> to find HTML element

//action 

// let headOne= $('#headOne').html();
// console.log(headOne);


// $('#headTwo').hide();

// $('#headThree').show();



$('#hideOneBtn').click(function(){
	$('#headOne').hide();
});

$('#showTwoBtn').click(function(){
	$('#headTwo').show();
});

$('#toggleBtn').click(function(){
	$('#headThree').toggle();
	$('#headOne').toggle();
});
