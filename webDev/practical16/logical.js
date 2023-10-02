function loadThings() {
    let num1 = Number(document.getElementById("num1").value);
    let num2 = Number(document.getElementById("num2").value);
    let output = document.getElementById("output");
    return [num1,num2, output];    
}

function dologic(params) {
    [num1,num2, output]=loadThings();
    // console.log(num1,num2,output);
    if (isNaN(num1) || isNaN(num2)) {
        alert("Input must be a number.");
    } else{
        switch (params) {
            case 'and':
                output.value = (num1 && num2)
                break;
            case 'or':
                output.value = (num1 || num2)
                break;
            case 'not':
                output.value = !num1 +" " + !num2;
                break;
        
            default:
                break;
        }

    }

}