<!-- BEGIN COPYRIGHT -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <p>
                    <span class="margin-right-10">
                        {{ date('Y') }}
                        © NTIS Education, Designed and developed by  <a href="http://www.webgreeds.com/" target="_blank">
                            WEBGREEDS</a> . 
                    </span> 
                </p>
            </div>

            <div class="col-md-4 pull-right">
                <a href="{{ route('home_path') }}">HOME</a> | <a href="{{ route('track_path') }}">VERIFY</a>
                    | <a href="{{ route('contact_path') }}">CONTACT</a> | 
                    <a href=" {{ route('installment.search.public') }}"> INSTALLMENT SEARCH </a> 
                    <?php if(empty(Auth::user())) { ?> 
                        | <a href="{{ route('login') }}">ADMIN LOGIN <i class="fa fa-user"> </i> </a>
                    <?php }else{ ?>
                         | <a href="{{ route('admin_home') }}">ADMIN <i class="fa fa-user"> </i> </a>
                    <?php } ?>
            </div>
            
        </div>
    </div>
</div>
<!-- END COPYRIGHT -->