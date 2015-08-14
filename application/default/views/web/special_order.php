<div class="label">
    <hr>
    <h4>Special Order</h4>
</div>
<article class="request">
    <div class="container">
        <form id="form-special-order" method="post" action="<?php echo site_url('special_order/request') ?>" enctype="multipart/form-data">
            <div class="row inputArea">
                <div class="xlarge-6 large-6 medium-6 small-12 tiny-12">
                    <div class="row wrapper">
                        <div class="input">
                            <input type="text" name="name" placeholder="Enter your name">
                        </div>
                    </div>
                    <div class="row wrapper">
                        <div class="input">
                            <input type="email" name="email" placeholder="Enter your e-mail address">
                        </div>
                    </div>
                    <div class="row wrapper">
                        <div class="input">
                            <input type="text" name="phone" placeholder="Enter your phone number">
                        </div>
                    </div>
                    <div class="row wrapper">
                        <div class="input">
                            <input type="text" name="ingredients" placeholder="Enter ingredients">
                        </div>
                    </div>
                </div>
                <div class="xlarge-6 large-6 medium-6 small-12 tiny-12">
                    <div class="row wrapper">
                        <div class="input">
                            <input type="text" name="dimension" placeholder="Enter dimensions">
                        </div>
                    </div>
                    <div class="row wrapper">
                        <div class="input">
                            <textarea name="detail" id="" cols="30" rows="10" placeholder="Enter your detail request"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row uploadArea">
                <div class="label">
                    <hr>
                    <h4>Upload Image</h4>
                </div>
                <ul class="flat">
                    <li>
                        <div class="imageArea">
                            <input id="image1" type="file" name="special_order_image[]" style="display: none;">
                            <div id="display-image1" class="image empty" style="background: url(<?php echo base_url('themes/desktop/img/banner3.jpg') ?>) center no-repeat; background-size: cover;"></div>
                            <div class="bg">
                                <a class="buttonUpload">+</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="imageArea">
                            <input id="image2" type="file" name="special_order_image[]" style="display: none;">
                            <div id="display-image2" class="image empty" style="background: url(<?php echo base_url('themes/desktop/img/banner3.jpg') ?>) center no-repeat; background-size: cover;"></div>
                            <div class="bg">
                                <a class="buttonUpload">+</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="imageArea">
                            <input id="image3" type="file" name="special_order_image[]" style="display: none;">
                            <div id="display-image3" class="image empty" style="background: url(<?php echo base_url('themes/desktop/img/banner3.jpg') ?>) center no-repeat; background-size: cover;"></div>
                            <div class="bg">
                                <a class="buttonUpload">+</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="imageArea">
                            <input id="image4" type="file" name="special_order_image[]" style="display: none;">
                            <div id="display-image4" class="image empty" style="background: url(<?php echo base_url('themes/desktop/img/banner3.jpg') ?>) center no-repeat; background-size: cover;"></div>
                            <div class="bg">
                                <a class="buttonUpload">+</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="submitArea">
                    <input type="submit" value="Submit">
                </div>
            </div>
        </form>
    </div>
</article>

<script type="text/javascript">
    $(function(){
        $('form#form-special-order').on('submit', function(e){
            var data = $(this).serializeArray();
            var error = 0;
            var names = [];

            $.each(data, function(k, v){
                if (v.value.trim() == ''){
                    error++;
                    names.push(v.name);
                }
            });

            if (error > 0) {
                $("html, body").animate({ scrollTop: 0 });

                setTimeout(function(){
                    $.each(names, function(k, v){
                        $('input[name="'+v+'"], textarea[name="'+v+'"]').parent().addClass('animated shake error');
                    });
                }, 500);

                setTimeout(function(){
                    $.each(names, function(k, v){
                        $('input[name="'+v+'"], textarea[name="'+v+'"]').parent().removeClass('animated shake');
                    });
                }, 1000);

                return false;
            }
        });

        $('form#form-special-order input, form#form-special-order textarea').on('focus', function(e){
            $(e.target).parent().removeClass('animated shake error');
        });

        $('.imageArea a').off('click').on('click', function(){
            if ($(this).hasClass('not-trigger')) {
                $(this).parent().parent().find('input[type="file"]').parent().find('div.image').addClass('empty');
                $(this).parent().parent().find('input[type="file"]').parent().find('div.image').css({
                    'background': 'url(<?php echo base_url("themes/desktop/img/banner3.jpg") ?>) center no-repeat',
                    'background-size': 'cover'
                });
                $(this).html('+');
                $(this).removeClass('not-trigger');
            } else {
                $(this).parent().parent().find('input[type="file"]').trigger('click');
            }

            var those = this;
            $(this).parent().parent().find('input[type="file"]').change(function () {
                if (this.files && this.files[0]) {
                    var reader = new FileReader();
                    var that = this;
                    reader.onload = function(e){
                        $(that).parent().find('div.image').removeClass('empty');
                        $(that).parent().find('div.image').css({
                            'background': 'url('+e.target.result+') center no-repeat',
                            'background-size': 'cover'
                        });
                        $(those).html('-');
                        $(those).addClass('not-trigger');
                    };
                    reader.readAsDataURL(this.files[0]);
                }
            });
        });
    });
</script>
