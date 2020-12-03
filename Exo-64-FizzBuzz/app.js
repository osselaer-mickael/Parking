for (let confizz = 1; confizz <= 100; confizz++) {

    if (((confizz % 3) === 0) && ((confizz % 5) !== 0)){
        console.log("fizz");
    }

    else if (((confizz % 5) === 0) && ((confizz % 3) !== 0)) {
        console.log("buzz");
    }

    else if (((confizz % 3) === 0) && ((confizz % 5) === 0)) {
        console.log("fizzbuzz");
    }

    else{
        console.log(confizz);
    }
}



