// Different Types of Functions

// 1. Function Declaration
function greet(name) {
  return `Hello, ${name}!`;
}

// 2. Function Expression
const greetExpression = function (name) {
  return `Hi, ${name}!`;
};

// 3. Arrow Function
const greetArrow = (name) => `Hey, ${name}!`;

// 4. Immediately Invoked Function Expression (IIFE)
(function () {
  console.log("This is an IIFE and runs immediately upon definition.");
})();

// 5. Higher-Order Function
const applyToNumber = (num, operation) => operation(num);
const double = (x) => x * 2;
console.log(applyToNumber(5, double)); // Prints: 10

// Array Methods

let numbers = [1, 2, 3, 4, 5];

// 1. forEach - Iterates over each element
numbers.forEach((num) => console.log(`Number: ${num}`));

// 2. map - Creates a new array by transforming elements
let doubledNumbers = numbers.map((num) => num * 2);
console.log("Doubled Numbers:", doubledNumbers); // [2, 4, 6, 8, 10]

// 3. filter - Creates a new array with elements that pass a condition
let evenNumbers = numbers.filter((num) => num % 2 === 0);
console.log("Even Numbers:", evenNumbers); // [2, 4]

// 4. reduce - Reduces the array to a single value
let sum = numbers.reduce((acc, num) => acc + num, 0);
console.log("Sum of Numbers:", sum); // 15

// 5. find - Returns the first element that matches a condition
let firstOdd = numbers.find((num) => num % 2 !== 0);
console.log("First Odd Number:", firstOdd); // 1

// 6. every - Checks if all elements satisfy a condition
let allPositive = numbers.every((num) => num > 0);
console.log("Are all numbers positive?", allPositive); // true

// 7. some - Checks if at least one element satisfies a condition
let hasNegative = numbers.some((num) => num < 0);
console.log("Are there any negative numbers?", hasNegative); // false
