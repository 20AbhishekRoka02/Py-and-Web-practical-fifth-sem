function fizzBuzz() {
    let result="";
    let divby3, divby5;
    for(let i=0; i<=100; i++){
        divby3 = (i%3==0);
        divby5 = (i%5==0);
        if (divby5 && divby3){
            result += "<p>fizz buzz</p>";
        } else if (divby3) {
            result+="<p>fizz</p>";
        } else if (divby5) {
            result+="<p>buzz</p>";          
        } else{
            result+="<p>"+i+"</p>";
        }
    }
    document.getElementById("results").innerHTML=result;    
}
window.onload=fizzBuzz;