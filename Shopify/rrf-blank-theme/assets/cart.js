// jQuery(document).ready(function($){
//     $(".remove-item-from-cart").click(function(){
//         location.reload(); // Reload the page
//     });
    
//     $.ajax({
//         type: "GET",
//         url:"/cart.js",
//         dataType:"json",
//         success: function(response){
          
//             $("#cart-items").empty();

//             console.log(response);

//             // foreach response
//             $.each(response.items, function(_, item) {
//                 $("#cart-items").append(`
//                      <div class="flex  mb-5 cart-top">
//                             <div class="w-20">
//                                 <img class="rounded-lg" src="${item.image}" alt="" width="auto" height="auto">
//                             </div>
//                         <div class="flex flex-col w-full ml-4 ">
//                             <div class="flex  items-center justify-between cart-title">
//                                 <h3>${item.product_title}</h3>
//                                 <div class="">
//                                     <button type="button" class="remove-item-from-cart cursor-pointer" data-item-id="${item.id}">
//                                         <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
//                                             <path d="M17.25 3.5H13.5V2.75C13.5 2.15326 13.2629 1.58097 12.841 1.15901C12.419 0.737053 11.8467 0.5 11.25 0.5H6.75C6.15326 0.5 5.58097 0.737053 5.15901 1.15901C4.73705 1.58097 4.5 2.15326 4.5 2.75V3.5H0.75C0.551088 3.5 0.360322 3.57902 0.21967 3.71967C0.0790178 3.86032 0 4.05109 0 4.25C0 4.44891 0.0790178 4.63968 0.21967 4.78033C0.360322 4.92098 0.551088 5 0.75 5H1.5V18.5C1.5 18.8978 1.65804 19.2794 1.93934 19.5607C2.22064 19.842 2.60218 20 3 20H15C15.3978 20 15.7794 19.842 16.0607 19.5607C16.342 19.2794 16.5 18.8978 16.5 18.5V5H17.25C17.4489 5 17.6397 4.92098 17.7803 4.78033C17.921 4.63968 18 4.44891 18 4.25C18 4.05109 17.921 3.86032 17.7803 3.71967C17.6397 3.57902 17.4489 3.5 17.25 3.5ZM7.5 14.75C7.5 14.9489 7.42098 15.1397 7.28033 15.2803C7.13968 15.421 6.94891 15.5 6.75 15.5C6.55109 15.5 6.36032 15.421 6.21967 15.2803C6.07902 15.1397 6 14.9489 6 14.75V8.75C6 8.55109 6.07902 8.36032 6.21967 8.21967C6.36032 8.07902 6.55109 8 6.75 8C6.94891 8 7.13968 8.07902 7.28033 8.21967C7.42098 8.36032 7.5 8.55109 7.5 8.75V14.75ZM12 14.75C12 14.9489 11.921 15.1397 11.7803 15.2803C11.6397 15.421 11.4489 15.5 11.25 15.5C11.0511 15.5 10.8603 15.421 10.7197 15.2803C10.579 15.1397 10.5 14.9489 10.5 14.75V8.75C10.5 8.55109 10.579 8.36032 10.7197 8.21967C10.8603 8.07902 11.0511 8 11.25 8C11.4489 8 11.6397 8.07902 11.7803 8.21967C11.921 8.36032 12 8.55109 12 8.75V14.75ZM12 3.5H6V2.75C6 2.55109 6.07902 2.36032 6.21967 2.21967C6.36032 2.07902 6.55109 2 6.75 2H11.25C11.4489 2 11.6397 2.07902 11.7803 2.21967C11.921 2.36032 12 2.55109 12 2.75V3.5Z" fill="#FF3333"/>
//                                         </svg>
//                                     </button>
//                                 </div>
//                             </div>
//                             <p class="font-normal">Size:<span class="text-[#00000099]"> ${item.variant_title}</span></p>
//                             <p class="font-normal">Color:<span class="text-[#00000099]"> White</span></p>
                            
//                             <div class="flex  items-center justify-between cart-title mb-2">
//                                 <h3 class="text-2xl"></h3>
//                                 <div class="flex items-center gap-5 bg-[#F0F0F0] py-3 px-5 rounded-full">
//                                     <a href="">
                                    
//                                     </a>
                                    
