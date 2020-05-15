<div class="header-top_area d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-md-5 ">
                <div class="header_left">
                    <p>Welcome to {{getSetting('SiteName')}}</p>
                </div>
            </div>
            <div class="col-xl-7 col-md-7">
                <div class="header_right d-flex">
                    <div class="short_contact_list">
                        <ul>
                            <li><a href="#"> <i class="fa fa-envelope"></i> {{getSetting('email')}}</a></li>
                            <li><a href="#"> <i class="fa fa-phone"></i> {{getSetting('mobile')}}</a></li>
                        </ul>
                    </div>
                    <div class="social_media_links">
                        <a href="{{getSetting('youtube')}}">
                            <i class="fa fa-youtube"></i>
                        </a>
                        <a href="{{getSetting('facebook')}}">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="{{getSetting('twitter')}}">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
