<div class="bg-secondary pady2">
	<div class="container">
		<h1>Forms</h1>
		<p class="text-muted">Simple is easy and easy is better. Build forms using the classes you already know.</p>
	</div>
</div>
<div class="section">
	<div class="container">
		<div class="ultraform">
			<form action="#0">
				<h2>Form Example</h2>
				<small>We'll never share your email address to a 3rd party. (demo text, we're not collecting your information)</small>
				<div class="row g1">
					<div class="os-md-6 os-12">
						<label for="">First Name <span>*</span></label>
						<input type="text" placeholder="First Name" name="firstName">
					</div>
					<div class="os-md-6 os-12">
						<label for="">Last Name <span>*</span></label>
						<input type="text" placeholder="Last Name" name="lastName">
					</div>
					<div class="os-12">
						<label for="">Email Address <span>*</span></label>
						<input type="email" placeholder="Email Address" name="email">
					</div>
					<div class="os-md-6 os-12">
						<label for="">Checkboxes</label>
						<input type="checkbox" checked> Option 1
						<input type="checkbox"> Option 2
						<input type="checkbox"> Option 3
					</div>
					<div class="os-md-6 os-12">
						<label for="">Radios</label>
						<input type="radio" name="radiotest"> Option 1
						<input type="radio" checked name="radiotest"> Option 2
						<input type="radio" name="radiotest"> Option 3
					</div>
					<div class="os-12">
						<label for="">Select Box</label>
						<select name="">
							<option value="0">-- First Option</option>
							<option value="">Option 1</option>
							<option value="">Option 2</option>
							<option value="">Option 3</option>
						</select>
					</div>
					<div class="os-12">
						<label for="">Multi-Select Box</label>
						<select multiple>
							<option value="0">-- First Option</option>
							<option value="">Option 1</option>
							<option value="">Option 2</option>
							<option value="">Option 3</option>
						</select>
					</div>
					<div class="os-12">
						<label for="">File upload</label>
						<input type="file">
					</div>
					<div class="os-12">
						<label for="">Range Input</label>
						<input type="range" step="1" min="0" max="20">
					</div>
					<div class="clear"></div>
					<div class="os-6 os-md-3">
						<label for="">Number Input</label>
						<input type="number" step="1" min="0" max="20" value="12">
					</div>
					<div class="os-6 os-md-3">
						<label for="">Date Input</label>
						<input type="date" value="<? echo Date("Y-m-d"); ?>">
					</div>
					<div class="os-6 os-md-3">
						<label for="">Datetime-local Input</label>
						<input type="datetime-local" >
					</div>
					<div class="os-6 os-md-3">
						<label for="">Color Input</label>
						<input type="color" id="color" name="color" value="#3493d3" />
					</div>
					<div class="clear"></div>
					<div class="os-12">
						<label for="">Textarea</label>
						<textarea name="" rows="8" placeholder="Insert any message you'd like to"></textarea>
					</div>
				</div>
			
				<input type="button" class="btn-primary margt1" value="Submit">
			</form>
		</div>
		<div class="bg-black pad1 margt2 mono">Forms Source Code: </div>
		<pre><code style="max-height: 400px;" class="scrolly" target=".ultraform"></code></pre>
	</div>
</div>