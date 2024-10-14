<section class="bg-secondary">
    <div class="container  py-3 py-lg-5">
        <div class="row  py-3 py-lg-5">
            <div class="col-12">
				<% if YellowBoxText %>
                	$YellowBoxText
				<% else %>
					$SiteConfig.YellowBoxText
				<% end_if %>
            </div>
        </div>
    </div>
</section>
<footer >
	<div class="container py-3 py-lg-5">
		<div class="row">
			<div class="col-12 col-xl-4">
				<div class="row">
					<div class="col-12 col-md-6 py-3">
						<% loop Menu(1) %>
							<a href="$Link" class="smaller"><strong>$MenuTitle</strong></a>
							<br />
							<% loop Children %>
								<a href="$Link" class="smaller">$MenuTitle</a>
								<br />
							<% end_loop %>
							<% if $Pos=2 %>
								</div><div class="col-12 col-md-6 py-3">
							<% end_if %>
						<% end_loop %>
					</div>
				</div>
			</div>
			<div class="col-12 col-xl-4">
				<div class="row">
					<% loop $SiteConfig.Certificate.sort("SortOrder") %>
						<div class="col-12 col-md-6 text-center py-3">
							$Pad(300,300)
						</div>
					<% end_loop %>
				</div>
			</div>
			<div class="col-12 col-xl-2 text-center">
				<% loop getMyClass("SocialLink") %>
					<a href="$Link" target="_blank" rel="noopener" class="p-3"><i class="$FAIcon"></i></a>
				<% end_loop %>
			</div>
			<div class="col-12 col-xl-2 test" data-bg-src="$ThemeDir/images/logo.jpg">
				<a href="impressum/" class="smaller">Impressum</a><br />
				<a href="datenschutz/" class="smaller">Datenschutz</a><br />
				<a href="agb/" class="smaller">AGB</a>
			</div>
		</div>
	</div>
</footer