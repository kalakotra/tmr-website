<section class="bg-dark">
    <div class="container  pt-3 pt-lg-5">
        <div class="row justify-content-between pt-3 pt-lg-5">
            <% loop Icon %>
                <div class="col-12 col-md-4 col-lg-2 pb-3 pb-lg-5 text-center">
                    $Image
                    <div class="text-secondary fw-bold py-3">
                        $Title
                    </div>
                </div>
            <% end_loop %>
            <div class="w-100"></div>
            <div class="col-12 col-lg-7  py-3 py-lg-5 align-self-center">
                $IconText
            </div>
            <div class="col-12 col-lg-5 text-end align-self-end pt-3 pt-lg-5">
                $IconImage
            </div>
        </div>
    </div>
</section>
<main>
	<div class="container py-3 py-lg-5">
		<div class="row">
			<div class="col-12">
				<article>
					<div class="content">$Content</div>
                    <% if ContentImage %><div class="py-3 py-lg-5 text-center">$ContentImage</div><% end_if %>
				</article>
			</div>
		</div>
	</div>
</main>
<section class="bg-light greyBox">
    <div class="container py-3 py-lg-5">
        <div class="row justify-content-between py-3 py-lg-5">
            <div class="col-12 col-lg-4 py-3">
                <div class="p-3 p-lg-5 bg-white GreyBoxImageHolder">
                    <div class="text-center">$GreyBoxImage</div>
                    <div class="small pt-3 pt-lg-5">$GreyBoxImageText</div>
                </div>
            </div>
            <div class="col-12 col-lg-7 py-3 z-index-2 ">
                $GreyBoxText
            </div>
        </div>
    </div>
</section>