//                                     <a href="" class="">
//                                         <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
//                                             <path d="M15.8125 8C15.8125 8.24864 15.7137 8.4871 15.5379 8.66291C15.3621 8.83873 15.1236 8.9375 14.875 8.9375H8.9375V14.875C8.9375 15.1236 8.83873 15.3621 8.66291 15.5379C8.4871 15.7137 8.24864 15.8125 8 15.8125C7.75136 15.8125 7.5129 15.7137 7.33709 15.5379C7.16127 15.3621 7.0625 15.1236 7.0625 14.875V8.9375H1.125C0.87636 8.9375 0.637903 8.83873 0.462087 8.66291C0.286272 8.4871 0.1875 8.24864 0.1875 8C0.1875 7.75136 0.286272 7.5129 0.462087 7.33709C0.637903 7.16127 0.87636 7.0625 1.125 7.0625H7.0625V1.125C7.0625 0.87636 7.16127 0.637903 7.33709 0.462087C7.5129 0.286272 7.75136 0.1875 8 0.1875C8.24864 0.1875 8.4871 0.286272 8.66291 0.462087C8.83873 0.637903 8.9375 0.87636 8.9375 1.125V7.0625H14.875C15.1236 7.0625 15.3621 7.16127 15.5379 7.33709C15.7137 7.5129 15.8125 7.75136 15.8125 8Z" fill="black"/>
//                                         </svg>
//                                     </a>
//                                 </div>
//                             </div>
//                         </div>
//                     </div>
//                 `);
//             });

//         }
//     });


//     // remove item from cart
//     // $(document).on("click", ".remove-item-from-cart", function(e){
//     //     e.preventDefault();
        
//     //     let itemID = $(this).data("item-id");
//     //     $.ajax ({
//     //         type:"POST",
//     //         url:"/cart/update.js",
//     //         // data: JSON.stringify({ updates: { [itemID]: 0 } }),
//     //         data: JSON.stringify({itemID: 0}),
//     //         // data:`{${itemID}: 0}`,
//     //         dataType:"json",
//     //         header:{
//     //             "Content-Type":"application/json",
//     //         },
//     //         success: function(response){
//     //             console.log(response);
//     //         }
//     //     })
//     // });
//     $(document).on("click", ".remove-item-from-cart", function(e) {
//         e.preventDefault();
    
//         let itemID = $(this).data("item-id");
    
//         // Constructing the updates object dynamically
//         let updates = {};
//         updates[itemID] = 0;
    
//         $.ajax({
//             type: "POST",
//             url: "/cart/update.js",
//             data: JSON.stringify({ updates: updates }), 
//             dataType: "json",
//             headers: { 
//                 "Content-Type": "application/json"
//             },
//             success: function(response) {
//                 console.log("Item removed:", response);
//             },
//             error: function(error) {
//                 console.log("Error:", error);
//             }
//         });
//     });
    
    
// });




// jQuery(document).ready(function ($) {
//     // Load cart items
//     $.ajax({
//         type: "GET",
//         url: "/cart.js",
//         dataType: "json",
//         success: function (response) {
//             $("#cart-items").empty();
//             // console.log(response);

//             $.each(response.items, function (_, item) {
//                 $("#cart-items").append(`
//                     <div class="flex mb-5 cart-top">
//                         <div class="w-20">
//                             <img class="rounded-lg" src="${item.image}" alt="" width="auto" height="auto">
//                         </div>
//                         <div class="flex flex-col w-full ml-4 mb-4">
//                             <div class="flex items-center justify-between cart-title">
//                                 <h3>${item.product_title}</h3>
//                                 <button type="button" class="remove-item-from-cart cursor-pointer" data-item-id="${item.id}">
//                                     <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
//                                             <path d="M17.25 3.5H13.5V2.75C13.5 2.15326 13.2629 1.58097 12.841 1.15901C12.419 0.737053 11.8467 0.5 11.25 0.5H6.75C6.15326 0.5 5.58097 0.737053 5.15901 1.15901C4.73705 1.58097 4.5 2.15326 4.5 2.75V3.5H0.75C0.551088 3.5 0.360322 3.57902 0.21967 3.71967C0.0790178 3.86032 0 4.05109 0 4.25C0 4.44891 0.0790178 4.63968 0.21967 4.78033C0.360322 4.92098 0.551088 5 0.75 5H1.5V18.5C1.5 18.8978 1.65804 19.2794 1.93934 19.5607C2.22064 19.842 2.60218 20 3 20H15C15.3978 20 15.7794 19.842 16.0607 19.5607C16.342 19.2794 16.5 18.8978 16.5 18.5V5H17.25C17.4489 5 17.6397 4.92098 17.7803 4.78033C17.921 4.63968 18 4.44891 18 4.25C18 4.05109 17.921 3.86032 17.7803 3.71967C17.6397 3.57902 17.4489 3.5 17.25 3.5ZM7.5 14.75C7.5 14.9489 7.42098 15.1397 7.28033 15.2803C7.13968 15.421 6.94891 15.5 6.75 15.5C6.55109 15.5 6.36032 15.421 6.21967 15.2803C6.07902 15.1397 6 14.9489 6 14.75V8.75C6 8.55109 6.07902 8.36032 6.21967 8.21967C6.36032 8.07902 6.55109 8 6.75 8C6.94891 8 7.13968 8.07902 7.28033 8.21967C7.42098 8.36032 7.5 8.55109 7.5 8.75V14.75ZM12 14.75C12 14.9489 11.921 15.1397 11.7803 15.2803C11.6397 15.421 11.4489 15.5 11.25 15.5C11.0511 15.5 10.8603 15.421 10.7197 15.2803C10.579 15.1397 10.5 14.9489 10.5 14.75V8.75C10.5 8.55109 10.579 8.36032 10.7197 8.21967C10.8603 8.07902 11.0511 8 11.25 8C11.4489 8 11.6397 8.07902 11.7803 8.21967C11.921 8.36032 12 8.55109 12 8.75V14.75ZM12 3.5H6V2.75C6 2.55109 6.07902 2.36032 6.21967 2.21967C6.36032 2.07902 6.55109 2 6.75 2H11.25C11.4489 2 11.6397 2.07902 11.7803 2.21967C11.921 2.36032 12 2.55109 12 2.75V3.5Z" fill="#FF3333"/>
//                                     </svg>
//                                 </button>
//                             </div>
//                             <p>Size: <span>${item.variant_title}</span></p>
//                             <p>Color: <span>White</span></p>
//                         </div>
//                     </div>
//                 `);
//             });
//         },
//     });

