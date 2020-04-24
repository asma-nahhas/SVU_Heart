  @extends("Header")

  @section("content")

    <!-- breadcrumb start-->
    <section class="breadcrumb_part breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>our blog</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
    <!--================Blog Area =================-->
    <section class="blog_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="img/blog/Heart_Blog_1.jpg" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>16</h3>
                                    <p>Jan</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="ArticleView/3">
                                    <h2>Your guide to lowering blood cholesterol</h2>
                                </a>
                                <p>Cholesterol is a waxy substance that accumulates on the walls of the arteries and plays an important role in the formation of hormones and vitamin D.</p>
                                <p>

                                <h4>LDL</h4>

                                It is called harmful cholesterol and helps build cells, but when it exceeds the normal rate it accumulates on the arterial wall and leads to narrowing and stiffness in the long term.
                                </p>

                                <h4>HDL</h4>

                                It is called beneficial cholesterol and protects the body from heart disease by sending harmful cholesterol to the liver for disposal, and attention must be paid to achieving a balance in the levels of harmful and beneficial cholesterol and triglyceride levels so that they do not exceed 200 mg / dl in the body
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-user"></i> Heart, Health</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="img/blog/Heart_Blog_2.jpg" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>01</h3>
                                    <p>Feb</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="{{url('single-blog')}}">
                                    <h2>Healthy food for heart patients</h2>
                                </a>
                                <p>There may be beneficial foods for heart patients, and other foods harmful for heart patients, but a healthy diet for heart patients...</p>
                                <p>
                                    Julia Zombano, a dietitian at the Heart Prevention Center at Cleveland Clinic in the United States, says it can reduce the risk of cardiovascular disease by eating fresh foods rich in antioxidants. She calls on Zombano to eat all foods fresh because she believes that these are healthy foods for patients with heart disease and also prevention of heart disease.

                                </p>

                                <p>

                                    Julia Zombano, a dietitian at the Heart Prevention Center at Cleveland Clinic in the United States, says it can reduce the risk of cardiovascular disease by eating fresh foods rich in antioxidants. She calls on Zombano to eat all foods fresh because she believes that these are healthy foods for patients with heart disease and also prevention of heart disease.


                                    And Susan Farrell, a spokeswoman for the American Dietetic Association, believes that there is no magic food that can reduce the risk of heart disease, but a healthy and varied healthy diet leads to a healthy heart. And it stresses that a person needs a balance in his food to get all the different nutrients he needs.

                                </p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-user"></i> Heart, Health</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="img/blog/Heart_Blog_3.jpg" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>30</h3>
                                    <p>Jan</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="{{url('single-blog')}}">
                                    <h2>Methods for diagnosing heart diseases</h2>
                                </a>
                                <p>The heart is the most important organ of the human body, so stopping it from working leads to the cessation of the entire life from the body. Therefore, it is necessary to constantly check the heart.</p>

                                <p>
                                    types such as cancers and heart disease. An atomic heart scan is used to visualize progressive heart disease and cardiomyopathy. In the atomic scanning of the heart, a small amount of radioactive material is injected into the bloodstream, and the movement of the radioactive material is photographed inside the heart to identify the functions of the heart.
                                </p>
                                <p>
                                <ml>
                                    <li>Uses of atomic scanning of the heart</li>
                                    <li>Check blood flow to the heart muscle</li>
                                    <li>Examine damaged parts of the heart muscle</li>
                                    <li>Check for coronary heart disease</li>
                                </ml>
                            </p>
                                <h4>Advantages of examination using an atomic cardiac scan</h4>
                                <p>
                                    <ml>
                                        <li>Atomic scanning of the heart gives accurate images of the functions and anatomy of the heart</li>
                                        <li>Determine the right remedy</li>
                                        <li>Less costly than surgeries</li>
                                    </ml>
                                </p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-user"></i> Heart, Health/a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="img/blog/Heart_Blog_4.jpg" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>12</h3>
                                    <p>May</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="{{url('single-blog')}}">
                                    <h2>Food that strengthens the heart muscle</h2>
                                </a>
                                <p>There are some foods that strengthen the heart and improve its work due to the presence of some important nutrients for cardiovascular health.</p>
                                <p>
                                    A recent study showed that eating yogurt protects against gum disease. Gum disease increases the risk of heart disease. Japanese scientists have found that people who eat yogurt daily have a reduced risk of gum disease that leads to heart disease. The scientists pointed out that the reason is due to the beneficial bacteria in yogurt that protect from harmful bacteria. Among the benefits of beneficial bacteria in yogurt, as well as preventing gum disease and heart disease, increasing immunity and improving digestion are factors that ultimately lead to an increase in the overall health of the body.
                                </p>

                                <p>

                                    <ml>
                                        <li>Raisins</li>
                                        <li>Whole grains</li>
                                        <li>Salmon</li>
                                        <li> Tomato</li>
                                        <li>Pomegranate</li>
                                    </ml>
                                </p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>

                   

                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Search Keyword'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">
                                            <button class="btn" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1"
                                    type="submit">Search</button>
                            </form>
                        </aside>

                  


                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>

                            <form action="#">
                                <div class="form-group">
                                    <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1"
                                    type="submit">Subscribe</button>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

          @endsection

        @extends("Footer")