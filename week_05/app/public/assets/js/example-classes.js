/**
 * Class representing a person.
 */
class Person {
  /**
   * Create a person.
   * @param {string} name - The name of the person.
   * @param {number} age - The age of the person.
   */
  constructor(name, age) {
    this.name = name;
    this.age = age;
  }

  /**
   * Introduce the person.
   * @returns {string} Introduction message.
   */
  introduce() {
    return `Hi, I'm ${this.name} and I'm ${this.age} years old.`;
  }

  /**
   * Determine if the person is an adult.
   * @returns {boolean} True if adult, false otherwise.
   */
  isAdult() {
    return this.age >= 18;
  }
}

// Subclass (Inheritance)
class Student extends Person {
  /**
   * Create a student.
   * @param {string} name - The name of the student.
   * @param {number} age - The age of the student.
   * @param {string} major - The major subject of the student.
   */
  constructor(name, age, major) {
    super(name, age); // Call the parent class constructor
    this.major = major;
  }

  /**
   * Introduce the student.
   * @returns {string} Extended introduction for the student.
   */
  introduce() {
    return `${super.introduce()} I study ${this.major}.`;
  }
}

// Using the Class
const alice = new Person("Alice", 25);
console.log(alice.introduce()); // Hi, I'm Alice and I'm 25 years old.
console.log("Is Alice an adult?", alice.isAdult()); // true

let bob = new Student("Bob", 20, "Computer Science");
console.log(bob.introduce()); // Hi, I'm Bob and I'm 20 years old. I study Computer Science.
console.log("Is Bob an adult?", bob.isAdult()); // true
