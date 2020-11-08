let student=['Ariful','Apon Vai','Nazmul Vai'];
let teacher=['Sobuj','Imran Vai'];
let support=['Iqbal Vai','Jahid'];

let allArray=[student,teacher,support];

//array de-structuring
// var [a,b,c]=student;
// console.log(b);

var myMap= new Map();
myMap.set('name','Sobuj');
myMap.set('email','sobuj11bd@gmail.com');
myMap.set('phone','01744827686');


// myMap.delete('email');
// myMap.clear();

if (myMap.has('phone')){
    console.log('Ache');
}
else {
    console.log('Nai');
}
