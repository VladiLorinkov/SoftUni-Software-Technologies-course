function solve([num1, num2]) {
    let x = num1;
    let n = num2;
    let result;
    if (n >= x) {
        result = x*n;
    } else {
        result = x/n;
    }

    console.log(result);
}

solve([3, 2])