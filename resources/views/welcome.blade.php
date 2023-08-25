<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        {{-- font --}}
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,700">
        <link rel="stylesheet" href="https://maxcdn.bootstarpcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

        @vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'])


    </head>
    <body>
        <Header>
            <div class="top-nav container">
                <div class="logo">Example</div>
                <ul>
                    <li>
                        <a href="#">Shop</a>
                        <a href="">About</a>
                        <a href="">Blog</a>
                        <a href="">Chart</a> 
                    </li>
                </ul>
            </div> 
            {{-- end top-nav --}}

            <div class="hero container">
                <div class="hero-copy">
                    <h1>Ecoms</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil tenetur, aliquid iusto tempore quisquam cumque labore perspiciatis deleniti culpa, dolorum ipsum blanditiis. Quae, ratione voluptas in nihil dolor perferendis neque!</p>
                    <div class="hero-buttons">
                        <a href="#" class="button button-white">Button 1</a>
                        <a href="#" class="button button-white">Button 2</a>
                    </div>
                </div> 
                {{-- end hero copy --}}

                <div class="hero-image">
                    <img src="img/mc-book.png" alt="hero img">
                </div>
            </div> 
            {{--  end hero --}}
        </Header>

        <div class="featured-section">
            <div class="container">
                <h1 class="text-center">Featured</h1>

                <p class="section-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam magni odit sed cupiditate facilis inventore in qui reiciendis id ea. Nisi perferendis quas ipsum! Similique dicta perferendis doloremque sed officia.</p>

                <div class="text-center button-container">
                    <a href="" class="button">Featured</a>
                    <a href="" class="button">On Sale</a>
                </div>
            

                <div class="products text-center">
                    <div class="pr  oduct">
                        <a href=""><img src="img/mc-book.png" alt="product"></a>
                        <a href=""><div class="product-name">MacBook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="product">
                        <a href=""><img src="img/mc-book.png" alt="product"></a>
                        <a href=""><div class="product-name">MacBook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="product">
                        <a href=""><img src="img/mc-book.png" alt="product"></a>
                        <a href=""><div class="product-name">MacBook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="product">
                        <a href=""><img src="img/mc-book.png" alt="product"></a>
                        <a href=""><div class="product-name">MacBook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="product">
                        <a href=""><img src="img/mc-book.png" alt="product"></a>
                        <a href=""><div class="product-name">MacBook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="product">
                        <a href=""><img src="img/mc-book.png" alt="product"></a>
                        <a href=""><div class="product-name">MacBook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="product">
                        <a href=""><img src="img/mc-book.png" alt="product"></a>
                        <a href=""><div class="product-name">MacBook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="product">
                        <a href=""><img src="img/mc-book.png" alt="product"></a>
                        <a href=""><div class="product-name">MacBook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div> {{-- End Products --}}

                    <div class="text-center button-container">
                        <a href="" class="button">View more products</a>
                    </div>
                </div> 
            </div> 
            {{-- End container --}}
        </div> 
        {{-- End featured section --}}
        <div class="blog-section">
            <div class="container">
                <h1 class="text-center">From Our Blog</h1>

                <p class="section-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis magni et aspernatur labore. Molestias quam, distinctio eius exercitationem soluta dolor inventore maiores? Ab illo necessitatibus ducimus rem deserunt! Consectetur, qui.</p>

                <div class="blog-posts">
                    <div class="blog-post">
                        <a href=""><img src="img/mc-book.png" alt="blog image"></a>
                        <a href=""><h2 class="blog-title">Blog Title 1</h2></a>
                        <div class="blog-descrption">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit corporis esse sapiente commodi temporibus deserunt repellat saepe? Dolorem, possimus eaque?</div>
                    </div>
                    <div class="blog-post">
                        <a href=""><img src="img/mc-book.png" alt="blog image"></a>
                        <a href=""><h2 class="blog-title">Blog Title 1</h2></a>
                        <div class="blog-descrption">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit corporis esse sapiente commodi temporibus deserunt repellat saepe? Dolorem, possimus eaque?</div>
                    </div>
                    <div class="blog-post">
                        <a href=""><img src="img/mc-book.png" alt="blog image"></a>
                        <a href=""><h2 class="blog-title">Blog Title 1</h2></a>
                        <div class="blog-descrption">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit corporis esse sapiente commodi temporibus deserunt repellat saepe? Dolorem, possimus eaque?</div>
                    </div>
                </div> 
                {{-- end blog-posts --}}
            </div>
            {{-- end container --}}
        </div>
        {{-- end blog-section --}}

        <footer>
            <div class="footer-content container">
                <div class="made-with">Made with <i class="fa fa-heart">by Ben</i></div>
                <ul>
                    <li>Follow MeL</li>
                    <li><a href=""><i class="fa fa-globe"></i></a></li>
                    <li><a href=""><i class="fa fa-globe"></i></a></li>
                    <li><a href=""><i class="fa fa-globe"></i></a></li>
                    <li><a href=""><i class="fa fa-globe"></i></a></li>
                </ul>
            </div>
            {{-- end footer-content container --}}
        </footer>

    </body>
</html>
