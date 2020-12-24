// JSON

//JS-- Java Script
//O--> Object
//N --> Notation


// let testArray=["Shams","Amir","Manik","Atik"];
// console.log(testArray[2]);

let manikInfo={
    "Name":"Manik",
    "Age":"16",
    "Address":"Natore"
};
// console.log(manikInfo['Address']);

let jsonDataType={
    "String":"This is string Data",
    "Number":500,
    "Boolean":false,
    "Array":["Shams","Amir","Manik","Atik"],
    "JSONData":{
        "test1":"Test Value",
        "test2":600,
        "JSONThree":{
            "Name":"Sobuj"
        }
    }
};

// console.log(jsonDataType["JSONData"]["test1"]);
console.log(jsonDataType.Array[1]);

console.log(jsonDataType["JSONData"]["JSONThree"]["Name"]);
