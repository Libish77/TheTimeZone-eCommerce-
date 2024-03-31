import { clockList } from "./productsList.js";

const prod = document.querySelector(".products");
// Function to render a single product
function renderProduct(product) {
    const htmlData = `
          <div class="card" data-product-id="${product.id}">
           
            <img src=".${product.location}" alt="image1" class="responsiveImage">
          
            <div class="clock-details">
                <h5><b>${product.code}</b></h4> 
                <h4><b> ${product.title}</b></h4> 
                <h5> CAD ${product.price}</h5> 
            </div>
          </div>`;
    return htmlData;
  }
  
  // Function to render all products
  function renderAllProducts() {
    prod.innerHTML = "";
    clockList.forEach((product) => {
      prod.insertAdjacentHTML("beforeend", renderProduct(product));
    });
    attachProductClickListeners();
  }

  // Function to attach click event to each product
function attachProductClickListeners() {
    const items = document.querySelectorAll(".card");
    items.forEach((item) => {
      item.addEventListener("click", productDetails);
    });
}
// Function to handle product click
function productDetails(event) {
    const productId = event.currentTarget.dataset.productId;
    window.location.href = `./productDetails.html?id=${productId}`;
}


 // Function to render produt with filter
 function renderProductGenderFilter(val) {
  prod.innerHTML = "";
  clockList.filter(obj => obj.gender == val).forEach((product) => {
    prod.insertAdjacentHTML("beforeend", renderProduct(product));
  });
  attachProductClickListeners();
}

$(document).ready(function () {
 // calling a function renderAllProducts with gender filter when page load
  renderAllProducts();
});

// filter the products as per gender
$('input[type="radio"]').on('click change', function(e) {
  var val = this.defaultValue;
  renderProductGenderFilter(val);
});