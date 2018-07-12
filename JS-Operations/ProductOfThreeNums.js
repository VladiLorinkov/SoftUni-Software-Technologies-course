function f([x, y, z]) {
    let countNegative = 0;
    if (x < 0) countNegative++;
    if (y < 0) countNegative++;
    if (z < 0) countNegative++;

    if (x === 0 || y === 0 || z === 0) {
        console.log("Positive")
    } else {
        if (countNegative % 2 !== 0) {
            console.log("Negative")
        } else {
            console.log("Positive")
        }
    }
}

f([-3,-5,4])