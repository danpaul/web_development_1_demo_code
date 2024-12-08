function addItem() {
  const textarea = document.getElementById("todoText");

  const description = textarea.value;

  const itemList = document.getElementById("itemList");

  const col = document.createElement("div");
  col.className = "col-md-6 col-xxl-4 mb-3";
  const card = document.createElement("div");
  card.className = "card h-100";
  const cardBody = document.createElement("div");
  cardBody.className = "card-body";

  const paragraph = document.createElement("p");
  const paragraphContent = document.createTextNode(description);

  const cardFooter = document.createElement("div");
  cardFooter.className = "card-footer";

  const deleteButton = document.createElement("button");
  deleteButton.className = "btn btn-danger";
  deleteButton.innerHTML = "Delete";
  deleteButton.addEventListener("click", () => {
    itemList.removeChild(col);
  });

  paragraph.appendChild(paragraphContent);
  cardBody.appendChild(paragraph);
  card.appendChild(cardBody);
  cardFooter.appendChild(deleteButton);
  card.appendChild(cardFooter);
  col.appendChild(card);
  itemList.appendChild(col);

  textarea.value = "";
}
