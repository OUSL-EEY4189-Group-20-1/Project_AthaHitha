let currentIndex = 0;
const images = document.querySelectorAll('.child-container img');
const imageView = document.getElementById('image-view');
const fullscreenImg = document.getElementById('fullscreen-img');

function openImageView(index) {
  currentIndex = index;
  updateFullscreenImage();
  imageView.style.display = 'flex';
}

function closeImageView() {
  imageView.style.display = 'none';
}

function changeImage(offset) {
  currentIndex += offset;
  if (currentIndex < 0) {
    currentIndex = images.length - 1;
  } else if (currentIndex >= images.length) {
    currentIndex = 0;
  }
  updateFullscreenImage();
}

function updateFullscreenImage() {
  fullscreenImg.src = images[currentIndex].src;
}

// Attach click event listeners to each image
images.forEach((image, index) => {
  image.addEventListener('click', () => openImageView(index));
});

// Close the fullscreen view if clicked outside the image
window.addEventListener('click', (event) => {
  if (event.target === imageView) {
    closeImageView();
  }
});

// Close the fullscreen view on pressing the 'Esc' key
document.addEventListener('keydown', (event) => {
  if (event.key === 'Escape') {
    closeImageView();
  }
});
