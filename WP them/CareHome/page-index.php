<?php get_header();?>
    <!-- Header block -->
    <section class="header_block" style="<?php if(get_field('height_100%_header_block')) { ?>
        height: 100vh;
    <?php } 
    if( $background_header_block = get_field('background_header_block') ) { ?>
        background: url('<?php echo $background_header_block["url"]?>') no-repeat;
        background-position: center;
        background-size: cover; 
    <?php } ?>">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-12 header_block_iner mov mov_zoomIn_start">

                    <?php if( $title_header_block = get_field('title_header_block') ) { ?>
                        <h1><?php echo $title_header_block; ?></h1>
                    <?php } ?>

                    <?php if( $button_text_header_block = get_field('button_text_header_block') ) { ?>
                      <a href="<?php echo home_url(); ?>/request" class="button_0 button_2 align-items-center justify-content-center"><?php echo $button_text_header_block; ?></a>  
                    <?php } ?>
                    
                </div>

            </div>
        </div>
    </section>

    <!-- Block 1 -->
    <section id="m1" class="block_1">
        <div class="container">
            
            <div class="title_block_div">
            <?php if( $title_top_block_1 = get_field('title_top_block_1') ) { ?>
                <p class="title_top"><?php echo $title_top_block_1; ?></p>
            <?php } ?>
            
            <?php if( $title_block_1 = get_field('title_block_1') ) { ?>
                <p class="title"><?php echo $title_block_1; ?></p>
            <?php } ?>

            <?php if( $title_bot_block_1 = get_field('title_bot_block_1') ) { ?>
                <p class="title_bot"><?php echo $title_block_1; ?></p>
            <?php } ?>

            </div>

            <?php if(have_rows('why_use_blocks')): ?>
            <div class="row ico_block_1 mov_div mov_next_fadeIn_timeOut">

                <?php 
                $count_while = 0;
                while( have_rows('why_use_blocks') ): the_row(); 
                    // vars
                    $count_while++;
                    $img = get_sub_field('img');
                    $title = get_sub_field('title');
                    $text = get_sub_field('text');
                ?>

                    <?php if( $img && $title && $text ): ?>

                    <div class="col-12 col-lg-6 ico_block_1_<?php echo ($count_while % 2 == 0) ? 'r' : 'l' ?>">
                        <div class="ico" style="
                        background: url('<?php echo $img["url"]?>') no-repeat;background-position: center;"></div>
                        <p class="title">
                            <?php echo $title ?>
                        </p>
                        <p class="text">
                            <?php echo $text ?>
                        </p>
                    </div>

                    <?php endif; ?>

                <?php endwhile; ?>

            </div>
            <?php endif; ?>

        </div>
    </section>
 
    <!-- Block 2 -->
    <section id="m2" class="block_2">
        <div class="block_2_iner">
            <p class="block_2_iner_text">
                CAREHOME
            </p>

            <div class="block_2_iner_absolute left_block_2_iner tab_js tab_2" style="<?php if( $img_left = get_field('img_left') ) { ?>
                background: url('<?php echo $img_left["url"]?>') no-repeat;
                background-position: center;
                background-size: cover; 
            <?php } ?>">
                <div class="row justify-content-end align-items-center">

                    <div class="col">
                        <?php if( $title_left_block_2 = get_field('title_left_block_2') ) { ?>
                            <div class="title"><?php echo $title_left_block_2; ?></div>
                        <?php } ?>

                        <?php if( $text_preview_left = get_field('text_preview_left') ) { ?>
                            <p><?php echo $text_preview_left; ?></p>
                        <?php } ?>

                        <?php if( $text_button_left = get_field('text_button_left') ) { ?>
                            <a href="#" class="button_0 button_2 align-items-center justify-content-center tabs_js active" data-tab="tab_1"><?php echo $text_button_left; ?></a>
                        <?php } ?>
                    </div>

                </div>
            </div>

            <div class="block_2_iner_absolute right_block_2_iner tab_js tab_1" style="<?php if( $img_left_right = get_field('img_left_right') ) { ?>
                background: url('<?php echo $img_left_right["url"]?>') no-repeat;
                background-position: center;
                background-size: cover; 
            <?php } ?>">
                <div class="row justify-content-start align-items-center">

                    <div class="col">
                        <?php if( $title_right_block_2 = get_field('title_right_block_2') ) { ?>
                            <div class="title"><?php echo $title_right_block_2; ?></div>
                        <?php } ?>

                        <?php if( $text_preview_right = get_field('text_preview_right') ) { ?>
                            <p><?php echo $text_preview_right; ?></p>
                        <?php } ?>

                        <?php if( $text_button_right = get_field('text_button_right') ) { ?>
                            <a href="#" class="button_0 button_2 align-items-center justify-content-center tabs_js" data-tab="tab_2"><?php echo $text_button_right; ?></a>
                        <?php } ?>
                    </div>

                </div>
            </div>


            <div class="container">

                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 content_90">
                        <?php if( $title_left_block_2 = get_field('title_left_block_2') ) { ?>
                            <div class="title"><?php echo $title_left_block_2; ?></div>
                        <?php } ?>

                        <?php if( $text_left = get_field('text_left') ) { ?>
                            <p>
                                <?php echo $text_left; ?>
                            </p>
                        <?php } ?>
                    </div>

                    <div class="col-12 col-lg-6 content_90">
                        
                        <?php if( $title_right_block_2 = get_field('title_right_block_2') ) { ?>
                            <div class="title"><?php echo $title_right_block_2; ?></div>
                        <?php } ?>
                        
                        <?php if( $text_right = get_field('text_right') ) { ?>
                            <p>
                                <?php echo $text_right; ?>
                            </p>
                        <?php } ?>          

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Block 3 -->
    <section id="m3" class="block_3">
        <div class="container">
            
            <div class="title_block_div">
            <?php if( $title_top_block_3 = get_field('title_top_block_3') ) { ?>
                <p class="title_top"><?php echo $title_top_block_3; ?></p>
            <?php } ?>
            
            <?php if( $title_block_3 = get_field('title_block_3') ) { ?>
                <p class="title"><?php echo $title_block_3; ?></p>
            <?php } ?>

            <?php if( $title_bot_block_3 = get_field('title_bot_block_3') ) { ?>
                <p class="title_bot"><?php echo $title_block_3; ?></p>
            <?php } ?>

            </div>

            <div class="row block_3_row mov_div mov_slideInLeft">
                <div class="col block_3_iner block_3_1">
                    <div class="block_3_iner_step">
                        <p class="title">Step 1</p>
                        <div class="ico_b3 ico_b3_1"></div>
                        <p class="text">Automate operations</p>
                    </div>
                </div>
                <div class="col block_3_iner block_3_2">
                    <div class="block_3_iner_step block_3_iner_step_2">
                        <p class="title">Step 2</p>
                        <div class="ico_b3 ico_b3_2"></div>
                        <p class="text">Save time</p>
                    </div>
                </div>
                <div class="col block_3_iner block_3_3">
                    <div class="block_3_iner_step block_3_iner_step_3">
                        <p class="title">Step 3</p>
                        <div class="ico_b3 ico_b3_3"></div>
                        <p class="text">Reduce costs</p>
                    </div>
                </div>
                <div class="col block_3_iner block_3_4">
                    <div class="block_3_iner_step">
                        <p class="title">Step 4</p>
                        <div class="ico_b3 ico_b3_4"></div>
                        <p class="text">Grow your business</p>
                    </div>
                </div>


                <div class="col block_3_iner block_3_5">
                    <p class="title_content">
                        finally smart staff management software
                    </p>
                    <p class="text_content">
                        Carehome managers are constantly burdened with staffing and administrative risks, which is leading to significant regulatory risks. This means a significant proportion of a manager’s time is spent on administration related tasks than concentrating on delivering the best service for service users. That’s why we have created Carehome Schedule to automate operations, increase collaboration and reduce risks.
                    </p>
                    <a class="go_a" href="#features">See Features</a>
                </div>
            </div>

        </div>
    </section>


    <!-- Block 4 -->
    <section id="m4" class="block_4 block_4_l">
        <div class="container">
            
            <div class="title_block_div title_block_div_big">
                <p class="title_top">PROCESS</p>
                <p class="title">How it works</p>
                <p class="title_bot">Integrate with key 3rd parties such as recruitment agencies</p>
            </div>

            <div class="row align-items-center how_it_works_div">
                <div class="col-12 col-lg-6 how_it_works_div_l">
                    <img src="<?php bloginfo('template_url'); ?>/img/schedule.png" alt="schedule" class="mov mov_next_fadeInLeft">
                </div>
                <div class="col-12 col-lg-6 how_it_works_text">
                    <div class="title">
                        Scheduling
                    </div>
                    <p class="title_iner">
                        Automate the shift booking process.
                    </p>

                    <p>Create dynamic live staff schedules.</p>
                    <ul>
                        <li>
                            Create staff schedules and share instantly with all employees. Set simple rules to automatically identify and fill any shift with suitable locum or bank staff.
                        </li>
                    </ul>

                    <p>Monitor staff costs.</p>
                    <ul>
                        <li>
                            Constantly monitor costs of permanent and locum staff to ensure budget is maintained.
                        </li>
                    </ul>


                </div>

            </div>

        </div>
    </section>

    <section class="block_4_r block_4_how_it_works">
        <div class="container">

            <div class="row align-items-center how_it_works_div">

                <div class="col-12 col-lg-6 how_it_works_div_l how_it_works_text">
                    <div class="title">
                        Timesheets
                    </div>
                    <p class="title_iner">
                        Ensure permanent and locum staff always have accurate timesheets.
                    </p>

                    <p>Accurately monitor staff times.</p>
                    <ul>
                        <li>
                            All employees Clock-in/out usisng the mobile app which ensures all timesheets are accurate including any locum staff.
                        </li>
                    </ul>

                </div>

                <div class="col-12 col-lg-6">
                    <img src="<?php bloginfo('template_url'); ?>/img/Timesheet.png" alt="timesheet" class="mov mov_next_fadeInRight">
                </div>

            </div>
        </div>
    </section>

    <section class="block_4_l block_4_how_it_works">
        <div class="container">

            <div class="row align-items-center how_it_works_div">

                <div class="col-12 col-lg-6 how_it_works_div_l">
                    <img src="<?php bloginfo('template_url'); ?>/img/workforce_management.png" alt="workforce_management" class="mov mov_next_fadeInLeft">
                </div>

                <div class="col-12 col-lg-6 how_it_works_text">
                    <div class="title">
                        Workforce Management
                    </div>
                    <p class="title_iner">
                        Maintain Accurate staff records.
                    </p>

                    <p>Accurate Record keeping.</p>
                    <ul>
                        <li>
                            Simply maintain accurate staff records to ensure compliance with regulatory standards. Set simple rules to increase efficiency of staff monitoring tool
                        </li>
                    </ul>

                    <p>Performance monitoring.</p>
                    <ul>
                        <li>
                            Effectively Monitor staff performance at all levels to create a more engaged workforce.
                        </li>
                    </ul>

                </div>

            </div>
        </div>
    </section>

    <section class="block_4_r block_4_how_it_works">
        <div class="container">

            <div class="row align-items-center how_it_works_div">

                <div class="col-12 col-lg-6 how_it_works_div_l how_it_works_text">
                    <div class="title">
                        Communication
                    </div>
                    <p class="title_iner">
                        Communicate with all your staff through a simple and secure platform
                    </p>

                    <p>Effectively communicate with staff.</p>
                    <ul>
                        <li>
                            Send messages and communicate with your staff through a dedicated secure messaging system thus increasing engagement with staff.
                        </li>
                    </ul>

                </div>

                <div class="col-12 col-lg-6">
                    <img src="<?php bloginfo('template_url'); ?>/img/communication.png" alt="communication" class="mov mov_next_fadeInRight">
                </div>

            </div>
        </div>
    </section>

    <section class="block_4_l block_4_how_it_works">
        <div class="container">

            <div class="row align-items-center how_it_works_div">

                <div class="col-12 col-lg-6 how_it_works_div_l">
                    <img src="<?php bloginfo('template_url'); ?>/img/reporting.png" alt="reporting" class="mov mov_next_fadeInLeft">
                </div>

                <div class="col-12 col-lg-6 how_it_works_text">
                    <div class="title">
                        Standard and Custom reporting
                    </div>
                    <p class="title_iner">
                        Access data to solve specific business questions.
                    </p>

                    <p>Better understand your operations.</p>
                    <ul>
                        <li>
                            How are your care homes performing? What can we leverage from the top performing homes?
                        </li>
                    </ul>

                    <p>Workforce Planning</p>
                    <ul>
                        <li>
                            Evaluate turnover rates, retirement forecasts, critical skill leakages.
                        </li>
                    </ul>

                </div>
                
            </div>
        </div>
    </section>


    <!-- Block 5 -->
    <section id="features" class="block_5">
        <div class="container">
            
            <div class="title_block_div">
                <p class="title_top">FEATURES</p>
                <p class="title">All the features you need!</p>
                <p class="title_bot_2">
                    As a web based platform, Carehome Schedule can be accessed whether you are at work or on the go with no need to worry about extra hardware or infrastructure.
                </p>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6 left_block_5_div">

                    <div class="card_block_5 card_block_5_1 card_tile_js">
                        <p class="title">
                            Scheduling
                        </p>
                        <ul>
                            <li>
                                Create a schedule of up to 4 weeks which all employees can view the moment it is published
                            </li>
                            <li>
                                No More double bookings
                            </li>
                            <li>
                                Ensure employees with necessary skills are in attendance for every shift
                            </li>
                            <li>
                                Ensure adequate skills mix for every shift
                            </li>
                            <li>
                                Live scheduling to quickly fill any open shifts
                            </li>
                            <li>
                                Monitor costs of Agency staff compared to budget
                            </li>
                        </ul>
                    </div>

                    <div class="card_block_5 card_block_5_2 card_tile_js">
                        <p class="title">
                            Clock-in/ out
                        </p>
                        <ul>
                            <li>
                                Clock-in through the mobile app
                            </li>
                            <li>
                                Accurately Track working hours
                            </li>
                        </ul>
                    </div>

                    <div class="card_block_5 card_block_5_3 card_tile_js">
                        <p class="title">
                            Messages
                        </p>
                        <ul>
                            <li>
                                Increase engagement with all employees through messaging system
                            </li>
                            <li>
                                Interact with your staff anytime from anywhere
                            </li>
                        </ul>
                    </div>

                    <div class="card_block_5 card_block_5_4 card_tile_js">
                        <p class="title">
                            Reporting
                        </p>
                        <ul>
                            <li>
                                Generate reports to support your workforce planning decisions
                            </li>
                            <li>
                                Real time analysis of performance 
                            </li>
                        </ul>
                    </div>

                    <div class="card_block_5 card_block_5_5 card_tile_js">
                        <p class="title">
                            Workforce management
                        </p>
                        <ul>
                            <li>
                                Manage your entire staff using one platform, improve productivity and efficiency of employees
                            </li>
                            <li>
                                Ensure business is always compliant with regulator with regulator through rules based monitoring system
                            </li>
                            <li>
                                Gain a comprehensive and collective view of the total company’s operations
                            </li>
                            <li>
                                Simplify and automate administrative tasks thus leading to an increase in efficiency
                            </li>
                            <li>
                                Manage employee holidays and training days
                            </li>
                            <li>
                                Monitor employee performance
                            </li>
                            <li>
                                Increase retention and improve employee engagementcan
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="col-12 col-lg-6 tile_div_all">
                    <div class="tile_div_relative mov_tile_js">

                        <div class="iner_tile iner_tile_1 click_tile_js active" data-card="card_block_5_1">
                            <div>
                                <div class="text_tile">
                                    <div class="ico_tile"></div>
                                    <p>Scheduling</p>
                                </div>
                            </div>
                        </div>

                        <div class="iner_tile iner_tile_2 click_tile_js" data-card="card_block_5_2">
                            <div>
                                <div class="text_tile">
                                    <div class="ico_tile"></div>
                                    <p>Clock In/Out</p>
                                </div>
                            </div>
                        </div>

                        <div class="iner_tile iner_tile_3 click_tile_js" data-card="card_block_5_3">
                            <div>
                                <div class="text_tile">
                                    <div class="ico_tile"></div>
                                    <p>Messaging</p>
                                </div>
                            </div>
                        </div>

                        <div class="iner_tile iner_tile_4 click_tile_js" data-card="card_block_5_4">
                            <div>
                                <div class="text_tile">
                                    <div class="ico_tile"></div>
                                    <p>Reporting</p>
                                </div>
                            </div>
                        </div>

                        <div class="iner_tile iner_tile_5 click_tile_js" data-card="card_block_5_5">
                            <div>
                                <div class="text_tile">
                                    <div class="ico_tile"></div>
                                    <p>Workforce management</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </section>


    <!-- Block 6 -->
    <section class="block_6">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-7">
                    <div class="title_block_div">
                        <p class="title">Power in your hands</p>
                        <p class="title_bot_2">
                            Stay on top of your workforce management, schedule and communications through our simple and easy to use app. Available on Apple and Android.
                        </p>
                        <div class="link_store">
                            <a href="#" class="apple_store"></a>
                            <a href="#" class="google_store"></a>
                        </div>
                    </div>
                    
                </div>
                <div class="col-12 col-lg-5 iphone_div">
                    <img src="<?php bloginfo('template_url'); ?>/img/iphone_image.png" alt="iphones" class="iphone_app_img mov mov_next_fadeInUp">
                </div>
            </div>
        </div>
    </section>


    <!-- Block 7 -->
    <section id="m5" class="block_7">
        <div class="container">
            
            <div class="title_block_div title_block_div_big">
                <p class="title_top">Pricing PLAN</p>
                <p class="title"><span>TRY IT FOR FREE!</span></p>
                <p class="title_bot">Sign-up 30 days free trial. No credit card required!</p>
            </div>
            

            <div class="row no-gutters price_plan_row justify-content-between mov_div mov_slideInLeft">

                <div class="col price_plan price_plan_1">

                    <div class="head_price"></div>

                    <div class="card_price">
                        <p class="title">Basic</p>
                        <p class="price">
                            <span>£</span>3
                        </p>
                        <p class="bot_text">/User/Month</p>
                        <p class="com_text">*Does not include custom setup fee</p>

                        <div class="lable_div">
                            FEATURES
                        </div>

                        <ol>
                            <li>Upto 500 users</li>
                            <li>Employee Scheduling</li>
                            <li>Free Mobile apps IOS and Android</li>
                            <li>24hr system support</li>
                            <li>Messaging</li>
                            <li>Clock in/out</li>
                            <li>Push notifications and alerts</li>
                            <li>Employee costs tracking</li>
                            <li>Workforce management</li>
                            <li>Shift swapping</li>
                            <li>Intergrations with selected</li>
                            <li>recruitment agencies</li>
                            <li>Payroll</li>
                        </ol>
                        
                        <div class="button_price">
                            <a href="#" class="button_0 button_2 align-items-center justify-content-center">Request Demo</a>
                        </div>
                    </div>
                </div>

                <div class="col price_plan price_plan_2">

                    <div class="head_price">MOST POPULAR</div>

                    <div class="card_price">
                        <p class="title">Standard</p>
                        <p class="price">
                            <span>£</span>4
                        </p>
                        <p class="bot_text">/User/Month</p>
                        <p class="com_text">*Does not include custom setup fee</p>

                        <div class="lable_div">
                            FEATURES
                        </div>

                        <ol>
                            <li>Upto 500 users</li>
                            <li>Employee Scheduling</li>
                            <li>Free Mobile apps IOS and Android</li>
                            <li>24hr system support</li>
                            <li>Messaging</li>
                            <li>Clock in/out</li>
                            <li>Push notifications and alerts</li>
                            <li>Employee costs tracking</li>
                            <li>Workforce management</li>
                            <li>Shift swapping</li>
                            <li>Intergrations with selected</li>
                            <li>recruitment agencies</li>
                            <li>Payroll</li>
                            <li>Smart workforce planning</li>
                            <li>Generate reports to support your workforce</li>
                            <li>planning decisions</li>
                            <li>Real time analysis of performance</li>
                        </ol>
                        
                        <div class="button_price">
                            <a href="#" class="button_0 button_2 align-items-center justify-content-center">Request Demo</a>
                        </div>
                    </div>
                </div>

                <div class="col price_plan price_plan_3">

                    <div class="head_price"></div>

                    <div class="card_price">
                        <p class="title">Enterprise</p>
                        <p class="price no-price">
                            Let’s talk!
                        </p>
                        <p class="bot_text"></p>
                        <p class="com_text">*Does not include custom setup fee</p>

                        <div class="lable_div">
                            FEATURES
                        </div>

                        <ol>
                            <li>Upto 500 users</li>
                            <li>Employee Scheduling</li>
                            <li>Free Mobile apps IOS and Android</li>
                            <li>24hr system support</li>
                            <li>Messaging</li>
                            <li>Clock in/out</li>
                            <li>Push notifications and alerts</li>
                            <li>Employee costs tracking</li>
                            <li>Workforce management</li>
                            <li>Shift swapping</li>
                            <li>Intergrations with selected</li>
                            <li>recruitment agencies</li>
                            <li>Payroll</li>
                            <li>Smart workforce planning</li>
                            <li>Generate reports to support your workforce</li>
                            <li>planning decisions</li>
                            <li>Real time analysis of performance</li>
                        </ol>
                        
                        <div class="button_price">
                            <a href="#" class="button_0 button_2 align-items-center justify-content-center">Request Demo</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Block 8 -->
    <section id="m6" class="block_8">
        <div class="container">
            
            <div class="title_block_div">
                <p class="title_top">BLOG</p>
                <p class="title"><span>OUR LATEST NEWS</span></p>
            </div>

            <div class="row no-gutters blog_row justify-content-between">

                <a href="single.html" class="col card_blog card_blog_1">
                    <div class="head_card_blog">
                        Lorem ipsum <br> dolor sit amet

                        <span class="go_iner_blog">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </div>
                    <div class="mid_card_blog">
                        <p class="title">
                            consectetur adipiscing
                        </p>
                        <p class="date">
                            02.03.2018
                        </p>
                        <p class="text">
                            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        </p>
                    </div>
                </a>

                <a href="single.html" class="col card_blog card_blog_2">
                    <div class="head_card_blog">
                        Lorem ipsum <br> dolor sit amet

                        <span class="go_iner_blog">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </div>
                    <div class="mid_card_blog">
                        <p class="title">
                            consectetur adipiscing
                        </p>
                        <p class="date">
                            02.03.2018
                        </p>
                        <p class="text">
                            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        </p>
                    </div>
                </a>

                <a href="single.html" class="col card_blog card_blog_3">
                    <div class="head_card_blog">
                        Lorem ipsum <br> dolor sit amet

                        <span class="go_iner_blog">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </div>
                    <div class="mid_card_blog">
                        <p class="title">
                            consectetur adipiscing
                        </p>
                        <p class="date">
                            02.03.2018
                        </p>
                        <p class="text">
                            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        </p>
                    </div>
                </a>


            </div>
        </div>
    </section>


    <!-- footer_div -->
    <section class="footer_div">
        <div class="container">
            <div class="row align-items-center justify-content-between">

                <div class="col">
                    <a href="#top" class="Logo logo_color go_a"></a>
                </div>

                <div class="col social_bot">
                    <a href="#"><i class="fa fa-facebook-square"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin-square"></i></a>
                </div>

                <div class="col store_bot">
                    <a href="#" class="apple_store"></a>
                    <a href="#" class="google_store"></a>
                </div>

            </div>
        </div>
    </section>

<?php get_footer(); ?>