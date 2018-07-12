function f(arr) {
    let length = Number(arr[0]);
    let result = [];

    for (let i = 0; i < length; i++) {
        result[i]=0;
    }

    for (let i = 1; i < arr.length;i++) {
        let splitted = arr[i].split(' - ');
        let index = splitted[0];
        let value = splitted[1];
        result[index]=value;
    }

    for (let i = 0; i < result.length; i++) {
        console.log(result[i]);
    }
}

