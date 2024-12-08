// Variables and Data Types
// Declaring variables using `let`, `const`, and `var` (prefer `let` and `const` in modern JS)
let userName = "Alice"; // String
const age = 25; // Number
let isStudent = true; // Boolean
let hobbies = ["reading", "coding", "hiking"]; // Array

// Functions
/**
 * A function to greet the user.
 * @param {string} name - The name of the user.
 * @returns {string} A greeting message.
 */
function greetUser(name) {
  return `Hello, ${name}! Welcome to JavaScript basics.`;
}

// Conditional Statements
/**
 * Determines if the user is an adult.
 * @param {number} age - The user's age.
 * @returns {string} A message indicating if the user is an adult or not.
 */
function checkAdult(age) {
  if (age >= 18) {
    return "You are an adult.";
  } else {
    return "You are not an adult yet.";
  }
}

// Loops
/**
 * Prints all elements in an array.
 * @param {Array} array - An array of items.
 */
function printHobbies(array) {
  console.log("Your hobbies are:");
  for (let i = 0; i < array.length; i++) {
    console.log(`- ${array[i]}`);
  }
}

// Using the Code
console.log(greetUser(userName)); // Prints: Hello, Alice! Welcome to JavaScript basics.
console.log(checkAdult(age)); // Prints: You are an adult.
printHobbies(hobbies); // Prints each hobby in the array

// Arrow Functions (ES6+)
// A shorter syntax for functions
const add = (a, b) => a + b;
console.log(`The sum of 5 and 3 is: ${add(5, 3)}`); // Prints: The sum of 5 and 3 is: 8

// Objects
// Creating and accessing object properties
let user = {
  name: "Alice",
  age: 25,
  isStudent: true,
  greet: function () {
    return `Hi, I'm ${this.name} and I'm ${this.age} years old.`;
  },
};

console.log(user.greet()); // Prints: Hi, I'm Alice and I'm 25 years old.
