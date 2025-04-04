</div>
</main>
<footer class="footer">
	<div class="footer-content flex flex-col">
		<div class="footer-section flex flex-col">
			<h3 class="footer-section-title text-2xl">Informations</h3>
			<div class="footer-section-content flex flex-col">
				<p itemprop="telephone">+32(0)495/79 39 47</p>
				<p itemprop="email">brunome638@gmail.com</p>
			</div>
		</div>
		<div class="footer-section flex flex-col">
			<h3 class="footer-section-title text-2xl">Navigation</h3>
			<ul class="flex flex-col justify-between footer-section-list">
                <?php foreach (portfolio_get_navigation_links('main') as $link): ?>
					<li><a href="<?= $link->url ?>" class="footer-section-content-link link"><?= $link->label
                            ?></a></li>
                <?php endforeach; ?>
			</ul>
		</div>
		<div class="footer-section flex flex-col">
			<h3 class="footer-section-title text-2xl">Legal mentions</h3>
			<div class="footer-section-content flex flex-col">
				<a href="<?= esc_url(get_home_url().'/legal-informations/') ?>" itemprop="url"
				   class="footer-section-content-link link">Legal
					information</a>
				<p>All rights reserved</p>
				<p itemprop="name">Bruno Marée 2025 ©</p>
			</div>
		</div>
		<div class="footer-social flex flex-row">
			<a href="https://github.com/Maree-Bruno" class="footer-social-link footer-social-icon "><span
						class="hidden">Github</span>
				<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"
				     class="footer-social-icon github">
					<path fill-rule="evenodd" clip-rule="evenodd"
					      d="M20 0C8.95577 0 0 9.18054 0 20.5062C0 29.5664 5.73067 37.253 13.6773 39.9646C14.6767 40.1543 15.0438 39.5196 15.0438 38.9781C15.0438 38.4893 15.0254 36.8736 15.0167 35.1601C9.45267 36.4007 8.2786 32.7407 8.2786 32.7407C7.36873 30.3706 6.05803 29.7402 6.05803 29.7402C4.24325 28.4674 6.19482 28.4936 6.19482 28.4936C8.20295 28.6382 9.26061 30.6072 9.26061 30.6072C11.0444 33.7419 13.9393 32.8355 15.0807 32.3116C15.2603 30.9864 15.7784 30.0814 16.3505 29.5694C11.9082 29.051 7.2382 27.2925 7.2382 19.4351C7.2382 17.1965 8.01957 15.3671 9.29907 13.931C9.09144 13.4143 8.40678 11.3288 9.49286 8.50401C9.49286 8.50401 11.1724 7.9532 14.994 10.6063C16.5895 10.1519 18.3005 9.924 20.0001 9.91609C21.6997 9.924 23.4119 10.1519 25.0102 10.6063C28.8277 7.9532 30.5049 8.50401 30.5049 8.50401C31.5935 11.3288 30.9088 13.4143 30.7011 13.931C31.9835 15.3671 32.7594 17.1964 32.7594 19.4351C32.7594 27.3114 28.0807 29.0454 23.627 29.5531C24.3443 30.1896 24.9834 31.4375 24.9834 33.3506C24.9834 36.0943 24.9605 38.3026 24.9605 38.9781C24.9605 39.5239 25.3204 40.1634 26.334 39.9621C34.2766 37.2474 40 29.5635 40 20.5062C40 9.18054 31.0455 0 20 0Z"
					      fill="white"/>
					<path d="M7.57521 29.4423C7.5312 29.5444 7.37469 29.5749 7.23235 29.505C7.08716 29.438 7.00598 29.2991 7.05283 29.1969C7.09587 29.092 7.25234 29.0629 7.39729 29.1329C7.54256 29.1999 7.6254 29.3401 7.57521 29.4423Z"
					      fill="white"/>
					<path d="M8.38536 30.3689C8.29003 30.4593 8.10329 30.4173 7.97678 30.2741C7.8458 30.1311 7.8216 29.9397 7.91839 29.8479C8.01673 29.7574 8.19757 29.7997 8.32847 29.9428C8.45953 30.0874 8.485 30.2771 8.38536 30.3689Z"
					      fill="white"/>
					<path d="M9.17389 31.5499C9.05128 31.6374 8.85076 31.5554 8.72685 31.373C8.60423 31.1906 8.60426 30.9719 8.72972 30.8842C8.85364 30.7967 9.05131 30.8755 9.17677 31.0563C9.29906 31.2418 9.29903 31.4607 9.17389 31.5499Z"
					      fill="white"/>
					<path d="M10.2543 32.691C10.1446 32.815 9.91108 32.7815 9.74039 32.6124C9.5654 32.4472 9.51688 32.2125 9.6265 32.0884C9.73783 31.9644 9.97263 31.9992 10.1446 32.167C10.3183 32.3321 10.371 32.5682 10.2543 32.691Z"
					      fill="white"/>
					<path d="M11.7445 33.3535C11.696 33.5139 11.4713 33.5869 11.2448 33.5186C11.0184 33.4483 10.8707 33.2603 10.9162 33.0981C10.9631 32.9363 11.1891 32.8604 11.4171 32.9333C11.6432 33.0033 11.7913 33.19 11.7445 33.3535Z"
					      fill="white"/>
					<path d="M13.3814 33.4762C13.3869 33.6453 13.1948 33.7856 12.9571 33.7886C12.718 33.7942 12.5242 33.6574 12.5217 33.4909C12.5217 33.32 12.7095 33.1814 12.9487 33.1771C13.1863 33.1725 13.3814 33.3084 13.3814 33.4762Z"
					      fill="white"/>
					<path d="M14.9044 33.2106C14.9328 33.3754 14.7674 33.5448 14.5313 33.59C14.2991 33.6338 14.0844 33.5316 14.0547 33.3681C14.026 33.199 14.194 33.0295 14.426 32.9858C14.6625 32.9436 14.8743 33.0427 14.9044 33.2106Z"
					      fill="white"/>
				</svg>

			</a>
			<a href="https://www.linkedin.com/in/bruno-mar%C3%A9e-0148b2251/"
			   class="footer-social-link icon"><span class="hidden">Linkedin</span>
				<svg class="footer-social-icon linkedin" width="40" height="40" viewBox="0 0 40 40" fill="none"
				     xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd"
					      d="M35.113 0C37.8102 0 40 2.18984 40 4.88703V35.113C40 37.8102 37.8102 40 35.113 40H4.88703C2.18984 40 0 37.8102 0 35.113V4.88703C0 2.18984 2.18977 0 4.88703 0L35.113 0ZM12.536 33.0686V15.4345H6.67352V33.0686H12.536ZM33.6719 33.0686V22.9562C33.6719 17.5395 30.7798 15.0198 26.9234 15.0198C23.8137 15.0198 22.4207 16.73 21.6408 17.9312V15.4345H15.7798C15.8575 17.0892 15.7798 33.0686 15.7798 33.0686H21.6407V23.2205C21.6407 22.6933 21.6787 22.1664 21.834 21.7896C22.257 20.7369 23.222 19.6463 24.8413 19.6463C26.9613 19.6463 27.8106 21.2641 27.8106 23.6336V33.0686H33.6719ZM9.64437 6.93141C7.63859 6.93141 6.32812 8.25008 6.32812 9.97844C6.32812 11.6705 7.59875 13.0255 9.5668 13.0255H9.60461C11.6488 13.0255 12.9212 11.6705 12.9212 9.97844C12.8833 8.2525 11.6523 6.93516 9.64437 6.93141Z"
					      fill="white"/>
				</svg>
				<svg class="footer-social-icon-hover linkedin" xmlns="http://www.w3.org/2000/svg" width="40"
				     height="40" viewBox="0 0 40 40" fill="none">
					<path fill-rule="evenodd" clip-rule="evenodd"
					      d="M35.113 0C37.8102 0 40 2.18984 40 4.88703V35.113C40 37.8102 37.8102 40 35.113 40H4.88703C2.18984 40 0 37.8102 0 35.113V4.88703C0 2.18984 2.18977 0 4.88703 0L35.113 0ZM12.536 33.0686V15.4345H6.67352V33.0686H12.536ZM33.6719 33.0686V22.9562C33.6719 17.5395 30.7798 15.0198 26.9234 15.0198C23.8137 15.0198 22.4207 16.73 21.6408 17.9312V15.4345H15.7798C15.8575 17.0892 15.7798 33.0686 15.7798 33.0686H21.6407V23.2205C21.6407 22.6933 21.6787 22.1664 21.834 21.7896C22.257 20.7369 23.222 19.6463 24.8413 19.6463C26.9613 19.6463 27.8106 21.2641 27.8106 23.6336V33.0686H33.6719ZM9.64437 6.93141C7.63859 6.93141 6.32812 8.25008 6.32812 9.97844C6.32812 11.6705 7.59875 13.0255 9.5668 13.0255H9.60461C11.6488 13.0255 12.9212 11.6705 12.9212 9.97844C12.8833 8.2525 11.6523 6.93516 9.64437 6.93141Z"
					      fill="#007BB5"/>
				</svg>
			</a>
			<a href="https://www.instagram.com/bru.m3/" class="footer-social-link icon">
				<span class="hidden">Instagram</span>
				<svg class="footer-social-icon  instagram" width="40" height="40" viewBox="0 0 40 40" fill="none"
				     xmlns="http://www.w3.org/2000/svg">
					<path d="M20.0001 9.59668C14.3549 9.59668 9.67749 14.1935 9.67749 19.9193C9.67749 25.6451 14.2743 30.2418 20.0001 30.2418C25.7259 30.2418 30.3227 25.5644 30.3227 19.9193C30.3227 14.2741 25.6452 9.59668 20.0001 9.59668ZM20.0001 26.5322C16.371 26.5322 13.3872 23.5483 13.3872 19.9193C13.3872 16.2902 16.371 13.3064 20.0001 13.3064C23.6291 13.3064 26.613 16.2902 26.613 19.9193C26.613 23.5483 23.6291 26.5322 20.0001 26.5322Z"
					      fill="white"/>
					<path d="M30.7257 11.6935C32.0173 11.6935 33.0644 10.6465 33.0644 9.35482C33.0644 8.06319 32.0173 7.01611 30.7257 7.01611C29.434 7.01611 28.387 8.06319 28.387 9.35482C28.387 10.6465 29.434 11.6935 30.7257 11.6935Z"
					      fill="white"/>
					<path d="M36.7742 3.30645C34.6774 1.12903 31.6935 0 28.3064 0H11.6935C4.67742 0 0 4.67742 0 11.6935V28.2258C0 31.6935 1.12903 34.6774 3.3871 36.8548C5.56452 38.9516 8.46774 40 11.7742 40H28.2258C31.6935 40 34.5968 38.871 36.6936 36.8548C38.871 34.7581 40 31.7742 40 28.3065V11.6935C40 8.30645 38.871 5.40322 36.7742 3.30645ZM36.4516 28.3065C36.4516 30.8065 35.5645 32.8226 34.1129 34.1935C32.6613 35.5645 30.6452 36.2903 28.2258 36.2903H11.7742C9.35484 36.2903 7.33871 35.5645 5.8871 34.1935C4.43548 32.7419 3.70968 30.7258 3.70968 28.2258V11.6935C3.70968 9.27419 4.43548 7.25806 5.8871 5.80645C7.25806 4.43548 9.35484 3.70968 11.7742 3.70968H28.3871C30.8064 3.70968 32.8226 4.43548 34.2742 5.8871C35.6452 7.33871 36.4516 9.35484 36.4516 11.6935V28.3065Z"
					      fill="white"/>
				</svg>
				<svg class="footer-social-icon-hover instagram" xmlns="http://www.w3.org/2000/svg" width="40"
				     height="40" viewBox="0 0 40 40" fill="none">
					<path fill-rule="evenodd" clip-rule="evenodd"
					      d="M33.0759 9.32406C33.0759 10.6497 32.0013 11.7241 30.6759 11.7241C29.3506 11.7241 28.2759 10.6497 28.2759 9.32406C28.2759 7.99844 29.3506 6.92406 30.6759 6.92406C32.0016 6.92406 33.0759 7.99844 33.0759 9.32406ZM20 26.6666C16.3181 26.6666 13.3334 23.6819 13.3334 20C13.3334 16.3181 16.3181 13.3334 20 13.3334C23.6819 13.3334 26.6666 16.3181 26.6666 20C26.6666 23.6819 23.6819 26.6666 20 26.6666ZM20 9.72969C14.3278 9.72969 9.72969 14.3278 9.72969 20C9.72969 25.6722 14.3278 30.2703 20 30.2703C25.6722 30.2703 30.2703 25.6722 30.2703 20C30.2703 14.3278 25.6722 9.72969 20 9.72969ZM20 3.60375C25.3403 3.60375 25.9728 3.62406 28.0816 3.72031C30.0316 3.80937 31.0906 4.135 31.7953 4.40906C32.7288 4.77187 33.395 5.20531 34.095 5.90531C34.795 6.605 35.2284 7.27125 35.5912 8.205C35.865 8.90969 36.1909 9.96875 36.28 11.9187C36.3763 14.0278 36.3966 14.6603 36.3966 20.0006C36.3966 25.3409 36.3763 25.9734 36.28 28.0822C36.1909 30.0322 35.8653 31.0913 35.5912 31.7959C35.2284 32.7294 34.795 33.3956 34.095 34.0956C33.3953 34.7956 32.7291 35.2291 31.7953 35.5919C31.0906 35.8656 30.0316 36.1916 28.0816 36.2806C25.9728 36.3769 25.3403 36.3972 20 36.3972C14.6594 36.3972 14.0269 36.3769 11.9181 36.2806C9.96813 36.1916 8.90906 35.8659 8.20438 35.5919C7.27094 35.2291 6.60469 34.7956 5.90469 34.0956C5.205 33.3959 4.77125 32.7297 4.40844 31.7959C4.13469 31.0913 3.80875 30.0322 3.71969 28.0822C3.62344 25.9731 3.60312 25.3406 3.60312 20.0006C3.60312 14.6603 3.62344 14.0278 3.71969 11.9187C3.80875 9.96875 4.13438 8.90969 4.40844 8.205C4.77125 7.27156 5.20469 6.60531 5.90469 5.90531C6.60438 5.20531 7.27063 4.77187 8.20438 4.40906C8.90906 4.13531 9.96813 3.80937 11.9181 3.72031C14.0272 3.62406 14.6597 3.60375 20 3.60375ZM20 0C14.5684 0 13.8872 0.023125 11.7541 0.120312C9.62531 0.2175 8.17125 0.555625 6.89937 1.05C5.58406 1.56094 4.46875 2.245 3.35687 3.35687C2.245 4.46875 1.56094 5.58406 1.05 6.89937C0.555625 8.17156 0.2175 9.62531 0.120312 11.7541C0.023125 13.8872 0 14.5684 0 20C0 25.4316 0.023125 26.1128 0.120312 28.2459C0.2175 30.3747 0.555625 31.8284 1.05 33.1006C1.56094 34.4159 2.245 35.5312 3.35687 36.6431C4.46875 37.755 5.58406 38.4388 6.89937 38.95C8.17156 39.4444 9.62531 39.7825 11.7541 39.8797C13.8872 39.9769 14.5684 40 20 40C25.4316 40 26.1128 39.9769 28.2459 39.8797C30.3747 39.7825 31.8284 39.4444 33.1006 38.95C34.4159 38.4388 35.5312 37.755 36.6431 36.6431C37.755 35.5312 38.4388 34.4159 38.95 33.1006C39.4444 31.8284 39.7825 30.3747 39.8797 28.2459C39.9769 26.1128 40 25.4316 40 20C40 14.5684 39.9769 13.8872 39.8797 11.7541C39.7825 9.62531 39.4444 8.17156 38.95 6.89937C38.4388 5.58406 37.755 4.46875 36.6431 3.35687C35.5312 2.245 34.4159 1.56125 33.1006 1.05C31.8284 0.555625 30.3747 0.2175 28.2459 0.120312C26.1128 0.023125 25.4316 0 20 0Z"
					      fill="url(#paint0_radial_195_292)"/>
					<defs>
						<radialGradient id="paint0_radial_195_292" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
						                gradientTransform="translate(5.97222 40.1389) scale(51.11)">
							<stop stop-color="#FFB140"/>
							<stop offset="0.2559" stop-color="#FF5445"/>
							<stop offset="0.599" stop-color="#FC2B82"/>
							<stop offset="1" stop-color="#8E40B7"/>
						</radialGradient>
					</defs>
				</svg>
			</a>
			<a href="https://discord.com" class="footer-social-link icon">
				<span class="hidden">Discord</span>
				<svg class="footer-social-icon discord" width="40" height="40" viewBox="0 0 40 40" fill="none"
				     xmlns="http://www.w3.org/2000/svg">
					<path d="M39 19.9977C39 30.4898 30.4935 38.9955 20 38.9955C9.50648 38.9955 1 30.4898 1 19.9977C1 9.50568 9.50648 1 20 1C30.4935 1 39 9.50568 39 19.9977Z"
					      stroke="white" stroke-width="2"/>
					<path d="M28.6819 13.5257C28.6819 13.5257 26.207 11.5892 23.284 11.3669L23.0206 11.8935C25.6633 12.5402 26.8757 13.4668 28.1419 14.6051C25.9584 13.4906 23.8026 12.4462 20.0453 12.4462C16.288 12.4462 14.132 13.4906 11.9488 14.6051C13.2151 13.4668 14.6573 12.438 17.07 11.8935L16.8066 11.3669C13.7404 11.6567 11.4091 13.5257 11.4091 13.5257C11.4091 13.5257 8.64496 17.5331 8.17041 25.3995C10.9568 28.6122 15.1875 28.6376 15.1875 28.6376L16.0722 27.4583C14.5706 26.9364 12.8746 26.0043 11.4091 24.32C13.157 25.6422 15.7948 27.0186 20.0455 27.0186C24.2962 27.0186 26.934 25.6423 28.6819 24.32C27.2164 26.0043 25.5204 26.9366 24.0188 27.4583L24.9035 28.6376C24.9035 28.6376 29.1342 28.6122 31.9206 25.3993C31.446 17.5331 28.6819 13.5257 28.6819 13.5257ZM16.537 23.2406C15.4935 23.2406 14.6477 22.274 14.6477 21.0818C14.6477 19.8895 15.4935 18.9229 16.537 18.9229C17.5804 18.9229 18.4262 19.8895 18.4262 21.0818C18.4262 22.274 17.5804 23.2406 16.537 23.2406ZM23.554 23.2406C22.5106 23.2406 21.6648 22.274 21.6648 21.0818C21.6648 19.8895 22.5106 18.9229 23.554 18.9229C24.5975 18.9229 25.4433 19.8895 25.4433 21.0818C25.4433 22.274 24.5973 23.2406 23.554 23.2406Z"
					      fill="white"/>
				</svg>
				<svg class="footer-social-icon-hover discord" xmlns="http://www.w3.org/2000/svg" width="40" height="40"
				     viewBox="0 0 40 40" fill="none">
					<path d="M20 39.9955C31.0457 39.9955 40 31.0422 40 19.9977C40 8.95329 31.0457 0 20 0C8.9543 0 0 8.95329 0 19.9977C0 31.0422 8.9543 39.9955 20 39.9955Z"
					      fill="#8C9EFF"/>
					<path d="M28.6819 13.5257C28.6819 13.5257 26.207 11.5892 23.284 11.3669L23.0206 11.8935C25.6633 12.5402 26.8757 13.4668 28.1419 14.6051C25.9584 13.4906 23.8026 12.4462 20.0453 12.4462C16.288 12.4462 14.132 13.4906 11.9488 14.6051C13.2151 13.4668 14.6573 12.438 17.07 11.8935L16.8066 11.3669C13.7404 11.6567 11.4091 13.5257 11.4091 13.5257C11.4091 13.5257 8.64496 17.5331 8.17041 25.3995C10.9568 28.6122 15.1875 28.6376 15.1875 28.6376L16.0722 27.4583C14.5706 26.9364 12.8746 26.0043 11.4091 24.32C13.157 25.6422 15.7948 27.0186 20.0455 27.0186C24.2962 27.0186 26.934 25.6423 28.6819 24.32C27.2164 26.0043 25.5204 26.9366 24.0188 27.4583L24.9035 28.6376C24.9035 28.6376 29.1342 28.6122 31.9206 25.3993C31.446 17.5331 28.6819 13.5257 28.6819 13.5257ZM16.537 23.2406C15.4935 23.2406 14.6477 22.274 14.6477 21.0818C14.6477 19.8895 15.4935 18.9229 16.537 18.9229C17.5804 18.9229 18.4262 19.8895 18.4262 21.0818C18.4262 22.274 17.5804 23.2406 16.537 23.2406ZM23.554 23.2406C22.5106 23.2406 21.6648 22.274 21.6648 21.0818C21.6648 19.8895 22.5106 18.9229 23.554 18.9229C24.5975 18.9229 25.4433 19.8895 25.4433 21.0818C25.4433 22.274 24.5973 23.2406 23.554 23.2406Z"
					      fill="white"/>
					<path opacity="0.1"
					      d="M5.85791 34.1428C9.47718 37.7617 14.4772 40 20.0001 40C31.0457 40 40.0001 31.0466 40.0001 20.0023C40.0001 14.48 37.7615 9.48056 34.1423 5.86169L5.85791 34.1428Z"
					      fill="#4D4D4D"/>
				</svg>
			</a>
		</div>
	</div>

</footer>
<?php wp_footer(); ?>

</body>
</html>
