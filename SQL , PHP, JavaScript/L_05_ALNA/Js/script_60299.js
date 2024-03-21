let towns = ["Warsaw", "London" ,"Madrid"];
let products =["monitor","computer","keyboard","Cpu"];
let quantity =[1,2,3,4,5,6,7,8];


function startStart(){
    console.log("Hello");
    let selectTown = document.getElementById("selectTown");
    for (let town of towns){
        console.log(town);
        let option = document.createElement('option');
        option.value = option.innerHTML = town;
        selectTown.appendChild(option);
    } 
        
}

function startorder(){
    orderProducts();
} 

   function orderProducts()  {
    let select1= document.getElementById("select1");
    let select2= document.getElementById("select2");
    let select3= document.getElementById("select3");

    for (let product of products) {
        
        let option1 = documen.createElement('option');
        option1.value = option1.innerHTML = product;
        select1.appendChild(option1);
        
        let option2 = documen.createElement('option');
        option2.value = option2.innerHTML = product;
        select2.appendChild(option2);
        
        let option3 = documen.createElement('option');
        option3.value = option3.innerHTML = product;
        select3.appendChild(option3);
        
    }
}