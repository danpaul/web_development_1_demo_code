// JavaScript code
async function fetchAndDisplayArticles() {
  try {
    // Fetch articles from the endpoint
    const response = await fetch("/api/articles");

    if (!response.ok) {
      throw new Error(`HTTP error! status: ${response.status}`);
    }

    const articles = await response.json();

    // Get the container element where articles will be displayed
    const articlesContainer = document.getElementById("articles-container");

    // Clear any existing content
    articlesContainer.innerHTML = "";

    // Iterate through the articles and create HTML for each
    articles.forEach((article) => {
      const articleCard = document.createElement("div");
      articleCard.className = "card mb-3";

      articleCard.innerHTML = `
                  <div class="card-body">
                      <h5 class="card-title">${article.title}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">By ${
                        article.author
                      } on ${new Date(article.datetime).toLocaleString()}</h6>
                      <p class="card-text">${article.content}</p>
                  </div>
              `;

      articlesContainer.appendChild(articleCard);
    });
  } catch (error) {
    console.error("Error fetching articles:", error);
    const articlesContainer = document.getElementById("articles-container");
    articlesContainer.innerHTML =
      '<div class="alert alert-danger">Failed to load articles. Please try again later.</div>';
  }
}

// Function to handle form submission
async function submitArticle(event) {
  console.log("submitting article");

  event.preventDefault();

  // Get form values
  const title = document.getElementById("article-title").value;
  const content = document.getElementById("article-content").value;
  const author = document.getElementById("article-author").value;

  // Validate inputs
  if (!title || !content || !author) {
    alert("All fields are required!");
    return;
  }

  const newArticle = {
    title,
    content,
    author,
    datetime: new Date().toISOString(),
  };

  try {
    const response = await fetch("/api/article", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(newArticle),
    });

    if (!response.ok) {
      throw new Error(`HTTP error! status: ${response.status}`);
    }

    // Clear the form
    document.getElementById("article-form").reset();

    // Reload articles
    fetchAndDisplayArticles();
  } catch (error) {
    console.error("Error submitting article:", error);
    alert("Failed to submit the article. Please try again.");
  }
}

// Call the fetch function when the DOM is fully loaded
document.addEventListener("DOMContentLoaded", () => {
  fetchAndDisplayArticles();

  // Attach form submit handler
  document
    .getElementById("article-form")
    .addEventListener("submit", submitArticle);
});
