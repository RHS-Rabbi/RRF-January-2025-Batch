<?php include_once('header.php')?>

     <!-- Contact Area -->
     <section class="about-area pt-[100px] pb-[73px]">
        <div class="container">
            <div class="row">
                <div class="w-full pd">
                    <div class="about-content flex flex-col gap-[10px]">
                        <h1 class="text-[#EEFF06] text-[44px] uppercase leading-normal font-black">Contact us</h1>
                        <p class="w-[432px] text-sm font-normal leading-normal text-[#FFFFFF]">Need a quick fix or expert advice? We’re just a call or message away! Contact Plumber Point today for reliable plumbing services. Our friendly team is ready to assist you with any questions,</p>
                    </div>
                </div>
            </div>
        </div>
     </section>

     <!-- Contact Form -->
      <section class="contact-form py-[60px]">
        <div class="container">
            <div class="row">
                <div class="w-[1060px] mx-auto pd">
                    <div class="text-center mb-[32px]">
                        <h2 class="text-[40px] text-[#000000] font-bold leading-normal">Get in touch</h2>
                    </div>
                    <form action="#" class="flex flex-wrap -mx-4">
                        <div class="w-6/12 px-4 pb-[51.94px]">
                            <input class="w-full border-b border-b-[#707070] focus:outline-none pb-2 placeholder:text-[#000000] text-sm leading-normal font-normal " type="text" placeholder="Full name">
                        </div>
                        <div class="w-6/12 px-4 pb-[51.94px]">
                            <input class="w-full border-b border-b-[#707070] focus:outline-none pb-2 placeholder:text-[#000000] text-sm leading-normal font-normal " type="email" placeholder="Email address">
                        </div>
                        <div class="w-6/12 px-4 pb-[51.94px]">
                            <input class="w-full border-b border-b-[#707070] focus:outline-none pb-2 placeholder:text-[#000000] text-sm leading-normal font-normal " type="tel" placeholder="Contact number">
                        </div>
                        <div class="w-6/12 px-4 pb-[51.94px]">
                            <input class="w-full border-b border-b-[#707070] focus:outline-none pb-2 placeholder:text-[#000000] text-sm leading-normal font-normal " type="text" placeholder="Subject">
                        </div>
                        <div class="w-full px-4">
                            <textarea 
                                rows="1"
                                class="w-full border-b border-b-[#707070] focus:outline-none pb-2 placeholder:text-[#000000] text-sm leading-normal font-normal resize-none"
                                placeholder="Description"
                            ></textarea>
                        </div>                        
                    </form>
                    <div class="mt-[34px] text-end">
                        <button class="w-[214px] h-[52px] cursor-pointer bg-[#DD3142] text-[#FFFFFF] rounded-[30px] text-xl font-bold leading-normal uppercase" type="submit">Send A MEssage</button>
                    </div>
                </div>
            </div>
        </div>
      </section>

      <!-- Map Area -->
       <section class="map-area bg-[#F9F9F9]">
            <div class="container">
                <div class="flex -mx-[65.5px] flex-wrap items-center h-[420px]">
                    <div class="w-5/12 px-[65.5px]">
                        <div class="mb-[20px]">
                            <h4 class="text-[18px] text-[#DD3142] font-bold leading-normal">Contact Us</h4>
                            <p class="text-[#000000] font-normal leading-normal text-sm">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                        <div class="flex flex-col gap-6">
                            <div class="flex flex-col gap-[5px]">
                                <h6 class="text-[#DD3142] font-medium leading-normal text-sm ">Business hours:</h6>
                                <p class="text-[#000000] text-sm leading-normal font-normal">Monday to Saturday 9:30 am - 4:30 pm</p>
                            </div>
                            <div class="flex flex-col gap-[5px]">
                                <h6 class="text-[#DD3142] font-medium leading-normal text-sm ">Address:</h6>
                                <p class="text-[#000000] text-sm leading-normal font-normal">A-67 south Ex Delhi-11002</p>
                            </div>
                            <div class="flex flex-col gap-[5px]">
                                <h6 class="text-[#DD3142] font-medium leading-normal text-sm ">Email:</h6>
                                <p class="text-[#000000] text-sm leading-normal font-normal">abc@abc.com</p>
                            </div>
                            <div class="flex flex-col gap-[5px]">
                                <h6 class="text-[#DD3142] font-medium leading-normal text-sm ">Phone:</h6>
                                <a href="tel:1800-458495-4455" class="text-[#000000] text-sm leading-normal font-normal">1800 - 458495-4455</a>
                            </div>
                        </div>
                    </div>
                    <div class="w-7/12 px-[65.5px]">
                        <div id="map" class="w-[661px] h-[354px]">
                        </div>
                    </div>
                </div>
            </div>
       </section>
<?php include_once('content/blogs.php')?>




<?php include_once('footer.php')?>