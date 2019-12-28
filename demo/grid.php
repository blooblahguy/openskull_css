<div class="bg-primary pady2">

	<div class="container">

		<h1>Grid / Layout</h1>

		<p class="text-muted">12-columns and 3 media breakpoints.</p>

	</div>

</div>

<div class="section">

	<div class="container">

		<!-- Basics -->

		<h3 class="title">Grid Basics</h3>

		<h4>Columns are automatically spaced and affixes change widths.</h4>

		<ul>

			<li><strong>Structure: </strong>Columns are placed inside of a <kbd>.row</kbd>. From there, column classes are all prefixed with <kbd>.os</kbd>. <kbd>os[-n]</kbd> applies to all device sizes. <kbd>.os-min</kbd> Takes up only the space of it's content, and leaves the rest for the grid.</li>

			<li><strong>Spacing: </strong>Columns are spaced automatically based on the gutter class of the <kbd>.row</kbd> parent. By default, row columns are not spaced, but adding <kbd>.g0</kbd>, <kbd>.g1</kbd>, <kbd>.g2</kbd>, or <kbd>.g3</kbd> to the container will change the gutter size.</li>

			<li><strong>Breakpoints: </strong>Many CSS libraries offer 4 or more breakpoints, but an increasingly small fraction of websites actually use these additional fringe breakpoints. We offer only 3 to keep things simple: 

				<ul class="padb0">

					<li><kbd>.os[-n]</kbd> - For all viewport sizes, but with lowest precedence. <em>This is essentially the same as sm- on other frameworks</em></li>

					<li><kbd>.os-md[-n]</kbd> - For medium viewport sizes (think "medium and up") ~768px</li>

					<li><kbd>.os-lg[-n]</kbd> - For large viewport sizes (think "large and up") ~1024px</li>

				</ul>

			</li>

		</ul>

		<pre class="prettyprint"><code target=".grid612"></code></pre>

		<div class="bord pad2 margb2">

			<div class="grid612">

				<div class="row g1">

					<div class="os-min"><div class="bg-grey pad1 padx3"></div></div>

					<div class="os"><div class="bg-grey pad1"></div></div>

					<div class="os-2"><div class="bg-primary pad1"></div></div>

					<div class="clear"></div>

					<div class="os-5"><div class="bg-primary pad1"></div></div>

					<div class="os"><div class="bg-grey pad1"></div></div>

					<div class="os"><div class="bg-grey pad1"></div></div>

				</div>

			</div>

		</div>



		<!-- Offsets -->

		<h3>Offsets</h3>

		<div class="message-success">

			<p>Good news! We don't do offsets. It's deprecated on a mobile-first web and you can accomplish the same with empty columns or with flexbox content alignments.</p>

			<p>Check out the positioning helpers below for more information</p>

		</div>



		<!-- Self alignment -->

		<h3 id="grid_positioning">Self Alignment</h3>

		<p>You can align objects inside a <kbd>.row</kbd> by simple adding another class to those child elements. There are aliases available to make things a little easier.</p>

		<ul>

			<li>To align an element top add <kbd>.self-start</kbd> or <kbd>.self-top</kbd></li>

			<li>To align an element center or middle add <kbd>.self-center</kbd> or <kbd>.self-middle</kbd></li>

			<li>To align an element last or bottom add <kbd>.self-end</kbd> or <kbd>.self-bottom</kbd></li>

		</ul>

		<p class="message-info"><strong>Hint:</strong> All of these can be prefixed to be responsive. ex. <kbd>.lg-seld-middle</kbd></p>

		<pre><code target=".selfalignment"></code></pre>

		<div class="bord pad2">

			<div class="selfalignment">

				<div class="row g1" style="height: 120px">

					<div class="os self-end"><div class="bg-grey pad1"></div></div>

					<div class="os self-center"><div class="bg-grey pad1"></div></div>

					<div class="os self-start"><div class="bg-grey pad1"></div></div>

				</div>

			</div>

		</div>

		

		<!-- Content alignment -->

		<h3>Content Alignment</h3>

		<p>You can also vertical align the entire grid using helper classes. Goodbye vertical align!</p>

		<ul>

			<li>To align all content to the top use <kbd>.content-top</kbd></li>

			<li>To align all content to the average middle use <kbd>.content-middle</kbd></li>

			<li>To align all content to the bottom use <kbd>.content-bottom</kbd></li>

		</ul>

		<p class="message-info"><strong>Hint:</strong> All of these can be prefixed to be responsive. ex. <kbd>.lg-content-middle</kbd></p>

		

		<pre><code target=".contentalignment"></code></pre>

		<div class="bord pad2">

			<div class="contentalignment">

				<div class="row g1 content-middle">

					<div class="os"><div class="bg-primary pad1">I'm a different height <br> because of 2 lines</div></div>

					<div class="os"><div class="pad1 bg-grey"></div></div>

				</div>

				<hr>

				<div class="row g1 content-bottom">

					<div class="os"><div class="bg-primary pad1">I'm a different height <br> because of 2 lines</div></div>

					<div class="os"><div class="pad1 bg-grey"></div></div>

				</div>

			</div>

		</div>



		<!-- Justification -->

		<h3>Content Justification</h3>

		<p>Grid content can be justified based on the <kbd>.row</kbd> helper class.</p>

		<ul>

			<li>To center align all grid objects use <kbd>.content-center</kbd></li>

			<li>To equally space out all grid objects use <kbd>.content-space</kbd></li>

			<li>To offset each item equally <kbd>.content-justify</kbd></li>

		</ul>

		<p class="message-info"><strong>Hint:</strong> All of these can be prefixed to be responsive. ex. <kbd>.lg-content-space</kbd></p>

		<pre><code target=".contentjustification"></code></pre>

		<div class="bord pad2">

			<div class="contentjustification">

				<div class="row g1 content-center">

					<div class="os-4"><div class="bg-grey pad1"></div></div>

					<div class="os-4"><div class="bg-grey pad1"></div></div>

				</div>

				<hr>

				<div class="row g1 content-space">

					<div class="os-2"><div class="bg-grey pad1"></div></div>

					<div class="os-2"><div class="bg-grey pad1"></div></div>

					<div class="os-2"><div class="bg-grey pad1"></div></div>

				</div>

				<hr>

				<div class="row g1 content-justify">

					<div class="os-4"><div class="bg-grey pad1"></div></div>

					<div class="os-4"><div class="bg-grey pad1"></div></div>

				</div>

				

			</div>

		</div>





		<h3>DOM-Independent Positioning</h3>

		<p>You can also change the order of elements with easy helper classes <kbd>.order-first</kbd>, <kbd>.order-last</kbd>, or <kbd>.order-[1-6]</kbd></p>

		<pre><code target=".gridordering"></code></pre>

		<div class="bord pad2">

			<div class="gridordering">

				<div class="row g1">

					<div class="os-12 os-md order-last"><div class="bg-primary pad1">I'm first in the DOM, last in display.</div></div>

					<div class="os-12 os-md order-2"><div class="bg-grey pad1"></div></div>

					<div class="os-12 os-md order-1"><div class="bg-secondary pad1">I'm last in the dom, 1st in display</div></div>

				</div>

			</div>

		</div>



	</div>

</div>