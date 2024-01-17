let buttonShowMore = document.getElementsByClassName('show-more')[0];
let ourProductsItem = document.getElementsByClassName('our-products__items')[0];
buttonShowMore.addEventListener('click', function() {
    let clone = ourProductsItem.cloneNode(true);
    ourProductsItem.after(clone);
  });