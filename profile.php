<?php

include("header.php");

?>



<section class="container containerp mx-auto">
            <div class="flex proshow">
                <div class="prolis">
                    <ul class="">
                        <li class="cursor-pointer list-none py-5 w-52 max-w-[13rem] h-12 hover:text-custom-brown">
                            <div class="flex justify-between items-center mx-1">
                                <div class="flex space-x-3 items-center title-colo">
                                    <i class="fa-regular fa-user"></i>
                                    <div class="custo"><a class=" text-orange"><span class="text-base font-bold hover:text-orange">Personal Info</span></a></div>
                                </div>
            
                            </div>
                        </li>
                        <li class="cursor-pointer list-none py-5 w-52 max-w-[13rem] h-12 hover:text-custom-brown">
                            <div class="flex justify-between items-center mx-1">
                                <div class="flex space-x-3 items-center">
                                    <i class="fa-solid fa-house"></i>
                                    <div class="custo"><a class=" text-orange"><span class="text-base font-bold hover:text-orange">Delivery Address</span></a></div>
                                </div>
            
                            </div>
                        </li>
                        <li class="cursor-pointer list-none py-5 w-52 max-w-[13rem] h-12 hover:text-custom-brown">
                            <div class="flex justify-between items-center mx-1">
                                <div class="flex space-x-3 items-center">
                                    <i class="fa-solid fa-bag-shopping"></i>
                                    <div class="custo"><a class=" text-orange"><span class="text-base font-bold hover:text-orange">My Orders</span></a></div>
                                </div>
            
                            </div>
                        </li>
                        <li class="cursor-pointer list-none py-5 w-52 max-w-[13rem] h-12 hover:text-custom-brown">
                            <div class="flex justify-between items-center mx-1">
                                <div class="flex space-x-3 items-center">
                                    <i class="fa-regular fa-compass"></i>
                                    <div class="custo"><a class=" text-orange"><span class="text-base font-bold hover:text-orange">Order Track</span></a></div>
                                </div>
            
                            </div>
                        </li>
                        <li class="cursor-pointer list-none py-5 w-52 max-w-[13rem] h-12 hover:text-custom-brown">
                            <div class="flex justify-between items-center mx-1">
                                <div class="flex space-x-3 items-center">
                                    <i class="fa-regular fa-heart"></i>
                                    <div class="custo"><a class=" text-orange"><span class="text-base font-bold hover:text-orange">Wishlist</span></a></div>
                                </div>
            
                            </div>
                        </li>
                        <li class="cursor-pointer list-none py-5 w-52 max-w-[13rem] h-12 hover:text-custom-brown">
                            <div class="flex justify-between items-center mx-1">
                                <div class="flex space-x-3 items-center">
                                    <i class="fa-regular fa-star"></i>
                                    <div class="custo"><a class=" text-orange"><span class="text-base font-bold hover:text-orange">Reviews</span></a></div>
                                </div>
            
                            </div>
                        </li>
                        <li class="cursor-pointer list-none py-5 w-52 max-w-[13rem] h-12 logout-hov">
                            <div class="flex justify-between items-center mx-1">
                                <div class="flex space-x-3 items-center">
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                    <div class="custo"><a class=" text-orange"><span class="text-base font-bold hover:text-orange">Logout</span></a></div>
                                </div>
            
                            </div>
                        </li>
                    </ul>
                </div>
        
                <div>
                    <div class="proinfo">
                        <div class="relative flex flex-col w-full">
                            <div class="rounded-t mb-0 px-6 py-6 pb-0">
                                <div class="text-center flex justify-between">
                                    <h6 class="text-xl font-bold pinf px-[50px] pt-[25px]">Personal Info</h6>
                                </div>
                            </div>
                            <div class="flex justify-start px-6 space-x-8 h-80">
                                <div class="flex-col text-[#1D3557] font-semibold space-y-4 jabber">
                                    <div class="habber habber1" >Name</div>
                                    <div class="habber">Email</div>
                                    <div class="habber">Mobile</div>
                                    <div class="habber">Address</div>
                                </div>
                                <div class="flex-col text-[#1D3557] font-semibold space-y-4 jabber">
                                    <div class="habber">:</div>
                                    <div class="habber">:</div>
                                    <div class="habber">:</div>
                                    <div class="habber">:</div>
                                </div>
                                <div class="flex-col text-[#1D3557] font-semibold space-y-4 jabber">
                                    <div class="habber"><?= $u['full_name'] ?></div>
                                    <div class="habber"><?= $u['email'] ?></div>
                                    <div></div>
                                    <div class="habber"><?= $u['phone'] ?></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div class="habber"><?= $u['house'] ?>, <?= $u['road'] ?>, <?= $u['area'] ?>, <?= $u['district'] ?>.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row-reverse mr-2">
                        <button class="px-6 py-[6px] border border-black rounded hover:bg-custom-brown hover:text-white edit-btn">Edit</button>
                    </div>
                </div>
            </div>
        
        </section>

<?php

include("footer.php");

?>