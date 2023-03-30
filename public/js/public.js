const text = document.getElementById("text");
  const showMoreBtn = document.querySelector("button:nth-of-type(1)");
  const showLessBtn = document.querySelector("button:nth-of-type(2)");

  function showMore() {
    text.style.height = "auto"; /* Set the height to auto to show all text */
    showMoreBtn.style.display = "none"; /* Hide the Show more button */
    showLessBtn.style.display = "inline-block"; /* Show the Show less button */
  }

  function showLess() {
    text.style.height = "100px"; /* Set the height to the original height */
    showLessBtn.style.display = "none"; /* Hide the Show less button */
    showMoreBtn.style.display = "inline-block"; /* Show the Show more button */
  }