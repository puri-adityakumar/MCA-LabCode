// Function to convert from Celsius to Fahrenheit
function celsiusToFahrenheit(celsius) {
  return (celsius * 9/5) + 32;
}

// Function to convert from Fahrenheit to Celsius
function fahrenheitToCelsius(fahrenheit) {
  return (fahrenheit - 32) * 5/9;
}

// Function to handle the conversion based on user input
function temperatureConversion() {
  const choice = prompt("Enter 'C' to convert from Celsius to Fahrenheit or 'F' to convert from Fahrenheit to Celsius:");
  
  if (choice === 'C' || choice === 'c') {
    const celsius = parseFloat(prompt("Enter the temperature in Celsius:"));
    const fahrenheit = celsiusToFahrenheit(celsius);
    console.log(`${celsius}°C is equal to ${fahrenheit}°F`);
  } else if (choice === 'F' || choice === 'f') {
    const fahrenheit = parseFloat(prompt("Enter the temperature in Fahrenheit:"));
    const celsius = fahrenheitToCelsius(fahrenheit);
    console.log(`${fahrenheit}°F is equal to ${celsius}°C`);
  } else {
    console.log("Invalid choice. Please enter 'C' or 'F'.");
  }
}

// Call the function to start the conversion
temperatureConversion();
