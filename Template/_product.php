<!-- product -->
<style>

</style>



<section class="product container m-auto">
    <div class="h-auto">
        <div class="flex xl:justify-evenly flex-col mx-2 md:mx-0 xl:flex-row md:flex-col space-x-0 xl:space-x-6 mt-6">
            <div class="mt-10 xl:mt-0">
                <div class="w-full flex justify-center">
                    <figure class="itemZoom">
                        <div>
                            <img src="<?php echo $row["picture"];?>" alt="" class="itemZoomImg">
                        </div>
                    </figure>
                </div>
                <div class="w-auto lg:w-96 h-auto mx-6">
                    <div class="slick-slider slick-initialized">
                        <button type="button" class="slick-arrow slick-prev slick-disabled"></button>
                        <div class="slick-list"></div>
                        <button type="button" class="slick-arrow slick-prev slick-disabled"></button>
                    </div>
                </div>
            </div>
            <div
                class="flex flex-wrap justify-start xl:justify-st items-center bg-white rounded  w-full h-full max-w-md lg:max-w-xs xl:max-w-md min-h-96 mt-4 xl:mt-0">
                <div>
                    <div class="title-wrapper">
                        <h1 class="text-dark text-xl font-body"><b><?php echo $row["title"];?></b></h1>
                    </div>
                </div>
                <div class="pr-24 space-x-3">
                    <span class="text-orange-400 mt-3 text-3xl"><?php echo $row["new_price"];?></span>
                </div>
                <div class="flex flex-row mt-2 items-center space-x-1 md:space-x-3 pr-60">
                    <div class="hidden md:flex flex-row">
                        <span><i class="fas fa-star text-yellow-400"></i></span>
                        <span><i class="fas fa-star text-yellow-400"></i></span>
                        <span><i class="fas fa-star text-yellow-400"></i></span>
                        <span><i class="fas fa-star text-yellow-400"></i></span>
                        <span><i class="far fa-star text-yellow-400"></i></span>

                    </div>
                    <div class="flex flex-row items-center space-x-2 md:space-x-3">
                        <span class="text-xl"><i class="fa-regular fa-heart text-skin-hrnicn"></i></span>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="prolist mx-3">
                        <ul>
                            <li>1.43" AMOLED Round, 466*466</li>
                            <li>Smart Bluetooth Calling</li>
                            <li>Built-in Dual-Straps</li>
                            <li>5ATM Waterproof</li>
                            <li>GPS</li>
                            <li>Metal body</li>
                            <li>Battery Life 20 days BT calling (Standby time 60 days)</li>
                            <li>100+ Watch Faces</li>
                        </ul>
                    </div>
                </div>
                <div class="flex items-center space-x-1 mt-2">
                    <div class="font-bold flex items-center space-x-1">
                        <div><?php echo $row["warranty"];?> Brand Warranty</div>
                    </div>
                </div>
                <div class="flex items-center mt-4 ml-0">
                    <button
                        class="mr-2 px-6 md:px-8 py-3 md:py-3 lg:py-1 xl:py-3 text-base md:text-sm xl:text-base bg-[#f29120] text-white hover:bg-hoverColor font-medium rounded">Add
                        to cart</button>
                    <div class="flex space-x-2">
                        <button
                            class="px-6 md:px-8 py-3 md:py-3 lg:py-1 xl:py-3 text-base md:text-sm xl:text-base bg-[#FF5722] text-white hover:bg-hoverColor font-medium rounded">Buy
                            Now</button>
                    </div>
                </div>
            </div>
            <div class="banner">
                <img src="./assets/products/extra.webp" alt="">
            </div>
        </div>

    </div>

    <section>
        <div class="my-6">
            <div class="flex flex-row items-center justify-start cursor-pointer flex-wrap space-x-2">
                <div
                    class=" min-w-[70px] lg:w-36 text-xs lg:text-base text-center h-10 flex justify-center items-center bg-[#f29120] text-white rounded-lg">
                    Specs</div>
                <a href="#details" >
                    <div
                        class="min-w-[70px] lg:w-36 text-xs lg:text-base text-center h-10 flex justify-center items-center bg-gray-200 hover:bg-[#f29120] hover:text-white rounded-lg">
                        Details</div>
                </a>
                <a href="#">
                    <div
                        class="min-w-[70px] lg:w-36 text-xs lg:text-base text-center h-10 flex justify-center items-center bg-gray-200 hover:bg-[#f29120] hover:text-white rounded-lg">
                        Reviews</div>
                </a>
                <a href="#">
                    <div
                        class="min-w-[70px] lg:w-36 text-xs lg:text-base text-center h-10 flex justify-center items-center bg-gray-200 hover:bg-[#f29120] hover:text-white rounded-lg">
                        Q&A</div>
                </a>
                <a href="#">
                    <div
                        class="min-w-[70px] lg:w-36 text-xs lg:text-base text-center h-10 flex justify-center items-center bg-gray-200 hover:bg-[#f29120] hover:text-white rounded-lg">
                        Videos</div>
                </a>

            </div>


            <div id="spec">
                <section class="mt-4 bg-gray-100 rounded-lg p-4">
                    <h2 class="text-lg">General Information</h2>
                    <div class="mt-2">
                        <div class="border-b-2 grid grid-cols-4 gap-12 bg-gray-100 p-2 max-w-full hover:bg-gray-200">
                            <div>
                                <h2 class="text-xs md:text-base font-semibold">Brand</h2>
                            </div>
                            <div class="col-span-2">
                                <h2 class="text-sm md:text-base">Mibro</h2>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div class="border-b-2 grid grid-cols-4 gap-12 bg-gray-100 p-2 max-w-full hover:bg-gray-200">
                            <div>
                                <h2 class="text-xs md:text-base font-semibold">Model No</h2>
                            </div>
                            <div class="col-span-2">
                                <h2 class="text-sm md:text-base">Mibro GS Pro</h2>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div class="border-b-2 grid grid-cols-4 gap-12 bg-gray-100 p-2 max-w-full hover:bg-gray-200">
                            <div>
                                <h2 class="text-xs md:text-base font-semibold">Strap</h2>
                            </div>
                            <div class="col-span-2">
                                <h2 class="text-sm md:text-base">22mm,Silicone and Woven</h2>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div class="border-b-2 grid grid-cols-4 gap-12 bg-gray-100 p-2 max-w-full hover:bg-gray-200">
                            <div>
                                <h2 class="text-xs md:text-base font-semibold">Battery capacity</h2>
                            </div>
                            <div class="col-span-2">
                                <h2 class="text-sm md:text-base">460mAh</h2>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div class="border-b-2 grid grid-cols-4 gap-12 bg-gray-100 p-2 max-w-full hover:bg-gray-200">
                            <div>
                                <h2 class="text-xs md:text-base font-semibold">Custom Watch Face</h2>
                            </div>
                            <div class="col-span-2">
                                <h2 class="text-sm md:text-base">Yes</h2>
                            </div>
                        </div>
                    </div>



                </section>
            </div>
            <div id="details" class="my-6">
                <div class="bg-gray-100 rounded-lg p-4">
                    <h2 class="font-semibold text-xl">Details</h2>
                    <div class="mt-6">
                        <div class="product-link mx-4">
                            <h2 dir="ltr">Mibro GS Pro calling Smart Watch in Bangladesh</h2>
                            <p dir="ltr"><strong>Support Bluetooth calling</strong></p>
                            <ul>
                                <li dir="ltr">&nbsp;You can answer calls by simply raising your hand. 105+ sports modes</li>
                                <li dir="ltr">&nbsp;100+ watch faces and could customize</li>
                            </ul>
                            <p dir="ltr"><strong>Ultra-long battery life</strong></p>
                            <ul>
                                <li dir="ltr">Up to 60 days battery life for normal daily use.</li>
                            </ul>
                            <p dir="ltr"><img src="./assets/products/extra1.webp" alt="Mibro GS Pro  gps calling" width="1480" height="770" loading="lazy"></p>
                            <p dir="ltr"><img src="./assets/products/extra2.webp" alt="Mibro GS Pro  gps calling" width="1480" height="770" loading="lazy"></p>
                            <p dir="ltr"><img src="./assets/products/extra3.webp" alt="Mibro GS Pro  gps calling" width="1480" height="770" loading="lazy"></p>
                            <p dir="ltr"><img src="./assets/products/extra4.webp" alt="Mibro GS Pro  gps calling" width="1480" height="770" loading="lazy"></p>
                            <p dir="ltr">&nbsp;</p>
                            <h2 dir="ltr">Technical Specification of Mibro GS Pro GPS calling Smartwatch</h2>
                            <p dir="ltr"><strong>Design</strong></p>
                            <ul>
                                <li dir="ltr">Body Material: Metal</li>
                                <li dir="ltr">Size: 46.5mm, Thickness=11.8mm(Without HR protrusion)</li>
                                <li dir="ltr">Weight: 58.22g(Silicone strap),46.60g (Woven strap)</li>
                                <li dir="ltr">Strap Type: Silicone and Woven</li>
                                <li dir="ltr">Watch strap size (width/length) Width: 22mm, Unfolded length 246mm</li>
                                <li dir="ltr">Water-resistance Grade: 5ATM</li>
                                <li dir="ltr"><strong>Color:</strong> Black</li>
                                <li dir="ltr"><strong>Mic: </strong>Square 0715 composite membrane horn (2ATM waterproof)</li>
                            </ul>

                            <p dir="ltr"><strong>Display&nbsp;</strong></p>
                            <ul>
                                <li dir="ltr">Display Type: AMOLED</li>
                                <li dir="ltr">Display Shape: Round</li>
                                <li dir="ltr">Display Size: &nbsp;1.43" AMOLED&nbsp;</li>
                                <li dir="ltr">Display Resolution: 466*466</li>
                                <li dir="ltr">Cloud-based watch faces: Yes</li>
                            </ul>

                            <p dir="ltr"><strong>Battery</strong></p>
                            <ul>
                                <li dir="ltr">Battery Capacity:&nbsp; 460mAh</li>
                                <li dir="ltr">Battery Life: Standby time (Unlinked state) About 60 days, Daily use
                                    scenarios(Bluetooth Call Mode) About 20 days, Music Mode 9Hour, BT-Calling Mode 11Hour, GPS Mode
                                    17Hour.</li>
                                <li dir="ltr">Charging: Up to 3 hours</li>
                                <li dir="ltr">Charging type: Magnetic</li>
                            </ul>

                            <p dir="ltr"><strong>Sensors &amp; Connection</strong></p>
                            <ul>
                                <li dir="ltr">Sensor: Blood oxygen, G-sensor, PPG Heart Rate</li>
                                <li dir="ltr">Connection : Bluetooth: v5.3</li>
                                <li dir="ltr">System requirements: Android 5.0 and above, iOS10.0 and above</li>
                                <li dir="ltr">Application: Mibro Fit</li>
                                <li dir="ltr">Package Contains: 1 device, 1 charging cable, 1 user manual, warranty card</li>
                                <li dir="ltr">Warranty Information</li>
                            </ul>

                            <h3 dir="ltr">Warranty: 1 Year</h3>
                            <p dir="ltr">Sports modes:</p>
                            <p>1. Run*5: Outdoor running, Idoor running, Treadmill, Walking, Hiking;</p>
                            <p>2. Cycling*2: Indoor cycling, Outdoor running;</p>
                            <p>3. Swim*2: Swimming, Open water swimming;</p>
                            <p>4. Outdoor*8: Trekking, Triathlon, Roller skating, Rock climbing,</p>
                            <p>&nbsp; &nbsp; &nbsp;Skateboard, Parkour, Flying kites, Frisbee;</p>
                            <p>5. Indoor*12: Rope skipping, Strength training, Elliptical machine, Sit-ups, push</p>
                            <p>&nbsp;&nbsp;&nbsp;ups, Free training, Stepping machine, Walking machine, Aerobics, Yoga, Pilates,
                            </p>
                            <p>&nbsp;&nbsp;&nbsp;Rowing machine;</p>
                            <p>6. Dance*7: Dance, Square dance, Hip hop, Belly Dance, Jazz, Latin dance, Ballet;</p>
                            <p>7. Ball*22: Basketball, Football, Badminton, Pingpong, Tennis, Rugby, Billiards,</p>
                            <p>Bowling, Volleyball, Shuttlecock, Handball, Baseball, Softball, Cricket, Beach</p>
                            <p>Soccer, Beach Volleyball, Gateball, Hockey, Squash, Water Polo, Sepaktakraw,</p>
                            <p>Dodgeball;</p>
                            <p>8. Aquatic sports*5: Sailboat, Dragon Boat, Canoeing, Rowing, Motorboat;</p>
                            <p>9. Fighting*7: Taekwondo, Boxing, Free fight, Taiji boxing, Karate, Fencing,</p>
                            <p>Kendo.</p>
                            <h3 dir="ltr">Function</h3>
                            <p dir="ltr">Heart Rate, SpO2, Motions record, Breath, Pressure, Sleeping record, Altitude, Compass,
                                Dice, Timer, Alarm, Stopwatch, Calculator, Calendar, Weather, Women's health, Find your phone,
                                Bluetooth call, Music control, Music playing, App message reminder, Incoming call reminder, Health
                                Reminder.</p>
                            <h2 dir="ltr">FAQs&nbsp;</h2>
                            <h3 dir="ltr">Does Mibro GS Pro have a full touchscreen display?</h3>
                            <p dir="ltr">Answer: Yes, Mibro GS Pro features a full touch screen 1.43" AMOLED Round, 466*466
                                display.</p>
                            <h3 dir="ltr">Is Mibro GS Pro shockproof?</h3>
                            <p dir="ltr">Answer: No, Mibro GS Pro is not shockproof. Please avoid dropping it from a height as the
                                watch may get damaged.</p>
                            <h3 dir="ltr">Is Mibro GS Pro waterproof?</h3>
                            <p dir="ltr">Answer:&nbsp; Yes, Mibro GS Pro has a 5 ATM&nbsp; waterproof rating. It can go underwater
                                up to a depth of 5m for up to 30 minutes. However, avoid saunas, hot water, and ocean water.</p>
                            <h3 dir="ltr">Can Mibro GS Pro be used while swimming?</h3>
                            <p dir="ltr">Answer: Yes, You can wear the smartwatch in the swimming pool while swimming.</p>
                            <h3 dir="ltr">&nbsp;Can I take a photo with Mibro GS Pro?</h3>
                            <p dir="ltr">Answer: No, Mibro GS Pro does not feature a camera.</p>
                            <h3 dir="ltr">Can Mibro GS Pro store and play music?</h3>
                            <p dir="ltr">Answer: No but Mibro GS Pro has a remote music control feature that controls music played
                                on your phone as long as your smartphone and smartwatch are in Bluetooth range.</p>
                            <h3 dir="ltr">Can I use my earbuds and my Mibro GS Pro at a time with the same smartphone?</h3>
                            <p dir="ltr">Answer: Yes, both earbuds and Mibro GS Pro can be paired with your smartphone at the same
                                time.</p>
                            <h3 dir="ltr">What is the Bluetooth range of the Mibro GS Pro?</h3>
                            <p dir="ltr">Answer: The Bluetooth range of the Mibro GS Pro is 10 meters.</p>
                            <h3 dir="ltr">How many watch faces does the Mibro GS Pro have?</h3>
                            <p dir="ltr">Answer: Mibro GS Pro has 100+ watch faces and can customize your own photo to show on the
                                watch.&nbsp;</p>
                            <h3 dir="ltr">What sensors does the Mibro GS Pro have?</h3>
                            <p dir="ltr">Answer: Mibro GS Pro features Blood oxygen, a G-sensor, and a PPG Heart Rate.</p>
                            <h3 dir="ltr">Does Mibro GS Pro have GPS?</h3>
                            <p dir="ltr">Answer: Yes, Mibro GS Pro does have GPS.</p>
                            <h2 dir="ltr">What is the price of the Mibro GS Pro BT calling Smart Watch in Bangladesh?</h2>
                            <p dir="ltr">The latest price of the Mibro GS Pro calling Smart Watch in Bangladesh is 8299tk. You can
                                buy the &nbsp;Mibro GS Pro smart&nbsp; Watch in Bangladesh at the best price from our website or Our
                                Outlet in Bangladesh.</p>


                        </div>
                    </div>
                </div>
            </div>
        </div>



    </section>
</section>





<!-- product -->