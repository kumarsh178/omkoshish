<?php
$block = Mage::getModel('cms/block');
$cmsBlockBlogData = [
            'title' => 'Latest block home page',
            'identifier' => 'latest_blog_home_page',
            'content' => '<div class="ngo-section-title">
                    <h2>latest blog</h2>
                    <div class="ngo-title-line">
                        <div class="ngo-title-icon">
                            <img src="{{skin url="images/static/icon.png"}}" alt="Demo">
                        </div>
                    </div>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority robiul suffered alteration in some form, by injected </p>
                </div>',
            'is_active' => 1,
            'stores' => [0],
            'sort_order' => 0
        ];
        $block->setData($cmsBlockBlogData)->save();


        $cmsBlockGalleryData = [
            'title' => 'Gallery Block on home page',
            'identifier' => 'gallery_block_home_page',
            'content' => '<div class="ngo-section-title">
                    <h2>our gallery</h2>
                    <div class="ngo-title-line">
                        <div class="ngo-title-icon">
                            <img src="{{skin url="images/static/icon.png"}}" alt="Demo">
                        </div>
                    </div>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority robiul suffered alteration in some form, by injected </p>
                </div>',
            'is_active' => 1,
            'stores' => [0],
            'sort_order' => 0
        ];
 
        $block->setData($cmsBlockGalleryData)->save();

        $cmsBlockVolunteersData = [
            'title' => 'Our volunteers block on home page',
            'identifier' => 'volunteers_block_home_page',
            'content' => '<div class="ngo-section-title">
                    <h2>Our Volunteers</h2>
                    <div class="ngo-title-line">
                        <div class="ngo-title-icon">
                            <img src="{{skin url="images/static/icon.png"}}" alt="Demo">
                        </div>
                    </div>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority robiul suffered alteration in some form, by injected </p>
                </div>',
            'is_active' => 1,
            'stores' => [0],
            'sort_order' => 0
        ];
 
        $block->setData($cmsBlockVolunteersData)->save();


        $cmsBlockCompaignData = [
            'title' => 'Latest compaign home page',
            'identifier' => 'latest_compaign_home_page',
            'content' => '<div class="ngo-section-title">
                    <h2>latest campaign</h2>
                    <div class="ngo-title-line">
                        <div class="ngo-title-icon">
                            <img src="{{skin url="images/static/icon.png"}}" alt="Demo">
                        </div>
                    </div>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority robiul suffered alteration in some form, by injected </p>
                </div>',
            'is_active' => 1,
            'stores' => [0],
            'sort_order' => 0
        ];
 
        $block->setData($cmsBlockCompaignData)->save();

        $cmsBlockHelpingChildrenData = [
            'title' => 'Helping children block',
            'identifier' => 'helping_children_home_page',
            'content' => '<div class="col-md-6 col-sm-12">
                <div class="ngo-divider-col text-center">
                    <h5>Urgent Causes</h5>
                    <h2>Helping Children In africa</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtin didunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>
                    <div class="ngo-double-button">
                        
                        <button class="btn ngo-btn-donate" type="submit">DONATE NOW</button>
                        <button class="btn ngo-btn-join" type="submit">JOIN WITH US</button>
                    </div>
                </div>  
            </div>
            <div class="col-md-1 col-sm-12">
                <div class="ngo-divider-col text-center ngo-vertical-text">
                    <p>J</p>
                    <p>o</p>
                    <p>i</p>
                    <p>n</p>
                    <br>
                    <p>u</p>
                    <p>s</p>
                </div>
            </div>
            <div class="col-md-5 col-sm-12">
                <div class="ngo-divider-col clearfix">
                    <ul class="ngo-ends-date">
                        <li>
                            
                            <a class="ngo-time-sircle">
                                <span class="ngo-funfact clearfix">
                                    <i class="fa fa-facebook"><span>Facebook</span></i>
                                </span>
                            </a>
                        </li>
                        
                        <li>
                            <a class="ngo-time-sircle">
                                <span class="ngo-funfact clearfix">
                                    <i class="fa fa-twitter"><span>Twitter</span></i>
                                </span>
                            </a>
                            
                        </li>
                        
                        <li>
                            <a class="ngo-time-sircle">
                                <span class="ngo-funfact clearfix">
                                    <i class="fa fa-instagram"><span>Instagram</span></i>
                                </span>
                            </a>
                            
                        </li>
                        <li>
                            <a class="ngo-time-sircle">
                                <span class="ngo-funfact clearfix">
                                    <i class="fa fa-linkedin"><span>Linkedin</span></i>
                                </span>
                            </a>
                            
                        </li>
                    </ul>
                </div>
            </div>',
            'is_active' => 1,
            'stores' => [0],
            'sort_order' => 0
        ];
 
        $block->setData($cmsBlockHelpingChildrenData)->save();

        $cmsBlockHowCanData = [
            'title' => 'How can we help block on home page',
            'identifier' => 'how_can_we_home_page',
            'content' => '<div class="ngo-section-title">
                    <h2>HOW CAN YOU HELP</h2>
                    <div class="ngo-title-line">
                        <div class="ngo-title-icon">
                            <img src="{{skin url="images/static/icon.png"}}" alt="Demo">
                        </div>
                    </div>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority robiul suffered alteration in some form, by injected </p>
                </div>',
            'is_active' => 1,
            'stores' => [0],
            'sort_order' => 0
        ];
 
        $block->setData($cmsBlockHowCanData)->save();

        $cmsBlockBecomeVolunteersData = [
            'title' => 'Become a volunteers block on home page',
            'identifier' => 'become_volunteers_block_home_page',
            'content' => '<div class="ngo-help-box bg1">
                    <i class="fa fa-child" aria-hidden="true"></i>
                    <h4>Become A Volunteer</h4>
                    <p>There are many variations of passages of Lorem Ipsum available but by injected.</p>
                </div>',
            'is_active' => 1,
            'stores' => [0],
            'sort_order' => 0
        ];
 
        $block->setData($cmsBlockBecomeVolunteersData)->save();

        $cmsBlockGiveDonationData = [
            'title' => 'Give Donation block on home page',
            'identifier' => 'give_donation_block_home_page',
            'content' => '<div class="ngo-help-box bg2 ngo-middle-box">
                    <i class="fa fa-usd" aria-hidden="true"></i>
                    <h4>Give Donation</h4>
                    <p>There are many variations of passages of Lorem Ipsum available but by injected.</p>
                    <a class="btn ngo-btn-donate ngo-btn-transparent" href="#" role="button">DONATE NOW</a>                 
                </div>',
            'is_active' => 1,
            'stores' => [0],
            'sort_order' => 0
        ];
 
        $block->setData($cmsBlockGiveDonationData)->save();


          $cmsBlockGiveSupportData = [
            'title' => 'Give Support block on home page',
            'identifier' => 'give_support_block_home_page',
            'content' => '<div class="ngo-help-box bg3">
                    <!--<i class="fa fa-life-ring" aria-hidden="true"></i>-->
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    <h4>Give Support</h4>
                    <p>There are many variations of passages of Lorem Ipsum available but by injected.</p>
                </div>',
            'is_active' => 1,
            'stores' => [0],
            'sort_order' => 0
        ];
 
        $block->setData($cmsBlockGiveSupportData)->save();
	 