// program to display the sum of natural numbers

function sumInput() {
    let numbers = [];

    while (true) {
        let value = prompt("Enter a number? ");

        // Check if the user cancels or provides no input
        if (value === "" || value === null) {
            // Ask the user if they want to enter more numbers (Y for yes, N for no)
            let moreInput = prompt("Do you want to enter more numbers? (Y/N) : ").toUpperCase();
            if (moreInput !== "Y") {
                // If the user enters "N" or anything other than "Y", exit the loop
                break;
            }
        } else {
            // If the user enters a number, add it to the 'numbers' array
            numbers.push(+value);
        }
    }

    // Calculate the sum of all entered numbers
    let sum = 0;
    for (let number of numbers) {
        sum += number;
    }
    return sum;
}

// Display the total sum to the console
console.log("Total:" + sumInput());
