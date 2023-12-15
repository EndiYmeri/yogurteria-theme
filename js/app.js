// const { data } = require("jquery");

$(document).foundation();

function singleItemStyling() {
    const wapfCheckboxes = document.querySelectorAll('[data-group="140"]')
    const wapfCheckboxesYogurt = document.querySelectorAll('.yogurt-toppings')

    wapfCheckboxesYogurt.forEach((element) => {
        const wapfCheckbox = element.querySelector('.wapf-field-container.wapf-field-number.has-pricing')
        let singleHeight = wapfCheckbox.offsetHeight
        let heightWanted = singleHeight * 7
        element.style.height = `${heightWanted}px`
    })

    wapfCheckboxes.forEach((element) => {
        const wapfCheckbox = element.querySelector('.wapf-field-container.wapf-field-number.has-pricing')
        let singleHeight = wapfCheckbox.offsetHeight
        let heightWanted = singleHeight * 7
        element.style.height = `${heightWanted}px`

    })
}
setTimeout(() => {
    singleItemStyling()
}, 0)


function toppingStyling() {
    const container = document.querySelectorAll('.wapf-field-number.has-pricing .wapf-field-input')
    const inputValue = document.querySelectorAll('.wapf-field-number.has-pricing .wapf-field-input .wapf-input')

    container.forEach((element, index) => {
        const increaseButton = document.createElement('span')
        increaseButton.setAttribute('class', 'increase-topping-button')
        increaseButton.textContent = "+"
        increaseButton.addEventListener('click', () => {
            inputValue[index].value++;
            inputValue[index].addEventListener('change', () => {

            })
        })

        const decreaseButton = document.createElement('span')
        decreaseButton.textContent = "-"
        decreaseButton.setAttribute('class', 'decrease-topping-button')
        decreaseButton.addEventListener('click', () => {
            if (inputValue[index].value > 0) {
                inputValue[index].value--
            }
        })

        element.prepend(decreaseButton)
        element.append(increaseButton)
    })
}
toppingStyling()

function removeEmptyToppingsFromCart() {
    const cartPageData = document.querySelectorAll('.woocommerce-cart-form__cart-item .variation dd')
    const cartPageDataLabel = document.querySelectorAll('.woocommerce-cart-form__cart-item .variation dt')
    const checkoutPageDataLabel = document.querySelectorAll('.woocommerce-checkout-review-order-table .cart_item .variation dt')
    const checkoutPageDataQuantity = document.querySelectorAll('.woocommerce-checkout-review-order-table .cart_item .variation dd')
    const orderPageData = document.querySelectorAll('.order_details .wc-item-meta p')
    const orderPageDataLabel = document.querySelectorAll('.order_details .wc-item-meta .wc-item-meta-label')

    function hideEmptyToppings(dataToBeChecked, label) {
        dataToBeChecked.forEach((element, index) => {
            if (element.innerText === "0 (×0L)") {
                element.style.display = "none"
                label[index].style.display = "none"
            }
        })
    }
    hideEmptyToppings(cartPageData, cartPageDataLabel)
    hideEmptyToppings(checkoutPageDataQuantity, checkoutPageDataLabel)
    hideEmptyToppings(orderPageData, orderPageDataLabel)

    // cartPageData.forEach((element, index) => {
    //     if (element.innerText === "0 (×0L)") {
    //         element.style.display = "none"
    //         cartPageDataLabel[index].style.display = "none"
    //     }
    // })

    // checkoutPageDataQuantity.forEach((element, index) => {
    //     if (element.innerText === "0 (×0L)") {
    //         element.style.display = "none"
    //         checkoutPageDataLabel[index].style.display = "none"
    //     }
    // })

}
setInterval(() => {
    removeEmptyToppingsFromCart()
}, 10);

function addPriceToProducts() {
    const categoryPage = document.querySelector('.tax-product_cat')

    if (categoryPage) {
        const productPrice = document.querySelectorAll('.product bdi')
        const product = document.querySelectorAll('.type-product')
        const productAddToCartButton = document.querySelectorAll('.type-product .add_to_cart_button')

        productPrice.forEach((element, index) => {
            const newProductPriceDiv = document.createElement('div')
            newProductPriceDiv.setAttribute('class', 'new-price-div')
            newProductPriceDiv.innerHTML = `<span class="new-product-price">${element.innerText}</span>`
            newProductPriceDiv.append(productAddToCartButton[index])
            product[index].append(newProductPriceDiv)
        })
    }
}
addPriceToProducts()

function menuOpen() {
    const burgerMenu = document.getElementById('burger-menu')
    const mobileMenu = document.getElementById('mobile-menu')

    const menuItemHasChildren = document.querySelectorAll('.menu-item-has-children')

    // Changing the menu items that have submenu height to minHeight
    // menuItemHasChildren.forEach((element) => {
    //     element.style.height = `${minHeight}px`
    // })

    // Oppening and closing the menu
    burgerMenu.addEventListener('click', () => {
        burgerMenu.classList.toggle('menu-active')
        mobileMenu.classList.toggle('nav-active')
    })

    menuItemHasChildren.forEach((element, index, array) => {
        element.addEventListener('click', (e) => {
            element.classList.toggle('sub-menu-active')
        })
    })

}
menuOpen()


