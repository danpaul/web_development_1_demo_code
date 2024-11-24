window.addEventListener("load", (event) => {
  const myModal = document.getElementById("exampleModal");
  const saveButton = document.getElementById("save-button");

  myModal.addEventListener("shown.bs.modal", () => {
    console.log("model opened");
  });

  saveButton.addEventListener("click", () => {
    console.log("save button clicked");
  });
});
