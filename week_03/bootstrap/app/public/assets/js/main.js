window.addEventListener("load", (event) => {
  const myModal = document.getElementById("exampleModal");
  const saveButton = document.getElementById("save-button");

  if (myModal) {
    myModal.addEventListener("shown.bs.modal", () => {
      console.log("model opened");
    });
  }

  if (saveButton) {
    saveButton.addEventListener("click", () => {
      console.log("save button clicked");
    });
  }
});