function mapMarkers() {


    const pageHome = document.querySelector('.page-id-11')
    const pageAllLocations = document.querySelector('.page-id-65')
    const pageToptani = document.querySelector('.page-id-77')
    const pageBlloku = document.querySelector('.page-id-95')
    const pageDelijorgji = document.querySelector('.page-id-110')
    const pageTEG = document.querySelector('.page-id-103')
    const pageDurres = document.querySelector('.page-id-115')

    if (pageAllLocations || pageHome) {
        $('.map')
            .gmap3({
                center: [41.3590308, 19.6373899],
                zoom: 12
            })
            .marker([{
                address: "Rruga Ibrahim Rrugova, 7 Prane librit universitar, zona e ish-bllokut Tiranë AL, 1000, Albania",
                icon: "http://localhost/yogurteria/wp-content/uploads/2021/12/map-marker.png"
            }])
            .marker([{
                address: "Rruga Abdi Toptani, Toptani Shopping Center, Kati i 6, Tirana 1001, Albania",
                icon: "http://localhost/yogurteria/wp-content/uploads/2021/12/map-marker.png"
            }])
            .marker([{
                address: "Kompleksi Delijorgji, Bulevardi Gjergj Fishta, Tirana 1000, Albania",
                icon: "http://localhost/yogurteria/wp-content/uploads/2021/12/map-marker.png"
            }])
            .marker([{
                address: "Rruga nacionale Tiranë-Elbasan, Tiranë 1000, Albania",
                icon: "http://localhost/yogurteria/wp-content/uploads/2021/12/map-marker.png"
            }])
            .marker([{
                address: "Lagja nr. 1, Shëtitorja “Taulantia AL, 2000, Albania",
                icon: "http://localhost/yogurteria/wp-content/uploads/2021/12/map-marker.png"
            }])
            .on('click', function(marker) {
                marker.setIcon('https://maps.google.com/mapfiles/marker_green.png');
            });
    }
    if (pageToptani) {
        $('.map')
            .gmap3({
                center: [41.3277836, 19.8208332],
                zoom: 16.12
            })
            .marker([{
                address: "Rruga Abdi Toptani, Toptani Shopping Center, Kati i 6, Tirana 1001, Albania",
                icon: "http://localhost/yogurteria/wp-content/uploads/2021/12/map-marker.png"
            }])
            .on('click', function(marker) {
                marker.setIcon('https://maps.google.com/mapfiles/marker_green.png');
            });
    }
    if (pageBlloku) {
        $('.map')
            .gmap3({
                center: [41.319782, 19.8164537],
                zoom: 17
            })
            .marker([{
                address: "Rruga Ibrahim Rrugova, 7 Prane librit universitar, zona e ish-bllokut Tiranë AL, 1000, Albania",
                icon: "http://localhost/yogurteria/wp-content/uploads/2021/12/map-marker.png"
            }])
            .on('click', function(marker) {
                marker.setIcon('https://maps.google.com/mapfiles/marker_green.png');
            });
    }
    if (pageTEG) {
        $('.map')
            .gmap3({
                center: [41.2828066, 19.8546883],
                zoom: 17
            })
            .marker([{
                address: "Rruga nacionale Tiranë-Elbasan, Tiranë 1000, Albania",
                icon: "http://localhost/yogurteria/wp-content/uploads/2021/12/map-marker.png"
            }])
            .on('click', function(marker) {
                marker.setIcon('https://maps.google.com/mapfiles/marker_green.png');
            });
    }
    if (pageDelijorgji) {
        $('.map')
            .gmap3({
                center: [41.3214164, 19.7918641],
                zoom: 17
            })
            .marker([{
                address: "Kompleksi Delijorgji, Bulevardi Gjergj Fishta, Tirana 1000, Albania",
                icon: "http://localhost/yogurteria/wp-content/uploads/2021/12/map-marker.png"
            }])
            .on('click', function(marker) {
                marker.setIcon('https://maps.google.com/mapfiles/marker_green.png');
            });
    }
    if (pageDurres) {
        $('.map')
            .gmap3({
                center: [41.3099401, 19.4374999],
                zoom: 17
            })
            .marker([{
                address: "Lagja nr. 1, Shëtitorja “Taulantia AL, 2000, Albania",
                icon: "http://localhost/yogurteria/wp-content/uploads/2021/12/map-marker.png"
            }])
            .on('click', function(marker) {
                marker.setIcon('https://maps.google.com/mapfiles/marker_green.png');
            });
    }

}
mapMarkers()

$('.hero-slider').slick({
    arrows: false,
    dots: true,
    cssEase: 'ease',
    autoplay: 2000
});
$('.home-bottom-slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    arrows: true,
    cssEase: 'ease',
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false
            }
        }
    ]
});

$('.single-location-slider').slick({
    arrows: false,
    dots: true,
    cssEase: 'ease'
});




// add_action('admin_head', 'hide_toppings_from_order_page');

// function hide_toppings_from_order_page() {
//   echo '<script>
//        	const orderAdminPageData = document.querySelectorAll(".postbox-container .woocommerce_order_items_wrapper .item td p")
// 		const orderAdminPageDataLabel = document.querySelectorAll(".postbox-container .woocommerce_order_items_wrapper .item th")

//   		orderAdminPageData.forEach((element, index) => {
//             if (element.innerText === "0 (×0L)") {
//                 element.style.display = "none"
//                 orderAdminPageDataLabel[index].style.display = "none"
//             }
//         })

//   </script>';
// }