function largestOf3() {
    
    const numCollection = document.getElementsByClassName('nums');
    let maxnum = Number.NEGATIVE_INFINITY;
    let num;
    for (let i of numCollection) {
        num = Number(i.value);
        if (num  > maxnum){
            maxnum=num;
        }
    }
    document.getElementById('output').value = maxnum;
}

function isVowel() {
    let alpha = document.getElementById('alpha').value;
    let result=false;
    switch (alpha[0]) {
        case 'a':
        case 'e':
        case 'i':
        case 'o':
        case 'u':
            result=true;
            break;
    
        default:
            break;
    }
    document.getElementById('boolOutput').value = result;
    
}