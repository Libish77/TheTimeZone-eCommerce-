import { clockList } from "./productsList.js";

const productDetailWrapper = document.querySelector(".content-wrapper");

// to get objects form array and pass data to html for each products
function getProductById(productId) {
    debugger;
    let productDetails = clockList.find(obj => obj.id === parseInt(productId));
    productDetailWrapper.innerHTML = `
    <section class="container">
        <div class="product">
          <div class="product-image">
            <img src=".${productDetails.location}" alt="Avatar" class="responsiveImage">
          </div>
          <div class="product-description">
            <h4 class="product-code">${productDetails.code}</h4> 
            <h2 class="product-name"><b> ${productDetails.title}</b></h2> 
            <p class="product-desc">${productDetails.lgdescription}</p> 
            <div class="product-price">
               <p>CAD ${productDetails.price}</p>
            </div>
            <div class="product-feature">
              <h4>Other Features</h4>
           </div>

              <div class="feature-list">
                <ul>
                  <li> Brand: ${productDetails.brand}</li>
                  <li> Type: ${productDetails.type}</li>
                  <li> Water Resistance: ${productDetails.waterResistance}</li>
                </ul>
                <ul>
                  <li> Case Material: ${productDetails.caseMaterial}</li>
                  <li> Strap Material: ${productDetails.strapMaterial}</li>
                  <li> Diameter : ${productDetails.diameter}</li>
                </ul>
                <ul>
                  <li> Color: ${productDetails.color}</li>
                  <li> Width: ${productDetails.width}</li>
                  <li> Height: ${productDetails.height}</li>
                </ul>
              </div>
              <div class="cart-button">
                <button id="button" class="cart-btn">${productDetails.button_text}</button>
              </div>
              <div class="remaining-product">
                <p>Remaining : ${productDetails.quantity} pcs only</p>
              </div>
          </div>
          
        </div>
      </section>
      <section class="container">
      <!-- jquery widgets (accordion) -->
      <div id="accordion" class="accordion">
        <h3>Warranty</h3>
        <div>
          <p>
          ${productDetails.warranty} 
          </p>
        </div>
        <h3>Shipping</h3>
        <div>
          <p>
         ${productDetails.shipping}
          </p>
        </div>
        <h3>Return Policy</h3>
        <div>
          <p>
         ${productDetails.return}
          </p>
        </div>
      </div>
      </section>
    `;
  }

  

//getting product id from the url
const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const productId = urlParams.get('id');

// function call to load product details
getProductById(productId);


