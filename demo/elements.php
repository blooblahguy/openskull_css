<div class="bg-primary pad2">
	<div class="container">
		<h1>UI Elements</h1>
		<p class="text-muted">The included UI design elements are intended to quickly take care of common UI elements, mostly minimum style is applied.</p>
	</div>
</div>
<div class="section">
	<div class="container">
		<p>If you are looking for a library that gives you all of the UI elements you could ever possible want, this is probably not the framework for you.</p>
		<p>There are few UI elements that are important for the user experience. Here's our take on those elements.</p>
		<h3>Buttons</h3>
		<p>Buttons are diverse, sometimes you want them to display inline, other times as fat blocks. For that reason we try and leave the default buttons similar to how the browser intended. You can still make buttons full with with <kbd>.block</kbd> or add padding with the <kbd>.pad[n]</kbd> helpers outlines in Layouts.</p>
		<div class="row g2">
			<div class="os-md-4 os-6"><a href="#0" class="btn">Button Default</a></div>
			<div class="os-md-4 os-6"><a href="#0" class="btn-primary">Button Primary</a></div>
			<div class="os-md-4 os-6"><a href="#0" class="btn-secondary">Button Secondary</a></div>
			<div class="os-md-4 os-6"><a href="#0" class="btn-white">Button White</a></div>
			<div class="os-md-4 os-6"><a href="#0" class="btn-blank">Button Blank</a></div>
			<div class="os-md-4 os-6"><a href="#0" class="btn-grey">Button Grey</a></div>
			<div class="os-md-4 os-6"><a href="#0" class="btn-dark">Button Dark</a></div>
			<div class="os-md-4 os-6"><a href="#0" class="btn-black">Button Black</a></div>
			<div class="os-md-4 os-6"><a href="#0" class="btn-success">Button Success</a></div>
			<div class="os-md-4 os-6"><a href="#0" class="btn-info">Button Info</a></div>
			<div class="os-md-4 os-6"><a href="#0" class="btn-warning">Button Warning</a></div>
			<div class="os-md-4 os-6"><a href="#0" class="btn-error">Button Error</a></div>
		</div>
		<h3>Tooltips</h3>
		<p>Purely HTML tooltips are good way to show additional information on hover or activate states for users. <kbd>[tooltip=""]</kbd> will show a default tooltip on top of the element.</p>
		<ul>
			<li><kbd>[tooltip="tooltip example"]</kbd> Populates the tooltip text and display it on top of <div class="btn btn-sm" tooltip="tooltip example">the object</div>.</li>
			<li>Adding<kbd>[tooltip-right]</kbd> Displays the tooltip on the right of <div class="btn btn-sm" tooltip="tooltip example" tooltip-right>the object</div>.</li>
			<li>Adding<kbd>[tooltip-bottom]</kbd> Displays the tooltip on the bottom of <div class="btn btn-sm" tooltip="tooltip example" tooltip-bottom>the object</div>.</li>
			<li>Adding<kbd>[tooltip-left]</kbd> Displays the tooltip on the left of <div class="btn btn-sm" tooltip="tooltip example" tooltip-left>the object</div>.</li>
		</ul>
		<h3>Modals</h3>
		<p>Modals are one of the only parts of this library that are not pure CSS. They can be made to be pure CSS, but you would need to have all of it's content inside of the HTML and hidden and you limit the ability for ajax-loaded content. We do a hybrid installment instead. You can still do pure css / html modals, but in order to expand their functionality you'll need openskull.js as well.</p>
		<ul>
			<li><mark class="bg-success em">Pure CSS</mark>: Any element who's href links to the <kbd>[id]</kbd> of a modal window will display the modal window.</li>
			<li><mark class="bg-warning em">Javascript</mark>:  Elements marked with the <kbd>[modal]</kbd> attribute will be picked up by the javascript and create/populate the modal window with the <kbd>[href]</kbd> target.</li>
		</ul>
		<div class="modal_css">
			<a href="#example_modal" class="btn">Pure CSS Modal Link</a>
			<div class="modal" id="example_modal">
				<a class="modal_bg" href="#0"></a>
				<div class="modal_body">
					<h2>Example Modal Window</h2>
					This is the content inside of this modal window. You'll notice that the hash of the window url has changed to this target.
					<form action="#0">
						<em>This could be a good place for a form</em>
						<div class="row g1">
							<div class="os">
								<label for="">First Name</label>
								<input type="text" placeholder="First Name">
							</div>
							<div class="os">
								<label for="">Last Name</label>
								<input type="text" placeholder="Last Name">
							</div>
							<div class="clear"></div>
							<div class="os">
								<label for="">Email <em>*</em></label>
								<input type="email" required placeholder="Email*">
							</div>
						</div>
					</form>
					<div class="row buttons padt2">
						<div class="os">
							<a href="#0" class="btn-primary">Accept Modal</a>
						</div>
						<div class="os text-right"><a href="#0" class="btn-blank text-error">Close Modal</a></div>
					</div>
					<a class="modal_close" href="#0"></a>
				</div>
			</div>
		</div>
		<h3>Tabs</h3>
		<div class="tabs">
			<div class="tab_nav">
				<a tab="tabs">Tabs</a>
				<a tab="buttons">Buttons</a>
				<a tab="pagination">Pagination</a>
				<a tab="tooltips">Tooltips</a>
				<a tab="modal">Modal</a>
			</div>
			<div class="tab_content" tab="tabs">
				<h4>Tabs</h4>
				here we are
			</div>

			<div class="tab_content" tab="buttons">
				<h4>Buttons</h4>
				<a href="#0" class="btn block btn-primary">.btn.block.btn-primary</a>

				<!-- <div class="row content-space padt20"> -->
					<a href="#0" class="btn btn-lg text-center">.text-center > .btn.btn-lg</a>
					<a href="#0" class="btn btn-sm pull-left">.btn.btn-sm.pull-left</a>
					<a href="#0" class="btn btn-xs pull-right">.btn.btn-xs.pull-right</a>

				<!-- </div> -->
				<!-- <div class="row content-space padt20"> -->
					<a href="#0" class="btn btn-primary">.btn-primary</a>
					<a href="#0" class="btn btn-info">.btn-info</a>
					<a href="#0" class="btn btn-warning">.btn-warning</a>
					<a href="#0" class="btn btn-danger">.btn-danger</a>
				<!-- </div> -->
			</div>

			<div class="tab_content" tab="pagination">
				<h4>Pagination</h4>
				<div class="pagination row">
					<a href="#0" class="prev">Prev</a>
					<a href="#0">1</a>
					<a href="#0" class="active">2</a>
					<a href="#0">3</a>
					<a href="#0">4</a>
					<a href="#0" class="next">Next</a>
				</div>
			</div>

			<div class="tab_content" tab="tooltips">
				<h4>Tooltips</h4>
				
			</div>

			<div class="tab_content" tab="modal">
				<h4>Modal</h4>
				
			</div>
		</div>

		<h3>Messages</h3>
		
		<div class="message-success">Message Success</div>
		<div class="message-warning">Message Warning</div>
		<div class="message-info">Message Info</div>
		<div class="message-error">Message Error</div>

		<hr>
	</div>
</div>