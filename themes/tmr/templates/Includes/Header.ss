<header >
	<div class="container">
		<div class="row justify-content-between  py-3">
			<div class="col-6 col-lg-3 ">
				<a href="home/"><img src="$ThemeDir/images/logo.jpg" alt="Logo" class="logo" /></a>
			</div>
            <div class="col col-lg-9 d-none d-lg-block">
                <div class="row h-100 g-0">
                    <div class="col-12 telephoneLinks">
                        <% if SiteConfig.Telephone %>
                            <a href="tel://$SiteConfig.Telephone" class="text-696969 small"><i class="fas fa-phone-alt"></i> $SiteConfig.Telephone</a>
                        <% end_if %>
                        <% if SiteConfig.WhatsApp %>
                            <a href="https://wa.me/$SiteConfig.WhatsApp" target="_blank" rel="noopener" class="text-696969 small"><i class="fab fa-whatsapp-square"></i> WhatsApp</a>
                        <% end_if %>
                    </div>
                    <div class="col-12 align-self-end">
                        <% include Navigation %>
                    </div>
                </div>
            </div>
			<div class="col-6 d-lg-none align-self-center text-end">
                <button class="hamburger hamburger--squeeze" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                        <span class="d-none-special">menu</span>
                    </span>
                </button>
            </div>
		</div>
	</div>
</header>
<div id="mobileMenu" class="animated shadow d-lg-none">
	<a href="home/" class="d-block p-3 text-center"><img src="$ThemeDir/images/logo.jpg" alt="Logo" /></a>
	<% include MobileNavigation %>
</div>