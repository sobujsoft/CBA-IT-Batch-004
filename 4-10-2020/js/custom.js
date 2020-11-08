
console.log("Hello Console");
let student=["Arafat","Mahim","Nazmul Vai","Apon Vai","Shaiekh","Ariful","Chandan Vai"];
console.log(student[1]);

for(let i=0;i<10;i=i+1){
	console.log(i+"Loop Number");
}

for(let i=0;i<student.length;i=i+1){
	console.log(student[i]);
}


let newArray=["a","b","c","d","a","b","c","d","a","b","c","d","a","b","c","d","a","b","c","d"];
let arrayLength=newArray.length;
console.log(arrayLength);
console.log(newArray[2]);

for(let i=0;i<newArray.length;i++){
	console.log(newArray[i]);
}

console.log('4/10/2020-CLass Start');

let studetArray=["Arafat","Mahim","Nazmul Vai","Apon Vai","Shaiekh","Ariful","Chandan Vai"];

for(let i=0;i<studetArray.length;i++){
	console.log(studetArray[i]);
}

//while loop
console.log('Student List:');
let i=0;
while(i<studetArray.length){
	console.log(studetArray[i]);

	i++;
}

//do while loop

let j=0;

do{
	console.log(j);
	j++;
}while(j<15)

//if

let name="Sobuj";

if(name=="Sobuj"){
	console.log('Hello Vaiya');
}
else{
	console.log('Chole Jan');
}

let balance=500;
let withdraw=300;
if(withdraw>balance){
	console.log('Oi tor taka nai');
}else{
	console.log('Welcome');
}


let studentCheck="I am Sobuj";

if (studentCheck=="I am Apon") {
	console.log('Welcome Apon Vai')
} 
else if(studentCheck=="I am Khaled"){
	console.log('Welcome Khaled Vai')
}
else if(studentCheck=="I am Nazmul"){
	console.log('Welcome Nazmul Vai');
}
else{
	console.log('Who are you');
}
