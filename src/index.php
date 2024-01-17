<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store</title>
    <link rel="stylesheet" href="style/css/normalize.css">
    <link rel="stylesheet" href="style/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="header__inner">
            <div class="header__top">
                <div class="container">
                    <div class="header__top-inner">
                        <div class="logo">
                            <img src="icons/Logo.svg" alt="logo-company">
                        </div>
                        <nav>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Shop</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="navbar">
                            <ul>
                                <a href="login_page.php"><li class="navbar__element"> <img src="icons/user.svg" alt="user-icon"></li></a>
                                <li class="navbar__element"> <img src="icons/Cart.svg" alt="shop-basket"></li>
                                <li class="navbar__element"> <img src="icons/Search.svg" alt="shop-basket"></li>
                                <li class="navbar__element"> <img src="icons/Favourite.svg" alt="shop-basket"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__bottom">
                <div class="container">
                    <div class="header__bottom-inner">
                        <div class="advertising-offer">
                            <h5>New Arrival</h5>
                            <h1>Discover Our New Collection</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.</p>
                            <button>BUY NOW</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="browse-the-range">
        <div class="container">
            <div class="browse-the-range__inner">
                <div class="section-title">
                    <h2>Browse The Range</h2>
                </div>
                <div class="browse-the-range__inner">
                    <div class="browse-the-range__elements">
                        <div class="browse-the-range__element">
                            <div class="category-image">
                                <img src="img/living-room.png" alt="">
                            </div>
                            <div class="category-title">
                                <h3>Living</h3>
                            </div>    
                        </div>
                        <div class="browse-the-range__element">
                            <div class="category-image">
                                <img src="img/dining-room.png" alt="">
                            </div>
                            <div class="category-title">
                                <h3>Dining</h3>
                            </div>
                        </div>
                        <div class="browse-the-range__element">
                            <div class="category-image">
                                    <img src="img/bedroom.png" alt=""> 
                            </div>
                            <div class="category-title">
                                <h3>Bedroom</h3>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </section>
    <section class="our-products">
        <div class="container">
            <div class="our-products__inner">
                <div class="section-title">
                    <h2>Our products</h2>
                </div>
                <div class="our-products__items">
                    <div class="our-products__item">
                        <div class="our-products-image"><img src="img/Luxury big sofa.png" alt=""></div>
                        <div class="our-product-content">
                            <div class="title-product-category"><h3>Sofa</h3></div>
                            <div class="title-product"><p>Luxury big sofa</p></div>
                            <div class="product-price"><h4>₹ 2500</h4></div>
                        </div>
                    </div>
                    <div class="our-products__item">
                        <div class="our-products-image"> <img src="img/Luxury big sofa.png" alt=""></div>
                        <div class="our-product-content">
                            <div class="title-product-category"><h3>Sofa</h3></div>
                            <div class="title-product"><p>Luxury big sofa</p></div>
                            <div class="product-price"><h4>₹ 2500</h4></div>
                        </div>
                    </div>
                    <div class="our-products__item">
                        <div class="our-products-image"> <img src="img/Luxury big sofa.png" alt=""></div>
                        <div class="our-product-content">
                            <div class="title-product-category"><h3>Sofa</h3></div>
                            <div class="title-product"><p>Luxury big sofa</p></div>
                            <div class="product-price"><h4>₹ 2500</h4></div>
                        </div>
                    </div>
                    <div class="our-products__item">
                        <div class="our-products-image"> <img src="img/Luxury big sofa.png" alt=""></div>
                        <div class="our-product-content">
                            <div class="title-product-category"><h3>Sofa</h3></div>
                            <div class="title-product"><p>Luxury big sofa</p></div>
                            <div class="product-price"><h4>₹ 2500</h4></div>
                        </div>
                    </div>
                </div>
                <div class="our-products__button-container">
                <button class="show-more">Show More</button>
                </div>
            </div>
        </div>
    </section>
    <div class="our-features">
        <div class="container">
            <div class="our-features__inner">
                <div class="our-features__items">
                    <div class="our-features__item">
                        <div class="our-features_item-image">
                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M49.3547 3.51562C48.0744 3.51562 46.8741 3.86121 45.839 4.46156V1.75781C45.839 0.787031 45.052 0 44.0812 0H15.9562C14.9853 0 14.1983 0.787031 14.1983 1.75781V4.48301C13.155 3.8693 11.941 3.51562 10.6455 3.51562C6.76848 3.51562 3.61426 6.66984 3.61426 10.5469C3.61426 13.5041 4.49059 16.3615 6.14844 18.8102C8.97078 22.9789 12.4511 24.0607 15.331 25.2127C16.9916 29.348 20.3496 32.6252 24.5384 34.1769L23.2422 42.4219H22.9875C20.0797 42.4219 17.714 44.7875 17.714 47.6953V56.4844H15.9562C14.9854 56.4844 14.1984 57.2714 14.1984 58.2422C14.1984 59.213 14.9854 60 15.9562 60H44.0812C45.052 60 45.839 59.213 45.839 58.2422C45.839 57.2714 45.052 56.4844 44.0812 56.4844H42.3234V47.6953C42.3234 44.7875 39.9577 42.4219 37.05 42.4219H36.7952L35.4991 34.177C39.6941 32.623 43.0558 29.3386 44.7139 25.1948C47.4344 24.1066 51.0005 23.0217 53.8518 18.8102C55.5097 16.3615 56.386 13.504 56.386 10.5469C56.3859 6.66984 53.2317 3.51562 49.3547 3.51562ZM14.1853 20.968C9.89926 19.2536 7.12988 15.1631 7.12988 10.5469C7.12988 8.60836 8.70699 7.03125 10.6455 7.03125C12.584 7.03125 14.1611 8.60836 14.1611 10.5469C14.1611 10.6705 14.1741 10.791 14.1984 10.9073V19.3359C14.1984 19.9009 14.2288 20.4588 14.2869 21.0087L14.1853 20.968ZM38.8078 56.4844H21.2296V52.9688H38.8078V56.4844ZM37.05 45.9375C38.0192 45.9375 38.8078 46.7261 38.8078 47.6953V49.4531H21.2296V47.6953C21.2296 46.7261 22.0182 45.9375 22.9875 45.9375C23.9411 45.9375 34.8134 45.9375 37.05 45.9375ZM26.801 42.4219L27.9642 35.023C28.6368 35.1107 29.3225 35.1562 30.0187 35.1562C30.7149 35.1562 31.4006 35.1105 32.0732 35.023L33.2364 42.4219H26.801ZM42.3234 19.3359C42.3234 26.1207 36.8035 31.6406 30.0187 31.6406C23.2339 31.6406 17.714 26.1207 17.714 19.3359V10.5469H42.3234V19.3359ZM42.3234 7.03125H17.714V3.51562H42.3234V7.03125ZM45.8148 20.968L45.7523 20.993C45.8093 20.4483 45.8389 19.8955 45.8389 19.3359V10.5469C45.839 8.60836 47.4161 7.03125 49.3547 7.03125C51.2932 7.03125 52.8703 8.60836 52.8703 10.5469C52.8703 15.1631 50.1009 19.2537 45.8148 20.968Z" fill="#242424"/>
                            </svg>
                        </div>
                        <div class="our-features_item-content">
                            <h4>High Quality</h4>
                            <p>crafted from top materials</p>
                        </div>
                    </div>
                    <div class="our-features__item">
                        <div class="our-features_item-image">
                            <svg width="61" height="60" viewBox="0 0 61 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_6_559)">
                            <path d="M57.4525 21.2611C56.6608 18.8096 56.9983 15.1295 54.9405 12.2881C52.8665 9.42425 49.2594 8.61027 47.2225 7.12058C45.2071 5.6466 43.3321 2.43906 39.942 1.33281C36.6475 0.25773 33.2786 1.7166 30.6665 1.7166C28.0547 1.7166 24.6861 0.257378 21.391 1.33269C18.0015 2.43871 16.1249 5.64695 14.1108 7.12023C12.0762 8.60816 8.46639 9.42437 6.39275 12.2877C4.3367 15.1268 4.6708 18.8153 3.88049 21.261C3.12838 23.5887 0.666504 26.3823 0.666504 30.0002C0.666504 33.6202 3.12557 36.403 3.88049 38.7392C4.67221 41.1907 4.33471 44.8708 6.39252 47.7122C8.46639 50.5762 12.0734 51.39 14.1105 52.8798C16.1255 54.3536 18.0009 57.5614 21.391 58.6675C24.6833 59.7419 28.0574 58.2837 30.6665 58.2837C33.2719 58.2837 36.654 59.7403 39.942 58.6676C43.3317 57.5616 45.207 54.3541 47.2222 52.8801C49.2568 51.3921 52.8666 50.5759 54.9403 47.7126C56.9964 44.8734 56.6621 41.1852 57.4525 38.7393C58.2046 36.4115 60.6665 33.6178 60.6665 30.0002C60.6665 26.3803 58.208 23.5983 57.4525 21.2611ZM52.9922 37.2979C52.0694 40.1543 52.3112 43.3511 51.144 44.9629C49.9611 46.5961 46.8534 47.3421 44.4554 49.0962C42.0836 50.8307 40.4213 53.5803 38.4879 54.2111C36.6589 54.808 33.6781 53.596 30.6666 53.596C27.6331 53.596 24.683 54.8106 22.8452 54.2111C20.9121 53.5803 19.2521 50.8326 16.8778 49.0961C14.4939 47.3527 11.3685 46.5913 10.189 44.9627C9.02561 43.3562 9.25822 40.1373 8.341 37.298C7.44193 34.5161 5.354 32.1073 5.354 30.0002C5.354 27.8909 7.44006 25.4904 8.34076 22.7024C9.26361 19.8461 9.02186 16.6491 10.189 15.0374C11.3712 13.4052 14.4813 12.6568 16.8778 10.9041C19.257 9.16398 20.9089 6.42097 22.8449 5.78921C24.6725 5.19296 27.663 6.40433 30.6664 6.40433C33.7054 6.40433 36.6481 5.18886 38.4878 5.78921C40.4207 6.41992 42.0821 9.16867 44.4554 10.9042C46.8388 12.6476 49.9645 13.409 51.144 15.0375C52.3076 16.6443 52.0737 19.8599 52.992 22.7022V22.7023C53.8911 25.4842 55.979 27.893 55.979 30.0002C55.979 32.1094 53.8929 34.5099 52.9922 37.2979ZM41.4645 22.4773C42.3799 23.3927 42.3799 24.8766 41.4645 25.7918L29.7333 37.523C28.818 38.4384 27.3339 38.4382 26.4187 37.523L19.8686 30.9729C18.9533 30.0576 18.9531 28.5736 19.8685 27.6584C20.7838 26.7432 22.268 26.743 23.183 27.6584L28.076 32.5512L38.1497 22.4774C39.0651 21.5621 40.5492 21.5621 41.4645 22.4773Z" fill="#242424"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_6_559">
                            <rect width="60" height="60" fill="white" transform="translate(0.666504)"/>
                            </clipPath>
                            </defs>
                            </svg>
                        </div>
                        <div class="our-features_item-content">
                            <h4>Warranty Protection</h4>
                            <p>Over 10 years</p>
                        </div>
                    </div>
                    <div class="our-features__item">
                        <div class="our-features_item-image">
                            <svg width="61" height="60" viewBox="0 0 61 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_6_567)">
                                <path d="M55.6814 31.102V3.77976C55.6814 2.80502 54.8912 2.01477 53.9164 2.01477H6.62861C5.65386 2.01477 4.86362 2.80502 4.86362 3.77976V33.2801C4.01218 33.4042 3.17982 33.7347 2.44346 34.2814C0.122148 35.9274 -0.426882 39.6111 1.51755 41.8828L9.46742 51.5205C14.3884 57.2799 19.616 57.9855 27.3874 57.9855C34.0563 57.9855 37.0378 58.015 42.85 56.6906L48.5095 55.337C49.4271 56.6185 50.884 57.4486 52.5218 57.4486H55.3097C58.0798 57.4486 60.3335 55.0745 60.3335 52.1562V36.3785C60.3336 33.5921 58.2784 31.3032 55.6814 31.102ZM47.7482 34.7327L45.3965 33.5383C41.5299 31.5866 37.0594 31.5143 33.1317 33.3404C32.0601 33.7619 29.7229 35.176 28.5106 35.1287H20.3502C17.6434 35.1287 15.4412 37.3308 15.4412 40.0377V41.3249C15.426 41.3089 15.4101 41.2937 15.3952 41.2774L9.56778 34.9521C9.21514 34.5693 8.81896 34.249 8.39371 33.992V16.4811H22.8376V22.9511C22.8376 23.9258 23.6278 24.7161 24.6026 24.7161H35.7398C36.7145 24.7161 37.5047 23.9258 37.5047 22.9511V16.4811H52.1516V31.1019C50.0894 31.2612 48.3698 32.7365 47.7482 34.7327ZM26.3674 16.4811H33.9747V21.1861H26.3674V16.4811ZM52.1515 12.9511H37.5047V5.54475H52.1516V12.9511H52.1515ZM33.9748 5.54475V12.9512H26.3675V5.54475H33.9748ZM22.8374 5.54475V12.9512H8.3936V5.54475H22.8374ZM42.0308 53.2569C36.6617 54.4866 33.4281 54.4368 27.4507 54.4368C20.1554 54.4368 16.6304 54.3189 12.1907 49.2741L4.24081 39.6365C2.858 37.8358 5.36264 35.7102 6.9716 37.3436L12.799 43.6691C14.3391 45.2942 16.2772 46.1886 18.666 46.2412H34.8224C35.7972 46.2412 36.5874 45.4509 36.5874 44.4762C36.5874 43.5014 35.7972 42.7112 34.8224 42.7112H18.9711V40.0375C18.9711 39.2771 19.5896 38.6584 20.3501 38.6584H28.5105C30.3489 38.7901 33.0024 37.255 34.6198 36.5411C37.5615 35.1734 40.9098 35.2275 43.8019 36.6873L47.4982 38.5648V51.949L42.0308 53.2569ZM56.8036 52.1561C56.8036 53.1279 56.1335 53.9185 55.3098 53.9185H52.5219C51.6982 53.9185 51.0282 53.1279 51.0282 52.1561V36.3785C51.0282 35.4067 51.6983 34.616 52.5219 34.616H55.3098C56.1335 34.616 56.8036 35.4066 56.8036 36.3785V52.1561Z" fill="#242424"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_6_567">
                                <rect width="60" height="60" fill="white" transform="translate(0.333496)"/>
                                </clipPath>
                                </defs>
                                </svg>
                        </div>
                        <div class="our-features_item-content">
                            <h4>Free Shipping</h4>
                            <p>Order over ₹ 18000</p>
                        </div>
                    </div>
                    <div class="our-features__item">
                        <div class="our-features_item-image">
                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_6_573)">
                                <path d="M54.6935 23.9628C54.2992 10.6825 43.3741 0 29.9999 0C16.6257 0 5.70059 10.6825 5.30612 23.9628L3.5293 25.7396V37.7898L5.294 39.5545V47.7647C5.294 52.5652 9.19941 56.4706 13.9999 56.4706H16.1858C16.9142 58.5246 18.8758 60 21.1764 60H24.7058C27.0079 60 28.9705 58.5225 29.6978 56.4664C29.7986 56.4681 29.8997 56.4706 29.9999 56.4706C38.522 56.4706 45.6526 50.3981 47.2921 42.3529H51.9073L56.4705 37.7898V25.7396L54.6935 23.9628ZM29.9999 3.52941C40.4741 3.52941 49.1953 11.174 50.8806 21.1765H47.2921C45.6526 13.1313 38.522 7.05882 29.9999 7.05882C21.4778 7.05882 14.3472 13.1313 12.7077 21.1765H9.11918C10.8045 11.174 19.5257 3.52941 29.9999 3.52941ZM43.6708 21.1765C37.9662 21.1594 33.9368 21.5068 30.6147 16.6506L29.0015 14.2926L27.6152 16.7907C25.5952 20.4306 22.8748 21.1765 19.4117 21.1765H16.3289C17.9001 15.0944 23.4337 10.5882 29.9999 10.5882C36.5661 10.5882 42.0997 15.0944 43.6708 21.1765ZM12.3528 38.8235H9.55436L7.05871 36.3279V27.2015L9.55436 24.7059H12.3528V38.8235ZM8.82341 47.7647V42.3529H12.7042C13.3686 45.6441 14.9581 48.6652 17.3129 51.0916C16.8193 51.6191 16.4321 52.2467 16.1858 52.9412H13.9999C11.1455 52.9412 8.82341 50.6191 8.82341 47.7647ZM24.7058 56.4706H21.1764C20.2032 56.4706 19.4117 55.6791 19.4117 54.7059C19.4117 53.7328 20.2032 52.9412 21.1764 52.9412H24.7058C25.6788 52.9412 26.4705 53.7328 26.4705 54.7059C26.4705 55.6791 25.6788 56.4706 24.7058 56.4706ZM44.1175 38.8235C44.1175 46.608 37.7844 52.9412 29.9999 52.9412C29.8987 52.9412 29.7967 52.9392 29.6948 52.9368C28.9652 50.8851 27.0047 49.4118 24.7058 49.4118C21.0822 49.4198 21.14 49.3936 20.6884 49.4352C17.6246 46.7498 15.8822 42.9248 15.8822 38.8235V24.7059H19.4117C22.5348 24.7059 26.3384 24.1909 29.2826 20.6076C33.1673 24.6786 37.9146 24.7059 42.1761 24.7059H44.1175V38.8235ZM52.9411 36.3279L50.4454 38.8235H47.6469V24.7059H50.4454L52.9411 27.2015V36.3279Z" fill="#242424"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_6_573">
                                <rect width="60" height="60" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                        </div>
                        <div class="our-features_item-content">
                            <h4>24 / 7 Support</h4>
                            <p>Dedicated support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="footer__inner">
                <div class="elements-footer">
                <div class="company-status">
                    <div class="company-status__inner">
                        <div class="company-status-elements">
                            <div class="footer__company-logo">
                                <svg width="209" height="28" viewBox="0 0 209 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.4517 21.1562V27H0.593262V21.1562H3.79736V6.43066H0.593262V0.586914H22.3911V11.2617H17.5933L16.5474 6.43066H12.2974V11.4277H15.9995V15.6777H12.2974V21.1562H15.4517ZM28.8491 27.2988C27.7202 27.2988 26.6965 27.0775 25.7778 26.6348C24.8481 26.2031 24.1066 25.5778 23.5532 24.7588C22.9998 23.9398 22.7231 22.988 22.7231 21.9033C22.7231 20.7301 23.0496 19.734 23.7026 18.915C24.3556 18.1182 25.2078 17.5205 26.2593 17.1221C27.3218 16.7236 28.4673 16.5244 29.6958 16.5244C31.1457 16.5244 32.5402 16.7402 33.8794 17.1719V16.4248C33.8794 15.5394 33.5031 14.8643 32.7505 14.3994C32.009 13.9346 31.0018 13.7021 29.729 13.7021C29.1867 13.7021 28.578 13.7686 27.9028 13.9014C27.2277 14.0342 26.5692 14.2168 25.9272 14.4492C25.2853 14.6816 24.7264 14.9417 24.2505 15.2295L23.769 15.0303V10.1992C25.1082 9.72331 26.4751 9.38574 27.8696 9.18652C29.2642 8.97624 30.5646 8.87109 31.771 8.87109C38.5002 8.87109 41.8647 10.7637 41.8647 14.5488V22.0029H43.4253V27H34.9253L34.1782 24.2773C33.7023 25.207 32.9608 25.943 31.9536 26.4854C30.9465 27.0277 29.9116 27.2988 28.8491 27.2988ZM31.9702 23.0488C32.3354 23.0488 32.7062 22.988 33.0825 22.8662C33.4699 22.7445 33.7355 22.6172 33.8794 22.4844V19.6953C33.7134 19.6732 33.4478 19.6068 33.0825 19.4961C32.7062 19.3965 32.3797 19.3467 32.103 19.3467C31.5164 19.3467 31.0461 19.5293 30.6919 19.8945C30.3488 20.2598 30.1772 20.7467 30.1772 21.3555C30.1772 21.8092 30.3377 22.2077 30.6587 22.5508C30.9907 22.8828 31.4279 23.0488 31.9702 23.0488ZM68.0786 15.7109V22.2021H70.3862V27H60.1099V15.6777C60.1099 15.2018 59.9549 14.7812 59.645 14.416C59.3462 14.0508 58.981 13.8682 58.5493 13.8682C57.7414 13.8682 57.2323 14.2721 57.022 15.0801C56.8006 15.9102 56.6899 17.0723 56.6899 18.5664V22.2021H56.7231V27H46.3472V22.2021H48.7544V14.3496H46.3472V9.86719L56.6899 8.87109V11.3613C57.4536 10.4538 58.3224 9.81185 59.2964 9.43555C60.2703 9.05924 61.3716 8.87109 62.6001 8.87109C66.2524 8.87109 68.0786 11.151 68.0786 15.7109ZM80.4302 27.2988C76.1691 27.2988 74.0386 25.0798 74.0386 20.6416V14.084H71.3823V9.21973H74.0386V5.41797L81.9907 3.6416V9.21973H85.1782V14.084H81.9907V20.0605C81.9907 20.5586 82.1789 20.9736 82.5552 21.3057C82.9315 21.6377 83.4019 21.8037 83.9663 21.8037C84.3758 21.8037 84.7798 21.7705 85.1782 21.7041V26.3193C83.7173 26.9723 82.1346 27.2988 80.4302 27.2988ZM94.0933 27.2988C92.9644 27.2988 91.9406 27.0775 91.022 26.6348C90.0923 26.2031 89.3507 25.5778 88.7974 24.7588C88.244 23.9398 87.9673 22.988 87.9673 21.9033C87.9673 20.7301 88.2938 19.734 88.9468 18.915C89.5998 18.1182 90.452 17.5205 91.5034 17.1221C92.5659 16.7236 93.7114 16.5244 94.9399 16.5244C96.3898 16.5244 97.7843 16.7402 99.1235 17.1719V16.4248C99.1235 15.5394 98.7472 14.8643 97.9946 14.3994C97.2531 13.9346 96.2459 13.7021 94.9731 13.7021C94.4308 13.7021 93.8221 13.7686 93.147 13.9014C92.4718 14.0342 91.8133 14.2168 91.1714 14.4492C90.5295 14.6816 89.9705 14.9417 89.4946 15.2295L89.0132 15.0303V10.1992C90.3524 9.72331 91.7192 9.38574 93.1138 9.18652C94.5083 8.97624 95.8088 8.87109 97.0151 8.87109C103.744 8.87109 107.109 10.7637 107.109 14.5488V22.0029H108.669V27H100.169L99.4224 24.2773C98.9465 25.207 98.2049 25.943 97.1978 26.4854C96.1906 27.0277 95.1558 27.2988 94.0933 27.2988ZM97.2144 23.0488C97.5796 23.0488 97.9504 22.988 98.3267 22.8662C98.714 22.7445 98.9797 22.6172 99.1235 22.4844V19.6953C98.9575 19.6732 98.6919 19.6068 98.3267 19.4961C97.9504 19.3965 97.6239 19.3467 97.3472 19.3467C96.7606 19.3467 96.2902 19.5293 95.936 19.8945C95.5929 20.2598 95.4214 20.7467 95.4214 21.3555C95.4214 21.8092 95.5819 22.2077 95.9028 22.5508C96.2349 22.8828 96.672 23.0488 97.2144 23.0488ZM120.573 27.2988C118.304 27.2988 116.295 26.7012 114.546 25.5059L113.999 27H110.911V20.4424H114.613C114.757 21.2835 115.15 22.0361 115.792 22.7002C116.433 23.3643 117.175 23.6963 118.016 23.6963C118.337 23.6963 118.614 23.6077 118.846 23.4307C119.09 23.2536 119.211 22.9603 119.211 22.5508C119.211 22.1413 118.979 21.7705 118.514 21.4385C118.038 21.0954 117.33 20.7025 116.389 20.2598C115.249 19.6953 114.319 19.1807 113.6 18.7158C112.87 18.251 112.239 17.6423 111.708 16.8896C111.176 16.126 110.911 15.2129 110.911 14.1504C110.911 13.0547 111.27 12.1029 111.99 11.2949C112.709 10.498 113.655 9.89486 114.829 9.48535C116.002 9.07585 117.28 8.87109 118.664 8.87109C120.468 8.87109 122.144 9.34701 123.694 10.2988L124.109 9.21973H126.865V14.5156H123.661C123.384 13.7962 122.986 13.2318 122.465 12.8223C121.945 12.4128 121.336 12.208 120.639 12.208C119.82 12.208 119.411 12.4681 119.411 12.9883C119.422 13.3424 119.638 13.6468 120.058 13.9014C120.479 14.1449 121.159 14.4769 122.1 14.8975C122.687 15.141 123.223 15.3844 123.71 15.6279C124.197 15.8714 124.635 16.1038 125.022 16.3252C125.797 16.779 126.472 17.4209 127.047 18.251C127.623 19.07 127.911 20.0938 127.911 21.3223C127.911 22.6283 127.573 23.724 126.898 24.6094C126.223 25.5059 125.326 26.181 124.208 26.6348C123.091 27.0775 121.879 27.2988 120.573 27.2988ZM139.133 27.2988C134.872 27.2988 132.742 25.0798 132.742 20.6416V14.084H130.085V9.21973H132.742V5.41797L140.694 3.6416V9.21973H143.881V14.084H140.694V20.0605C140.694 20.5586 140.882 20.9736 141.258 21.3057C141.635 21.6377 142.105 21.8037 142.669 21.8037C143.079 21.8037 143.483 21.7705 143.881 21.7041V26.3193C142.42 26.9723 140.838 27.2988 139.133 27.2988ZM153.925 27.2988C150.361 27.2988 148.58 25.0687 148.58 20.6084V14.3496H146.438V9.86719L156.532 8.87109V20.6084C156.532 21.04 156.692 21.4385 157.013 21.8037C157.334 22.1579 157.71 22.335 158.142 22.335C158.64 22.335 159.028 22.1689 159.304 21.8369C159.592 21.4938 159.736 21.0732 159.736 20.5752V14.3496H158.142V9.86719L167.688 8.87109V22.0029H169.83V27H159.736V24.4102C159.149 25.3177 158.363 26.026 157.378 26.5352C156.404 27.0443 155.253 27.2988 153.925 27.2988ZM184.721 27H171.971V22.0029H174.113V14.3496H171.971V9.86719L182.065 8.87109V11.7598C182.419 11.2064 182.939 10.7139 183.625 10.2822C184.312 9.83952 185.042 9.49642 185.817 9.25293C186.603 8.99837 187.306 8.87109 187.925 8.87109V15.9102C186.63 15.4785 185.562 15.2627 184.721 15.2627C183.659 15.2627 182.95 15.5726 182.596 16.1924C182.242 16.8011 182.065 17.6035 182.065 18.5996V22.0029H184.721V27ZM199.862 27.2988C197.803 27.2988 196.016 26.917 194.5 26.1533C192.972 25.4007 191.799 24.3216 190.98 22.916C190.172 21.5104 189.768 19.8669 189.768 17.9854C189.768 16.126 190.167 14.5101 190.963 13.1377C191.749 11.7764 192.861 10.7249 194.3 9.9834C195.739 9.24186 197.427 8.87109 199.364 8.87109C201.146 8.87109 202.717 9.21973 204.079 9.91699C205.44 10.6253 206.491 11.627 207.233 12.9219C207.986 14.2168 208.362 15.7275 208.362 17.4541C208.362 18.0518 208.273 18.6162 208.096 19.1475H197.753C197.753 20.1878 198.146 21.0234 198.932 21.6543C199.718 22.2741 200.664 22.584 201.771 22.584C202.612 22.584 203.536 22.4401 204.543 22.1523C205.551 21.8535 206.563 21.3942 207.582 20.7744L207.864 20.874V25.3398C206.724 25.9928 205.551 26.4854 204.344 26.8174C203.149 27.1383 201.655 27.2988 199.862 27.2988ZM197.753 15.7441V16.2256H202.003V15.877C202.003 15.0911 201.821 14.416 201.456 13.8516C201.101 13.276 200.57 12.9883 199.862 12.9883C199.275 12.9883 198.777 13.2816 198.368 13.8682C197.958 14.4437 197.753 15.069 197.753 15.7441Z" fill="black"/>
                                </svg>
                            </div>
                            <div class="company-address">
                                <p>236 5th SE Avenue, Bangalore </br>560000, India</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-links">
                    <div class="site-links__inner">
                        <div class="site-links-elements">
                            <ul>
                                <li><a href="#">
                                    Links
                                </a></li>
                                <li><a href="#">
                                    Home
                                </a></li>
                                <li><a href="#">
                                    Shop
                                </a></li>
                                <li><a href="#">
                                    About
                                </a></li>
                                <li><a href="#">
                                    Contact
                                </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="help-question">
                    <div class="help-question__inner">
                        <div class="help-question-elements">
                            <ul>
                                <li><a href="#">
                                    Help
                                </a></li>
                                <li><a href="#">
                                    Payment Options
                                </a></li>
                                <li><a href="#">
                                    Returns & Replacement
                                </a></li>
                                <li><a href="#">
                                    Privacy Policies
                                </a></li>
                                <li><a href="#">
                                    Terms & Conditions
                                </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="newsletter">
                    <div class="newsletter__innner">
                        <div class="newsletter-elements">
                            <ul>
                                <li><a href="#">
                                    Newsletter
                                </a></li>
                            </ul>
                                <input type="text" value="Enter Your Email Address">
                            <button>subscribe</button>
                        </div>  
                 </div>
                </div>
            </div>
            </div>
        </div>
    </footer>
</body>
<script src = "scripts/slider.js"></script>
</html>