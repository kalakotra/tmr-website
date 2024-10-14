<nav >
	<ul class="sideMain">
		<% loop $Menu(1) %>
			<li class="$LinkingMode">
				<a href="$Link" title="$Title.XML" class="animated">$MenuTitle.XML</a>
				<% if Children %>
					<ul class="sideSub">
						<% loop Children %>
							<li class="$LinkingMode">
								<a href="$Link" title="$Title.XML" class="animated">$MenuTitle.XML</a>
								<% if Childrenasdf %>
									<span class="arrow"></span>
									<ul class="sideSub">
										<% loop Children %>
											<li class="$LinkingMode"><a href="$Link" title="$Title.XML" class="animated">$MenuTitle.XML</a></li>
										<% end_loop %>
									</ul>
								<% end_if %>
							</li>
						<% end_loop %>
					</ul>
				<% end_if %>
			</li>
		<% end_loop %>
		<li class="text-center py-5">
			<% if SiteConfig.Telephone %>
				<a href="tel://$SiteConfig.Telephone" class="text-696969 small px-2"><i class="text-primary fas fa-phone-alt fa-2x"></i></a>
			<% end_if %>
			<% if SiteConfig.WhatsApp %>
				<a href="https://wa.me/$SiteConfig.WhatsApp" target="_blank" rel="noopener" class="text-696969 small px-2"><i class="text-primary fab fa-whatsapp-square fa-2x"></i></a>
			<% end_if %>
		</li>
	</ul>
</nav>
