jQuery(document).ready(function($){

    $(".cart-drawer-close").on("click", function(){

        $(".cart-drawer").addClass("hidden");
    });

    let wishlist = JSON.parse(localStorage.getItem("wishlist")) || [];

    wishlist.forEach(function(product_handle) {
        let wishListBtnSelector = $(`.wishlist-btn[data-product-handle="${product_handle}"]`);
        wishListBtnSelector.find('.text').addClass("hidden");
        wishListBtnSelector.find('.wish-listed').removeClass("hidden");
    });

    console.log(wishlist);

$(".show-wishlist-btn > span").text(wishlist.length);

    $(".wishlist-btn").on("click", function(){

        $(this).find('.text, .wish-listed').toggleClass("hidden");
        
        // let product_id = $(this).data("product-id");
        let product_handle = $(this).data("product-handle");



        // Ensure consistent usage of product_handle
        let wishlist = JSON.parse(localStorage.getItem("wishlist")) || [];


        // Check if product_id exists in the wishlist
        const index = wishlist.indexOf(product_handle);

        if (index !== -1) {
            // If product_id exists, remove it
            wishlist.splice(index, 1);
        } else {
            // If product_id doesn't exist, add it
            wishlist.push(product_handle);
        }

        $(".show-wishlist-btn > span").text(wishlist.length);

        // Save updated wishlist to local storage
        localStorage.setItem("wishlist", JSON.stringify(wishlist));

    });

    $(document).on("click", ".popup-close-btn", function (e) {

        $("#product-info-popup").addClass("hidden");

    });

    $(".quick-view-btn").on("click", function() {
        $(this).find('.text').addClass("hidden");
        $(this).find('.loading-icon').removeClass("hidden");

        let handle = $(this).data("product-handle");

        $.ajax({
            type: "GET",
            url: `/products/${handle}.js`,
            dataType:"json",
            headersheaders:{
                'Content-Type': 'application/json',
            },
            success: function (response) {
                console.log(response)
               $("#product-info-popup").removeClass("hidden").empty().append(`
                     <div class="fixed w-full h-full bg-black top-0 left-0 z-10 opacity-60"></div>
                        <div class="fixed left-0 top-24 w-full z-20 ">
                            <div class="min-w-7xl max-w-7xl bg-white p-8 mx-auto rounded-2xl relative">
                                <button class="absolute right-0 top-0 p-4 cursor-pointer popup-close-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                    </svg>
                                    
                                </button>
                                <div class="flex gap-8 items-center">
                                    <div class="flex-1">
                                        <img class="w-full"src="${response.featured_image}" alt="" width="auto" height="auto">
                                    </div>
                                    <div class="flex-1">
                                        <h2 class="font-bold text-4xl text-black mb-3">${response.title}</h2>
                                        <p class="text-xl mb-8">$120</p>
                                        <div class="mb-8">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum possimus esse, quam aut eum laudantium ipsam dolorum itaque error ratione?
                                        </div>
                                        <button class="bg-black px-6 py-3 text-lg uppercase text-white rounded cursor-pointer" data-href="/cart">Add to Cart</button>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                `);


               $('.quick-view-btn .text').removeClass("hidden");
               $('.quick-view-btn .loading-icon').addClass("hidden");
            },
        });
    });
    
    
});
