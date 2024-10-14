<% if HeaderTitle %>
	<section style="background-image: url($HeaderBackground.URL)" class="pageHeader">
		<div class="container py-3 py-lg-5">
			<div class="row align-items-end justify-content-between">
				<div class="col-12 col-xxl-8 py-3 py-lg-5">
					<% if HeaderTitle %><div class="display-1 text-white fw-bold py-2">$HeaderTitle</div><% end_if %>
					<% if HeaderTitle2 %><div class="display-1 text-white fw-bold py-2">$HeaderTitle2</div><% end_if %>
					<% if HeaderSubtitle %><div class="h5 text-white fw-bold py-2"><span class=" py-1 px-3 bg-secondary d-inline-block">$HeaderSubtitle</span></div><% end_if %>
					<% if HeaderSubtitle2 %><div class="h5 text-white fw-bold"><span class=" py-1 px-3 bg-secondary d-inline-block">$HeaderSubtitle2</span></div><% end_if %>
				</div>
				<div class="col-12 col-xxl-3 py-3 py-lg-5 text-end">
					<% if HeaderLinkTitle %><a href="$HeaderLink" class="btn btn-secondary reounded-0 text-white px-5">$HeaderLinkTitle</a><% end_if %>
				</div>
			</div>
		</div>
	</section>
<% end_if %>
<section class="bg-dark  py-3 py-lg-5">
	<div class="container  py-3 py-lg-5">
		<div class="row justify-content-between align-items-center">
			<div class="col-12 col-lg-7 col-xxl-7 col-3xl-8 text-white BlueBoxHolder lh-lg">
				$BlueBoxText
			</div>
			<div class="col-12 col-lg-5 col-xxl-4 col-3xl-3">
				<div class="ContactPersonHolder bg-white">
					<div class="text-center ContactPersonImage">$SiteConfig.ContactPersonImage</div>
					<div class="p-2">
						<strong class="text-primary">Ihr Ansprechpartner:</strong>
						<div class="text-primary">$SiteConfig.ContactPersonName</div>
						
						<a class="text-secondary smaller" href="mailto:$SiteConfig.ContactPersonEmail">$SiteConfig.ContactPersonEmail</a>
						<br />
						<a class="text-secondary smaller" href="tel://$SiteConfig.ContactPersonTelephone">$SiteConfig.ContactPersonTelephone</a>
						<div class="text-center pt-3">
							<a class="text-secondary smaller" href="https://wa.me/$SiteConfig.ContactPersonWhatsApp">
								<img src="$ThemeDir/images/whatsapp-button.png" alt="whatsapp-button" />
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<% if Content || ContentBlock %>
	<main>
		<div class="container py-3 py-lg-5">
			<div class="row">
				<div class="col-12">
					<article>
						<div class="content">$Content</div>
					</article>
				</div>
			</div>
			<% loop ContentBlock %>
				<div class="p-4 my-3 bg-secondary rounded-1rem">
					<div class="row">
						<div class="col-12 col-lg-3 col text-sm-center">
							<img src="$Image.FocusFill(500,500).URL" alt="$Image.Title" class="rounded-1rem" />
						</div>
						<div class="col-12 col-lg-9 text-white ContentBlockHolder">
							<div class="fw-bold pb-3 text-bigger">
								<div class="row justify-content-between">
									<div class="col-auto">
										$Title
									</div>
									<div class="col-auto text-end">
										<button class="btn text-white myClose p-0">
											<i class="far fa-times fa-2x"></i>
										</button>
									</div>
								</div>
							</div>
							<div class="textHolder  lh-lg">
								<div>
									$Text.LimitWordCount(50,'...')
									<div class="text-center">
										<button class="btn text-white">
											weiterlesen
											<br />
											<i class="fas fa-chevron-down fa-2x"></i>
										</button>
									</div>
								</div>
								<div >
									$Text
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="w-100 py-1"></div>
			<% end_loop %>
		</div>
	</main>
<% end_if %>