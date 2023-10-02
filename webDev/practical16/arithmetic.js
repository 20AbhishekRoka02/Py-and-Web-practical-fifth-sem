function loadThings() {
    let num1 = Number(document.getElementById("num1").value);
    let num2 = Number(document.getElementById("num2").value);
    let output = document.getElementById("output");
    return [num1,num2, output];    
}

function domath(type) {
    [num1,num2, output]=loadThings();
    let result;
    if (isNaN(num1) || isNaN(num2)) {
        alert("Input must be a number.");
    }
    else{
        switch (type) {
            case '+':
                result = num1 + num2;
                break;
            case '-':
                result = num1 - num2;
                break;
            case 'x':
                result = num1 * num2;
                break;
    
            case '/':
                result = num1 / num2;
                break;
            case '%':
                result = num1 % num2;
                break;
            case '**':
                result = num1 ** num2;
                break;
            case '++':
                num1++;
                num2++;
                document.getElementById("num1").value = num1;
                document.getElementById("num2").value = num2;
                break;
            case '--':
                num1--;
                num2--;
                document.getElementById("num1").value = num1;
                document.getElementById("num2").value = num2;
                break;    
            default:
                break;
        }
        output.value = result;
    }
}

