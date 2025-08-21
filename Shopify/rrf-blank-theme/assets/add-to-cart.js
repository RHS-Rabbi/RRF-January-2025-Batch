jQuery(document).ready(function($){
    let addToCartForm = document.querySelector('form[action$="/cart/add"]');

    $(addToCartForm).on("submit", function(e) {
        e.preventDefault();

        // console.log('Add to cart form submitted');

        // change this form's button[type=submit] to loading state
        $(this).find('button[type=submit]').empty().append(`<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="animate-spin h-5 w-5 mx-auto">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12a7.5 7.5 0 0 0 15 0m-15 0a7.5 7.5 0 1 1 15 0m-15 0H3m16.5 0H21m-1.5 0H12m-8.457 3.077 1.41-.513m14.095-5.13 1.41-.513M5.106 17.785l1.15-.964m11.49-9.642 1.149-.964M7.501 19.795l.75-1.3m7.5-12.99.75-1.3m-6.063 16.658.26-1.477m2.605-14.772.26-1.477m0 17.726-.26-1.477M10.698 4.614l-.26-1.477M16.5 19.794l-.75-1.299M7.5 4.205 12 12m6.894 5.785-1.149-.964M6.256 7.178l-1.15-.964m15.352 8.864-1.41-.513M4.954 9.435l-1.41-.514M12.002 12l-3.75 6.495" />
        </svg>
        `);

        let formData = {
            items: [
               {
                    id: $("#variant_id").val(),
                    quantity: $("input[name=quantity]").val()
               }
            ]
        };

        // console.log(formData);




        $.ajax({
            type: 'POST',
            url: '/cart/add.js',
            headers:{
                'Content-Type': 'application/json',
            },

            data: JSON.stringify(formData),

            dataType: 'json',

            success: function(response) {

                // console.log(response);

                // fetch('../cart.js', {
                //     method: 'GET'
                //   })
                //   .then(response => response.json())
                //   .then(data => {
                //     return response.json()
                //   });

                $.ajax({
                    type: "GET",
                    url:"/cart.js",
                    dataType:"json",
                    success: function(response){
                        $("#cart-drawer-items").empty();

                    // foreach response
                    $.each(response.items, function(_, item) {
                        $("#cart-drawer-items").append(`
                            <div class="flex gap-4 mb-6">
                                <div class="w-20">
                                    <img src="${item.image}" alt="">
                                </div>
                                <div class="">
                                    <h3 class="text-black text-lg mb-2">${item.product_title}</h3>
                                    <p>${item.variant_title} <br> Quantity: ${item.quantity}</p>
                                </div>
                            </div>
                        `);
                    });

                    // change this form's button[type=submit] to loading text to added
                    $(addToCartForm).find('button[type=submit]').text('Add to cart'); // Reset button text on success

                    $(".cart-drawer").removeClass("hidden");
                        }

                });








                // $("#cart-drawer-items").empty();

                // // foreach response
                // $.each(response.items, function(_, item) {
                //     $("#cart-drawer-items").append(`
                //         <div class="flex gap-4 mb-6">
                //             <div class="w-20">
                //                 <img src="${item.image}" alt="">
                //             </div>
                //             <div class="">
                //                 <h3 class="text-black text-lg mb-2">${item.product_title}</h3>
                //                 <p>${item.variant_title} <br> Quantity: ${item.quantity}</p>
                //             </div>
                //         </div>
                //     `);
                // });

                //  // change this form's button[type=submit] to loading text to added
                // $(addToCartForm).find('button[type=submit]').text('Add to cart'); // Reset button text on success

                // $(".cart-drawer").removeClass("hidden");
            },


            error: function(error) {
                console.log(error);

                 // change this form's button[type=submit] to loading text to added
                 $(addToCartForm).find('button[type=submit]').text('Add to cart'); // Reset button text on success
            }
        });



        // for example using this 

        // $.ajax({
        //     type: 'POST',
        //     url: '/cart/add.js',
        //     headers:{
        //         'Content-Type': 'application/json',
        //     },
        //     body: JSON.stringify({
        //         items: [
        //            {
        //                 id: $("#variant_id").val(),
        //                 quantity: $("input=[name=quantity]").val()
        //            }
        //         ]
        //     }),
        // })
    });
        

});