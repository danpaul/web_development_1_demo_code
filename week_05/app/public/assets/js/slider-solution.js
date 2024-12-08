function changeBackgroundColor() {
  // Get the values of the sliders
  const red = document.getElementById("redSlider").value;
  const green = document.getElementById("greenSlider").value;
  const blue = document.getElementById("blueSlider").value;

  // Set the background color using RGB values
  document.body.style.background = `rgb(${red}, ${green}, ${blue})`;
}
