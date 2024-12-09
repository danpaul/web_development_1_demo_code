// Simulate fetching user data asynchronously
async function fetchUser() {
  return new Promise((resolve) => {
    setTimeout(() => {
      resolve({ name: "Alice", age: 25, location: "Wonderland" });
    }, 1000);
  });
}

// Asynchronous function to handle the data
async function getUserInfo() {
  const user = await fetchUser(); // Wait for user data
  const { name, age, location } = user; // Object destructuring
  console.log(`Name: ${name}, Age: ${age}, Location: ${location}`);
}

// Call the function
getUserInfo();