//     // Remove item from cart
//     $(document).on("click", ".remove-item-from-cart", function (e) {
//         e.preventDefault();

//         let itemID = $(this).data("item-id");

//         let updates = {};
//         updates[itemID] = 0; // Set the quantity to 0 to remove the item

//         $.ajax({
//             type: "POST",
//             url: "/cart/update.js",
//             data: JSON.stringify({ updates: updates }),
//             dataType: "json",
//             headers: {
//                 "Content-Type": "application/json",
//             },
//             success: function (response) {
//                 console.log("Item removed:", response);
//                 location.reload(); // Reload the page after item is removed
//             },
//             error: function (error) {
//                 console.log("Error:", error);
//             },
//         });
//     });
// });


jQuery(document).ready(function ($) {
    // Load cart items
    $.ajax({
        type: "GET",
        url: "/cart.js",
        dataType: "json",
        success: function (response) {
            $("#cart-items").empty();
             console.log(response);
            
            $.each(response.items, function (_, item) {
                $("#cart-items").append(`
                    <div class="flex mb-5 cart-top" data-item-id="${item.id}">
                        <div class="w-30">
                            <img class="rounded-lg" src="${item.image}" alt="" width="auto" height="auto">
                        </div>
                        <div class="flex flex-col w-full ml-4">
                            <div class="flex items-center justify-between cart-title">
                                <h3>${item.product_title}</h3>
                                <div>
                                    <button type="button" class="remove-item-from-cart cursor-pointer" data-item-id="${item.id}">
                                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.25 3.5H13.5V2.75C13.5 2.15326 13.2629 1.58097 12.841 1.15901C12.419 0.737053 11.8467 0.5 11.25 0.5H6.75C6.15326 0.5 5.58097 0.737053 5.15901 1.15901C4.73705 1.58097 4.5 2.15326 4.5 2.75V3.5H0.75C0.551088 3.5 0.360322 3.57902 0.21967 3.71967C0.0790178 3.86032 0 4.05109 0 4.25C0 4.44891 0.0790178 4.63968 0.21967 4.78033C0.360322 4.92098 0.551088 5 0.75 5H1.5V18.5C1.5 18.8978 1.65804 19.2794 1.93934 19.5607C2.22064 19.842 2.60218 20 3 20H15C15.3978 20 15.7794 19.842 16.0607 19.5607C16.342 19.2794 16.5 18.8978 16.5 18.5V5H17.25C17.4489 5 17.6397 4.92098 17.7803 4.78033C17.921 4.63968 18 4.44891 18 4.25C18 4.05109 17.921 3.86032 17.7803 3.71967C17.6397 3.57902 17.4489 3.5 17.25 3.5ZM7.5 14.75C7.5 14.9489 7.42098 15.1397 7.28033 15.2803C7.13968 15.421 6.94891 15.5 6.75 15.5C6.55109 15.5 6.36032 15.421 6.21967 15.2803C6.07902 15.1397 6 14.9489 6 14.75V8.75C6 8.55109 6.07902 8.36032 6.21967 8.21967C6.36032 8.07902 6.55109 8 6.75 8C6.94891 8 7.13968 8.07902 7.28033 8.21967C7.42098 8.36032 7.5 8.55109 7.5 8.75V14.75ZM12 14.75C12 14.9489 11.921 15.1397 11.7803 15.2803C11.6397 15.421 11.4489 15.5 11.25 15.5C11.0511 15.5 10.8603 15.421 10.7197 15.2803C10.579 15.1397 10.5 14.9489 10.5 14.75V8.75C10.5 8.55109 10.579 8.36032 10.7197 8.21967C10.8603 8.07902 11.0511 8 11.25 8C11.4489 8 11.6397 8.07902 11.7803 8.21967C11.921 8.36032 12 8.55109 12 8.75V14.75ZM12 3.5H6V2.75C6 2.55109 6.07902 2.36032 6.21967 2.21967C6.36032 2.07902 6.55109 2 6.75 2H11.25C11.4489 2 11.6397 2.07902 11.7803 2.21967C11.921 2.36032 12 2.55109 12 2.75V3.5Z" fill="#FF3333"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <p class="font-normal">Size: <span class="text-[#00000099]">${item.variant_title}</span></p>
                            <p class="font-normal">Color: <span class="text-[#00000099]">White</span></p>
                            <div class="flex items-center justify-between cart-title mb-2">
                               <h3 class="text-2xl">${item.product_price || "120$"}</h3>
                                <div class="flex items-center gap-5 bg-[#F0F0F0] py-3 px-5 rounded-full">
                                    <button class="quantity-decrease cursor-pointer " data-item-id="${item.id}">
                                        <svg width="16" height="2" viewBox="0 0 16 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.8125 1C15.8125 1.24864 15.7137 1.4871 15.5379 1.66291C15.3621 1.83873 15.1236 1.9375 14.875 1.9375H1.125C0.87636 1.9375 0.637903 1.83873 0.462087 1.66291C0.286272 1.4871 0.1875 1.24864 0.1875 1C0.1875 0.75136 0.286272 0.512903 0.462087 0.337087C0.637903 0.161272 0.87636 0.0625 1.125 0.0625H14.875C15.1236 0.0625 15.3621 0.161272 15.5379 0.337087C15.7137 0.512903 15.8125 0.75136 15.8125 1Z" fill="black"/>
                                        </svg>
                                    </button>
                                    <span class="px-3" id="quantity-${item.id}">${item.quantity}</span>
                                    <button class="quantity-increase cursor-pointer" data-item-id="${item.id}">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.8125 8C15.8125 8.24864 15.7137 8.4871 15.5379 8.66291C15.3621 8.83873 15.1236 8.9375 14.875 8.9375H8.9375V14.875C8.9375 15.1236 8.83873 15.3621 8.66291 15.5379C8.4871 15.7137 8.24864 15.8125 8 15.8125C7.75136 15.8125 7.5129 15.7137 7.33709 15.5379C7.16127 15.3621 7.0625 15.1236 7.0625 14.875V8.9375H1.125C0.87636 8.9375 0.637903 8.83873 0.462087 8.66291C0.286272 8.4871 0.1875 8.24864 0.1875 8C0.1875 7.75136 0.286272 7.5129 0.462087 7.33709C0.637903 7.16127 0.87636 7.0625 1.125 7.0625H7.0625V1.125C7.0625 0.87636 7.16127 0.637903 7.33709 0.462087C7.5129 0.286272 7.75136 0.1875 8 0.1875C8.24864 0.1875 8.4871 0.286272 8.66291 0.462087C8.83873 0.637903 8.9375 0.87636 8.9375 1.125V7.0625H14.875C15.1236 7.0625 15.3621 7.16127 15.5379 7.33709C15.7137 7.5129 15.8125 7.75136 15.8125 8Z" fill="black"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                `);
            });
        },
    });

    // Update quantity
    $(document).on("click", ".quantity-increase, .quantity-decrease", function () {
        let itemID = $(this).data("item-id");
        let currentQuantity = parseInt($(`#quantity-${itemID}`).text());
        let newQuantity = $(this).hasClass("quantity-increase") ? currentQuantity + 1 : Math.max(1, currentQuantity - 1);

        let updates = {};
        updates[itemID] = newQuantity;

        $.ajax({
            type: "POST",
            url: "/cart/update.js",
            data: JSON.stringify({ updates: updates }),
            dataType: "json",
            headers: { "Content-Type": "application/json" },
            success: function () {
                $(`#quantity-${itemID}`).text(newQuantity);
            },
            error: function (error) {
                console.log("Error updating quantity:", error);
            },
        });
    });

    // Remove item from cart
    $(document).on("click", ".remove-item-from-cart", function (e) {
        e.preventDefault();
        let itemID = $(this).data("item-id");
        let updates = {};
        updates[itemID] = 0;

        $.ajax({
            type: "POST",
            url: "/cart/update.js",
            data: JSON.stringify({ updates: updates }),
            dataType: "json",
            headers: { "Content-Type": "application/json" },
            success: function () {
                location.reload();
            },
            error: function (error) {
                console.log("Error:", error);
            },
        });
    });
});
