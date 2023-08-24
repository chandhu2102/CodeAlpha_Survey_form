// script.js

const totalPages = 5; // Adjust the total number of pages

let currentPage = 1;

function nextPage(nextPageNumber) {
  document.getElementById(`page${currentPage}`).style.display = 'none';
  document.getElementById(`page${nextPageNumber}`).style.display = 'block';
  currentPage = nextPageNumber;

  // Update progress bar
  const progress = ((currentPage - 1) / (totalPages - 1)) * 100;
  document.querySelector('.progress-line').style.width = `${progress}%`;
}

function prevPage(prevPageNumber) {
  document.getElementById(`page${currentPage}`).style.display = 'none';
  document.getElementById(`page${prevPageNumber}`).style.display = 'block';
  currentPage = prevPageNumber;

  // Update progress bar
  const progress = ((currentPage - 1) / (totalPages - 1)) * 100;
  document.querySelector('.progress-line').style.width = `${progress}%`;
}

// Load the first page
window.onload = () => {
  nextPage(1);
};




