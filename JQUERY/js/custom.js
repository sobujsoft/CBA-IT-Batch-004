//jquery basic syntax

// document.querySelector('#hello');



$('#testBtn').click(function (){
    $('#hello').hide("3000");
});

$('#showID').click(function(){
    $('#hello').show();
});

$('#toggleBtn').click(function (){
    $('#hello').toggle();
});

$(document).ready(function (){
    $('#fadeInBtn').click(function (){
        $('#redDiv').fadeOut();
        $('#greenDiv').fadeOut(2000);
        $('#blueDiv').fadeOut(3000);
    });
});

$(document).ready(function (){
    $('#slide').click(function (){
        $('#slideDown').slideToggle(3000);
    })
})

$('#arafatBtn').click(function (){
    //data get
    let arafatName= $('#arafat').html();
    //data set
    $('#setValue').html(arafatName);
})