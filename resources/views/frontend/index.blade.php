@include('frontend.layouts.header')
<style>
    .navbar {
        /* background: #0055cb; */
        background: linear-gradient(117deg, #7679c0, #4ce709);
    }

    .after-navbar {
        background: #b60000;
        color: white;
        padding: 10px 5px 15px 5px
    }

    .text-wrap p {
        /* background-color: yellow; */
        font-weight: bold;
        /* padding: 9px; */
        font-size: 31px;
    }

    .after-video p {
        color: #ed00ff;
        padding: 13px;
        font-size: 31px;
    }

    .products .heading {
        font-weight: bold;
        color: red;
        /* background: #3bcb29; */
    }

    /*Why us section */
    .why-us {
        background-color: #b60000;
    }

    .why-us-emoji {
        font-size: 45px;
        display: block;
        text-align: center;
    }

    .why-us-header {
        text-align: center;
        font-weight: bold;
        font-size: 27px;
        color: white;
    }

    .why-us-div-des {
        text-align: center;
        font-weight: bold;
        font-size: 27px;
        color: #0b86ea;
    }

    .why-us-footer {
        background-color: rgb(65, 9, 248);
        text-align: center;
        font-weight: bold;
        font-size: 27px;
    }

    .why-us-footer-text {
        text-align: center;
        font-weight: bold;
        font-size: 27px;
        color: white;
    }

    input,
    select {
        height: 40px;
        font-size: 16px !important;
    }

    /*end why us section */

    /* Review section  */
    .reviews {
        background: linear-gradient(#00ffe9ab, #af1ee9ba);

    }

    .reviews h2 {
        font-size: 40px;
        padding-bottom: 12px;
    }

    .custom-shadow {
        box-shadow: rgba(44, 204, 47, 0.2) 0px 4px 4px 0px;
    }

    .reviews img {
        width: 500px;

    }

    @media screen and (max-width:500px) {
        .reviews img {
            max-width: 395px;
        }
    }

    /* End review section  */

    /* Animation  */
    .text-animation {

        cursor: pointer;
        background-color: #760808b8;
        color: white;
        border-radius: 27%;
        font-size: 28px;
    }

    /* .animation {
            animation-name: nobir;
            animation-duration: 2s;
            animation-timing-function: cubic-bezier(0.075, 0.82, 0.165, 1);
            animation-iteration-count: infinite;
            text-align: center;
            border: 1px solid;
            margin: 0px 5px 5px 12px;
            color: #f8ac00;
            background: #2828d4;
            font-size: 25px;
            display: flex;
            align-items: center;
            padding: 0px 8px 0px 8px;

        } */
    .animation1 {
        animation: pulse 0.6s ease-out infinite;
        text-align: center;
        border: 1px solid;
        margin: 0px 5px 5px 12px;
        color: #f8ac00;
        background: #2828d4;
        font-size: 25px;
        display: flex;
        align-items: center;
        padding: 0px 8px 0px 8px;
    }

    /*End Animation */
</style>
</head>

<body>

    <!-- Navbar  -->
    <div class="navbar row text-center justify-content-center  shadow-lg p-4  rounded">
        <div class="col-md-8">
            <a class="navbar-brand" href="#">
                {{-- logo --}}
                <img class="rounded-pill" src="{{ asset($company_info->logo) }}" alt="Image_logo" style="height: 110px">
                {{-- Copany Name --}}
                {{-- <span style="font-size: 22px">{{ $company_info->name }}</span> --}}
            </a>
        </div>
    </div>


    {{-- Body content --}}
    <div class="container-fluid after-navbar">
        {{-- Paragrap div --}}
        <div class="row mt-2 justify-content-md-center ">
            <div class="col-md-12 text-wrap text-center">
                <p class="text-wrap-head">নবজাতক শিশুর জন্য বেবি সেফটি/কেরি বেড​।</p>
            </div>
        </div>
        {{-- Order button out of product box  --}}
        <div class="row text-center mt-2">
            <div class="col-md-4 text-center justify-self-center offset-md-4">
                <a href="" class="btn cart-btn text-center order-text product-order-btn" id="1"
                    data-bs-toggle="modal" data-bs-target="#product-1"
                    style='background-color:#654eed; color:white'>অর্ডার করুন</a>
                </a>
            </div>
        </div>
    </div>

    {{-- video section --}}
    <div class="video m-4 shadow p-4 mb-4 bg-white ">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/MxozqM-jqlg"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
    </div>

    {{-- Paragrap div --}}
    {{-- <div class="row after-video mt-5 justify-content-md-center video-footer-text">
        <div class="col-md-8 text-center">
            <p>অত্যন্ত নরম এবং আকর্ষণীয় বেবি বেড​। </p>
        </div> --}}

    {{-- Order button out of product box  --}}
    {{-- <div class="row text-center ">
            <div class="col-md-4 text-center justify-self-center offset-md-4">
                <a href="" class="btn cart-btn text-center order-text product-order-btn" id="1"
                    data-bs-toggle="modal" data-bs-target="#product-1"
                    style='background-color:#654eed; color:white'>অর্ডার করুন</a>
                </a>
            </div>
        </div> --}}
    {{-- </div> --}}

    {{-- product section --}}
    <section class="products" id="products">
        {{-- <h1 class="heading"><span>পণ্য</span> </h1> --}}
        <h2 class="heading">অত্যন্ত নরম এবং আকর্ষণীয় বেবি বেড​।</h2>
        @if ($product == null)
            <p style="text-align: center">কোনো পণ্য যোগ করা হইনি</p>
        @endif
        <div class="box-container">

            @if ($product != null)
                @foreach ($product as $product)
                    <div class="box">
                        @php
                            $discount = $product->discount;
                            $discount_price = $product->price - $discount;
                        @endphp
                        <span class="discount">-{{ round($discount) }}৳</span>
                        <div class="image">
                            <img class="img-fluid rounded-4 shadow-2-strong"
                                src="{{ asset('product/' . $product->photo) }}" alt="Product Image">
                            <div class="icons">
                                {{-- <a href="javascript:void(0)" class="fas fa-thumbs-up"></a> --}}
                                <a type="button" href="javascript:void(0)" class="product-order-btn cart-btn"
                                    id="{{ $product->id }}" data-bs-toggle="modal"
                                    data-bs-target="#product-{{ $product->id }}"
                                    style='margin-top: 17px; background-color:#654eed'>অর্ডার করুন
                                </a>
                                {{-- data-bs-toggle="collapse" data-bs-target="#product-{{ $product->id }}"
                                        aria-expanded="false" aria-controls="product-{{ $product->id }}" --}}
                                {{-- <a href="javascript:void(0)" class="fas fa-thumbs-up"></a> --}}
                            </div>
                        </div>
                        <div class="content">
                            <h3>{{ $product->title }}</h3>

                            <div class="price"> {{ round($discount_price) }}৳
                                <span>{{ round($product->price) }}৳</span>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-md-4 offset-md-4">
                                <span class="free-delivary text-animation ">অফার
                                    প্রাইস
                                    ৯৫০ টাকা <br>
                                </span>
                            </div>
                        </div>
                        <div class='delivary-img-section rounded'>

                            <img class='delivary-image' src="{{ asset('assets/images/delivary.png') }}">

                            <div class='animation1 rounded'>
                                <span class=''>ডেলিভারি চার্জ প্রযোজ্য। </span>
                            </div>

                        </div>
                    </div>


                    <!-- Modal -->
                    <div class="modal fade" id="product-{{ $product->id }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel{{ $loop->index }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="row">
                                    <div class="col-10 mx-auto">
                                        <form action="{{ route('order.store') }}" method="POST"
                                            class="row g-3 needs-validation">
                                            @csrf
                                            {{-- Hidden field  --}}
                                            <input type="hidden" name="product_title" value="{{ $product->title }}">
                                            <input type="hidden" name="product_price" value="{{ $product->price }}">
                                            <input type="hidden" name="discount_price" value="{{ $discount_price }}">
                                            <input type="hidden" name="discount" value="{{ $product->discount }}">
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <div class="modal-header">
                                                <h2 class="modal-title text-success"
                                                    id="exampleModalLabel{{ $loop->index }}">Order
                                                    Form
                                                </h2>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">

                                                <h2 class="text-center text-primary">{{ $product->title }}</h2>
                                                {{-- Form part  --}}
                                                <div class="col-md-12">
                                                    <label for="name" class="form-label">নাম <span
                                                            style="color: red;">*</span></label>
                                                    <input name="first_name" type="text" class="form-control"
                                                        id="name" placeholder="আপনার নাম লিখুন" required>
                                                    @if ($errors->has('first_name'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('first_name') }}</span>
                                                    @endif
                                                </div>

                                                <div class="col-md-12 mt-4">
                                                    <label for="phone" class="form-label">ফোন নাম্বার
                                                        <span style="color: red;">*</span>
                                                    </label>
                                                    <input type="tel" name="phone" class="form-control"
                                                        id="phone" aria-describedby="inputGroupPrepend" required
                                                        placeholder="আপনার ১১ সংখ্যার ফোন নাম্বারটি লিখুন"
                                                        pattern="[0-9]{11}">
                                                </div>

                                                <div class="col-md-12 mt-4">
                                                    <label for="address1" class="form-label"
                                                        placeholder="Enter your Address">সম্পূর্ণ
                                                        ঠিকানা
                                                        <span style="color: red;">*</span></label>
                                                    <textarea name="address1" id="address1" class="form-control" aria-label="With textarea" required
                                                        placeholder="আপনার ঠিকানা লিখুন"></textarea>
                                                </div>

                                                <div class="col-md-12 mt-4">
                                                    <label for="address" class="form-label">শিপিং চার্জ</label>
                                                </div>
                                                <select class="form-select" name="shipping_id">
                                                    <option value="hidden">শিপিং এর এলাকা নির্বাচন করুন</option>
                                                    @foreach ($shipping as $ship)
                                                        <option value="{{ $ship->id }}">
                                                            {{ $ship->type . ' - (' . $ship->price }}৳)</option>
                                                    @endforeach
                                                </select>
                                                {{-- shipping checkbox  --}}
                                                {{-- <div class="col-md-12">
                                                    <input type="checkbox" class="form-check-input ms-5" name="delivary_charge" id="delivary_charge1"> <label for="delivary_charge1" class="form-check-label">Inside Dhaka</label>
                                                </div>
                                                <div class="col-md-12 mt-1">
                                                    <input type="checkbox" class="form-check-input ms-5" name="delivary_charge" id="delivary_charge2"> <label for="delivary_charge2" class="form-check-label">Outside of Dhaka</label>
                                                </div> --}}


                                                {{-- <div class="form-check payment-input">
                                                    <input class="pamyment_method form-control form-check-input ml-3"
                                                        type="radio" name="pamyment_methods" id="checkbox3"
                                                        value="CashonDelivery" nobir='{{ $loop->index }}' checked>
                                                    <label class="form-check-label " for="checkbox3">
                                                        ক্যাশ অন ডেলিভারি
                                                    </label>
                                                </div> --}}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">বন্ধ করুন</button>
                                                <button type="submit" class="btn btn-primary">অর্ডার নিশিত
                                                    করুন</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </section>

    {{-- Why this product  --}}
    <section class="why-us">

        <div class="row p-3 mb-5 rounded justify-content-md-center">
            <h2 class="why-us-header">আমাদের থেকে কেনো কিনবেন ?? </h2>
        </div>

        <div class="row shadow-lg p-3 mb-5 bg-body rounded justify-content-md-center">
            <span class="why-us-emoji">🚗</span>
            <h1 class="why-us-div-des">
                নবজাতক নিরাপদ ভ্রমণ বিছানা আমাদের এই সেফটি বেড এর সাথে পাচ্ছেন সোনামণির জন্য অত্যন্ত প্রয়োজনীয় ইউরিন
                ম্যাট ও পিলো। </h1>
        </div>
        <div class="row shadow-lg p-3 mb-5 bg-body rounded justify-content-md-center">
            <span class="why-us-emoji">😊</span>
            <h1 class="why-us-div-des">
                খুব উন্নতমানের ম্যাটেরিয়েলে তৈরি ,একেবারে নতুন, ইউনিক এবং ভাল লাগার মত বেবি পন্য আমাদের এই সেফটি বেড।
            </h1>
        </div>
        <div class="row shadow-lg p-3 mb-5 bg-body rounded justify-content-md-center">
            <span class="why-us-emoji">✅</span>
            <h1 class="why-us-div-des">
                এটি ১০০% কটন কাপর দিয়ে তৈরি এবং ভিতরে নরম ফাইবার তুলা, যা সহজেই শুকিয়ে যায়।
            </h1>
        </div>
        <div class="row shadow-lg p-3 mb-5 bg-body rounded justify-content-md-center">
            <span class="why-us-emoji">⚡</span>
            <h1 class="why-us-div-des">
                যেহেতু নবজাতকের জন্য তৈরী কোয়ালিটি তে কোনো কম্প্রোমাইস করা হয়নি।
            </h1>

        </div>
        <div class="row shadow-lg p-3 mb-5 bg-body rounded justify-content-md-center">
            <span class="why-us-emoji">😍</span>
            <h1 class="why-us-div-des">
                একসাথে পাচ্ছেন নিউব্রণ সেফটি/ক্যারি বেড + পিলো + ইউরিন মেট।
            </h1>
        </div>
        <div class="row shadow-lg p-3 mb-5 bg-body rounded justify-content-md-center">
            <a type="button" href="javascript:void(0)" class="btn btn-info w-50  product-order-btn m-auto"
                id="{{ $product->id }}" data-bs-toggle="modal" data-bs-target="#product-{{ $product->id }}"
                style='font-size: 22px;background:#ff00f6;'>অর্ডার করুন
            </a>
        </div>
    </section>

    {{-- Review section  --}}
    <section class="reviews">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Customer Reviews</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 custom-shadow border p-4 text-center">
                <img src="{{ asset('assets/images/reviews/r1.jpg') }}" alt="Review image">
            </div>
            <div class="col-md-6 custom-shadow border p-4 text-center">
                <img src="{{ asset('assets/images/reviews/r2.jpg') }}" alt="Review image">
            </div>
            <div class="col-md-6 shadow border p-4 text-center">
                <img src="{{ asset('assets/images/reviews/r3.jpg') }}" alt="Review image">
            </div>
            <div class="col-md-6 shadow border p-4 text-center">
                <img src="{{ asset('assets/images/reviews/r4.jpg') }}" alt="Review image">
            </div>
        </div>
    </section>

    <div>
        <div class="row justify-content-center social-icon">

            <div class="col-md-4">
                <a href="tel:{{ $company_contact_info->phone }}"><i class="fas fa-phone-alt"></i></a>
                <p><a href="tel:{{ $company_contact_info->phone }}">{{ $company_contact_info->phone }}</a></p>
            </div>
            <div class="col-md-4">
                <a href="{{ $company_contact_info->facebook_page_link }}"><i class="fab fa-facebook"></i>
                    <p>আমাদের ফেসবুক পেজ</p>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ $company_contact_info->facebook_group_link }}"><i class="fab fa-youtube"></i>
                    <p>আমাদের ইউটিউব চ্যানেল</p>
                </a>
            </div>


        </div>
    </div>

    <div class="footer-top">
        <p>আপনাকে অনেক ধন্যবাদ আমদের ওয়েবসাইট টি ভিজিট করার জন্য অনেক ধন্যবাদ।</p>
    </div>
    <footer class="footer">
        <p>
            All Right Reserved By <span class="footer-text">Supper Kiddoz</span> <br>
            Designed And developed by <span class="footer-text">Md. Nobir Hasan</span> <br>
            Powdered by <span class="footer-text">Business Mind Academy</span>
        </p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://www.jqueryscript.net/demo/Dialog-Modal-Dialogify/dist/dialogify.min.js"></script>
    <script>
        $(document).ready(function() {
            // Button design part
            const Confetti = (() => {
                "use strict";
                const e = 10;
                let t, o, n = 75,
                    i = 25,
                    r = 1,
                    s = !1,
                    l = !0,
                    a = [],
                    d = (new Date).getTime();

                function p(e) {
                    if (t = document.createElement("canvas"), o = t.getContext("2d"), t.width = 2 * window
                        .innerWidth, t.height = 2 * window.innerHeight, t.style.position = "fixed", t.style
                        .top = 0, t.style.left = 0, t.style.width = "calc(100%)", t.style.height =
                        "calc(100%)", t.style.margin = 0, t.style.padding = 0, t.style.zIndex = 999999999, t
                        .style.pointerEvents = "none", document.body.appendChild(t), null != e) {
                        let t = document.getElementById(e);
                        null != t && t.addEventListener("click", e => {
                            ! function(e, t) {
                                let o = [];
                                for (let i = 0; i < n; i++) o.push(c(e, t));
                                a.push({
                                    particles: o
                                })
                            }(2 * e.clientX, 2 * e.clientY), l && (e.target.style.visibility =
                                "hidden")
                        })
                    }
                    window.addEventListener("resize", () => {
                        t.width = 2 * window.innerWidth, t.height = 2 * window.innerHeight
                    })
                }

                function y(e) {
                    return e.pos.y - 2 * e.size.x > 2 * window.innerHeight
                }

                function c(e, t) {
                    let o = (16 * Math.random() + 4) * r,
                        n = (4 * Math.random() + 4) * r;
                    return {
                        pos: {
                            x: e - o / 2,
                            y: t - n / 2
                        },
                        vel: h(),
                        size: {
                            x: o,
                            y: n
                        },
                        rotation: 360 * Math.random(),
                        rotation_speed: 10 * (Math.random() - .5),
                        hue: 360 * Math.random(),
                        opacity: 100,
                        lifetime: Math.random() + .25
                    }
                }

                function h() {
                    let e = Math.random() - .5,
                        t = Math.random() - .7,
                        o = Math.sqrt(e * e + t * t);
                    return t /= o, {
                        x: (e /= o) * (Math.random() * i),
                        y: t * (Math.random() * i)
                    }
                }
                return p.prototype.setCount = (e => {
                    "number" == typeof e ? n = e : console.error(
                        "[ERROR] Confetti.setCount() - Input needs to be of type 'number'")
                }), p.prototype.setPower = (e => {
                    "number" == typeof e ? i = e : console.error(
                        "[ERROR] Confetti.setPower() - Input needs to be of type 'number'")
                }), p.prototype.setSize = (e => {
                    "number" == typeof e ? r = e : console.error(
                        "[ERROR] Confetti.setSize() - Input needs to be of type 'number'")
                }), p.prototype.setFade = (e => {
                    "boolean" == typeof e ? s = e : console.error(
                        "[ERROR] Confetti.setFade() - Input needs to be of type 'boolean'")
                }), p.prototype.destroyTarget = (e => {
                    "boolean" == typeof e ? l = e : console.error(
                        "[ERROR] Confetti.destroyTarget() - Input needs to be of type 'boolean'"
                    )
                }), window.requestAnimationFrame(function t(n) {
                    let i = (n - d) / 1e3;
                    d = n;
                    for (let t = a.length - 1; t >= 0; t--) {
                        let o = a[t];
                        for (let t = o.particles.length - 1; t >= 0; t--) {
                            let n = o.particles[t];
                            n.vel.y += e * (n.size.y / (10 * r)) * i, n.vel.x += 25 * (Math
                                    .random() - .5) * i, n.vel.x *= .98, n.vel.y *= .98, n.pos.x +=
                                n
                                .vel.x, n.pos.y += n.vel.y, n.rotation += n.rotation_speed, s && (n
                                    .opacity -= n.lifetime), y(n) && o.particles.splice(t, 1)
                        }
                        0 == o.particles.length && a.splice(t, 1)
                    }! function() {
                        o.clearRect(0, 0, 2 * window.innerWidth, 2 * window.innerHeight);
                        for (const d of a)
                            for (const a of d.particles) e = a.pos.x, t = a.pos.y, n = a.size.x, i =
                                a.size.y, r = a.rotation, s = a.hue, l = a.opacity, o.save(), o
                                .beginPath(), o.translate(e + n / 2, t + i / 2), o.rotate(r * Math
                                    .PI / 180), o.rect(-n / 2, -i / 2, n, i), o.fillStyle =
                                `hsla(${s}deg, 90%, 65%, ${l}%)`, o.fill(), o.restore();
                        var e, t, n, i, r, s, l
                    }(), window.requestAnimationFrame(t)
                }), p
            })();

            // Pass in the id of an element
            let confetti = new Confetti('heart');
            // Edit given parameters
            confetti.setCount(75);
            confetti.setSize(1);
            confetti.setPower(25);
            confetti.setFade(false);
            confetti.destroyTarget(true);

            //End button design part
            $('.pamyment_method').each(function(index) {
                $(this).on('click', function() {
                    var value = $(this).val();
                    var i = $(this).attr('nobir');
                    if (value == 'Bkash') {
                        $('#bkash' + i).css('display', 'block');
                        $('#bkash_input' + i).prop('disabled', false);
                        $('#nagad_input' + i).prop('disabled', true);
                        $('#nagad' + i).css('display', 'none');
                    } else if (value == 'Nagad') {
                        $('#bkash_input' + i).prop('disabled', true);
                        $('#nagad_input' + i).prop('disabled', false);
                        $('#bkash' + i).css('display', 'none');
                        $('#nagad' + i).css('display', 'block');
                    } else {
                        $('#bkash_input' + i).prop('disabled', true);
                        $('#nagad_input' + i).prop('disabled', true);
                        $('#bkash' + i).css('display', 'none');
                        $('#nagad' + i).css('display', 'none');
                    }
                })
            });

        });
    </script>

</body>

</html>
