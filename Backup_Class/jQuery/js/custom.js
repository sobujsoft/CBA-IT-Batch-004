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
	$('#headOne').hide('slow',function (){
		alert("Hide Done");
	});
});




$('#showTwoBtn').click(function(){
	$('#headTwo').show();
});

$('#toggleBtn').click(function(){
	$('#headThree').toggle();
	$('#headOne').toggle();
});

$('#fadeOut').click(function (){
	$('#divOne').fadeOut();
});

$('#fadeInBtn').click(function (){
	$('#divtwo').fadeIn();
});

//fadeToggle();
//slideUp()
//slideDown()
//slideToggle()

$('#slideDownBtn').dblclick(function (){
	$('#slideDownDiv').slideToggle();
})


//data get
$('#nameID').keyup(function (){
	let name= $('#nameID').val();
	// let HeadingOne= $('#headOne').text();

	$('#nameData').html(name);

})

//set



