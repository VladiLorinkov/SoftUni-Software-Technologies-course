function solve(arr) {
    let result = [];
    let searchKey = arr[arr.length - 1];
    for (let i = 0; i < arr.length - 1; i++) {
        let input = arr[i].split(' ');
        let key = input[0];
        let value = input[1];
        result[key] = value;
    }

    if (result[searchKey] === undefined) {
        console.log("None")
    }
    else {

        console.log(result[searchKey]);
    }
}

solve(["pesho kon", "pesho kobila", "pesheo"])