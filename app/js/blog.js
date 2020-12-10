export default function blog() {
  const blogWrapper = document.querySelector('.home-blog-wrapper');
  const blogItemsArray = document.querySelectorAll('.blog-item');
  const leftButtons = document.querySelectorAll('.blog-controls-left');
  const rightButtons = document.querySelectorAll('.blog-controls-right');
  let actualSlide = 0;

  if (!blogWrapper) return null;

  blogItemsArray[0].classList.add('ativo');

  setHeight(blogWrapper, blogItemsArray);
  window.addEventListener('resize', () => setHeight(blogWrapper, blogItemsArray));

  leftButtons.forEach(button => {
    button.addEventListener('click', e => {
      if (actualSlide === 0) {
        actualSlide = blogItemsArray.length - 1;
        
        setAndRemoveClass(blogItemsArray, blogItemsArray[actualSlide]);
      } else {
        actualSlide--;
        
        setAndRemoveClass(blogItemsArray, blogItemsArray[actualSlide]);
      }
    });
  });

  rightButtons.forEach(button => {
    button.addEventListener('click', e => {
      if (actualSlide === blogItemsArray.length - 1) {
        actualSlide = 0;
        
        setAndRemoveClass(blogItemsArray, blogItemsArray[actualSlide]);
      } else {
        actualSlide++;
        
        setAndRemoveClass(blogItemsArray, blogItemsArray[actualSlide]);
      }
    });
  });
}

function setHeight(blogWrapper, blogItemsArray) {
  const blogHeight = Array.from(blogItemsArray).reduce((acc, item) => {    
    if (item.clientHeight > acc) {
      return item.clientHeight;
    } else {
      return acc;
    }
  }, 0);

  blogWrapper.style.setProperty('height', `${blogHeight}px`)
}

function setAndRemoveClass(blogItemsArray, blogItem) {
  blogItemsArray.forEach(item => {
    item.classList.remove('ativo');
  });

  blogItem.classList.add('ativo');
}
