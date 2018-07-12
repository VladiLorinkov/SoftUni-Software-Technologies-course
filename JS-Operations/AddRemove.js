function solve(arr) {
    let result = [];
    for (let i = 0; i < arr.length; i++) {
        let input = arr[i].split(' ');
        let command = input[0];
        let num = Number(input[1]);

        if (command === "add") {
            result.push(num);
        }

        if (command === "remove") {
            if (num < result.length) {
                result.splice(num, 1)
            }
        }
    }
    for (let i = 0; i < result.length; i++) {
        console.log(result[i]);
    }
}

solve(["add 3", "add 5", "remove 1","add 2"])