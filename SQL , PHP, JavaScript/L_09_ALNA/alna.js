// 1
const number = [1,2,3,4];

const newArr = number.map(Myfunc);

function Myfunc(num) {
    return num*2;
}
console.log( newArr );

// 2

  function titleCase(str) {
    return str.toLowerCase().split(' ').map(function(word) {
      return (word.charAt(0).toUpperCase() + word.slice(1));
    }).join(' ');
  };


console.log(titleCase("I'm a little tea pot"));








// 3
let bob =[1,2,-3,5,-6,1,-2,4];

 bob = bob.filter(
    function (x){
        return x > -1;
    }
);

console.log(bob);







// 4
    const numArr = [1,10,2,28,4];

    function myfunc(numArr)
    {
        return Math.max.apply(null,numArr);
    }
    console.log( myfunc(numArr));







