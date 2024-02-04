let buttonShowMore = document.getElementsByClassName('show-more')[0];
let ourProductsItem = document.getElementsByClassName('our-products__items')[0];
buttonShowMore.addEventListener('click', function() {
    let clone = ourProductsItem.cloneNode(true);
    ourProductsItem.after(clone);
  });
  function openModal() {
    document.querySelector('.modal').style.display = 'flex';
}

function closeModal() {
    document.querySelector('.modal').style.display = 'none';
}