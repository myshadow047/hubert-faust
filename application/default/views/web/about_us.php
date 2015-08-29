<div class="label">
    <hr>
    <h4>About Us</h4>
</div>
<article class="about">
    <div class="container">
        <div id="portfolio" class="resp-vtabs">
            <div class="aboutContent">
                <ul class="resp-tabs-list">
                    <li><i class="xn xn-users"></i> Brand Information</li>
                    <li><i class="xn xn-info-circle"></i> Term &amp; Condition</li>
                    <li><i class="xn xn-truck"></i> Freight Rules</li>
                    <li><i class="xn xn-clipboard"></i> Claim Rules</li>
                </ul>
                <section class="resp-tabs-container">
                    <div class="row">
                        <?php echo isset($about_us[0]['brand_information'])? $about_us[0]['brand_information'] : '' ?>
                    </div>
                    <div class="row">
                        <?php echo isset($about_us[0]['term'])? $about_us[0]['term'] : '' ?>
                    </div>
                    <div class="row">
                        <?php echo isset($about_us[0]['freight'])? $about_us[0]['freight'] : '' ?>
                    </div>
                    <div class="row">
                        <?php echo isset($about_us[0]['claim'])? $about_us[0]['claim'] : '' ?>
                    </div>
                </section>
            </div>
        </div>
    </div>
</article>