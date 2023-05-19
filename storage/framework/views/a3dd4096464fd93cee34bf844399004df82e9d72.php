<?php $__env->startSection('content'); ?>
    <div class="tab-content h-100 col-12 col-md-10 col-lg-11" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            ...
        </div>
        <div class="tab-pane h-100 fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <div class="d-flex flex-wrap h-100 bg_danger">
                <div class="col-12 col-md-5 vir_tabs">
                    <div class="container-fluid">
                        <section class="d-flex justify-content-between align-items-center mt-5 mt-md-0">
                            <div class="my-4 d-flex position-relative">
                                <span
                                    class="sub_title_search position-absolute d-flex justify-content-center align-items-center">
                                    شماره مجازی
                                </span>
                                <input type="text" name="" id="" class="input_search"
                                    placeholder="جستوجو کشور" />
                            </div>
                            <div>
                                <span class="icon_search">
                                    <i class="fas fa-search fa-rotate-90 fa-xs"></i>
                                </span>
                            </div>
                        </section>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header " id="flush-headingOne">
                                    <button class="accordion-button collapsed openItem" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne" target="/virtualNumber">
                                        خرید اکانت ChatGPT
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div>
                                            <!-------------              this is filter section inside a item selected---------------------- -->
                                            <ul class="nav nav-pills mb-3 d-flex justify-content-between" id="pills-tab"
                                                role="tablist">
                                                <li class="nav-item col-4" role="presentation">
                                                    <button class="btn_filters" id="pills-home-tab" data-bs-toggle="pill"
                                                        data-bs-target="#pills-home" type="button" role="tab"
                                                        aria-controls="pills-home" aria-selected="false">
                                                        جستوجو
                                                    </button>
                                                </li>
                                                <li class="nav-item col-4" role="presentation">
                                                    <button class="btn_filters" id="pills-profile-tab" data-bs-toggle="pill"
                                                        data-bs-target="#pills-profile" type="button" role="tab"
                                                        aria-controls="pills-profile" aria-selected="false">
                                                        فیلتر
                                                    </button>
                                                </li>
                                                <li class="nav-item col-4" role="presentation">
                                                    <button class="btn_filters" id="pills-contact-tab" data-bs-toggle="pill"
                                                        data-bs-target="#pills-contact" type="button" role="tab"
                                                        aria-controls="pills-contact" aria-selected="false">
                                                        ترتیب
                                                    </button>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show" id="pills-home" role="tabpanel"
                                                    aria-labelledby="pills-home-tab">
                                                    <input type="text" name="" id=""
                                                        class="input_search_countery w-100 p-2"
                                                        placeholder="نام کشور را وارد کنید..." />
                                                </div>
                                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                                    aria-labelledby="pills-profile-tab">
                                                    <div class="d-flex justify-content-evenly">
                                                        <button class="btn_countery_filter col-2 m-1">
                                                            همه</button><button class="btn_countery_filter col-2 m-1">
                                                            آسیا</button><button class="btn_countery_filter col-2 m-1">
                                                            اروپا</button><button class="btn_countery_filter col-2 m-1">
                                                            آمریکا</button><button class="btn_countery_filter col-2 m-1">
                                                            آفریقا</button><button class="btn_countery_filter col-2 m-1">
                                                            اقیانوسیه
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                                    aria-labelledby="pills-contact-tab">
                                                    <div class="d-flex justify-content-evenly">
                                                        <button class="col-4 btn_filter_by_price m-1">
                                                            قیمت (کم به زیاد)</button><button
                                                            class="col-4 btn_filter_by_price m-1">
                                                            قیمت (زیاد به کم)
                                                        </button>
                                                        <button class="col-4 btn_filter_by_price m-1">
                                                            پیشنهادی
                                                        </button>
                                                    </div>
                                                    <div>
                                                        ترتیب فعلی نمایش با لحاظ کیفیت و قیمت شماره‌ها
                                                        می‌باشد، توصیه میشود بر اساس لیست فعلی خرید
                                                        کنید.
                                                    </div>
                                                </div>
                                            </div>
                                            <!-------------           end section  filter inside a item selected---------------------- -->

                                            <!-- ===================    table for show numbers    =============================== -->
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">کشور</th>
                                                        <th scope="col">قیمت</th>
                                                        <th scope="col">موجوی</th>
                                                        <th scope="col"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                            <!-- ===================  end table for show numbers    =============================== -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        خرید اکانت ChatGPT
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Placeholder content for this accordion, which is
                                        intended to demonstrate the
                                        <code>.accordion-flush</code> class. This is the second
                                        item's accordion body. Let's imagine this being filled
                                        with some actual content.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        خرید اکانت ChatGPT
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Placeholder content for this accordion, which is
                                        intended to demonstrate the
                                        <code>.accordion-flush</code> class. This is the third
                                        item's accordion body. Nothing more exciting happening
                                        here in terms of content, but just filling up the space
                                        to make it look, at least at first glance, a bit more
                                        representative of how this would look in a real-world
                                        application.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-7 container pt-4">
                    <section class="d-flex justify-content-between d-none d-md-flex">
                        <div>
                            <h3>تاریخچه سفارشات</h3>
                        </div>
                        <div class="d-flex align-items-center">
                            <article class="price_profile ms-3 ps-3">
                                <span> 16,100 </span>
                                <span>تومان</span>
                            </article>
                            <div>
                                <div class="dropdown">
                                    <div class="d-flex">
                                        <button class="dropdown-toggle btn_profile" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            m h
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item active" href="#">Action</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Another action</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </li>
                                        </ul>
                                        <div>
                                            <article class="icon_user mx-2">
                                                <i class="fas fa-user"></i>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
            ...
        </div>
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
            ...
        </div>
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
            ...
        </div>
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
            ...
        </div>
    </div>
    </div>




    <script>
        $(document).ready(function() {
            $('.openItem').click(function() {
                var target = $(this).attr('target');
                console.log(target);
                $.get(target,
                    function(data) {

                        // console.log(data);

                        $.each(data, function (indexInArray, valueOfElement) {

                        $('.table-striped tbody').append('<tr> <th>'+valueOfElement['country']+'</th> <td>'+valueOfElement['amount']+' <span>تومان</span></td> <td>'+valueOfElement['count']+' <span>عدد</span></td> <td> <button class="btn_recive_number"> دریافت شماره </button> </td> </tr>');

                        });
                        // for (const data of a) { // You can use `let` instead of `const` if you like
                        //     console.log(element);
                        // }


                    },
                    "json"
                );
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/joorjin/Documents/hashemi/davinciv/resources/views/home.blade.php ENDPATH**/ ?>