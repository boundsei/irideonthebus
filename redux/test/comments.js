// Function to add a new comment to the comments container
function addComment(comment) {
  const container = document.getElementById('comments-container');

  const commentElement = document.createElement('div');
  commentElement.className = 'comment';
  commentElement.textContent = comment;

  container.appendChild(commentElement);
}

// Function to handle form submission
function handleFormSubmit(event) {
  event.preventDefault();

  // Get the comment input value
  const commentInput = document.getElementById('comment-input');
  const comment = commentInput.value;

  // Add the comment to the comments container
  addComment(comment);

  // Clear the comment input
  commentInput.value = '';
}

// Event listener for form submission
const commentForm = document.getElementById('comment-form');
commentForm.addEventListener('submit', handleFormSubmit);
