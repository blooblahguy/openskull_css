<div class="bg-primary pady2">
	<div class="container">
		<h1>Forms</h1>
		<p class="text-muted">Simple is easy and easy is better. Build forms using the classes you already know.</p>
	</div>
</div>
<div class="section">
	<div class="container">
		<div class="ultraform">
			<p>Forms should work out of the box. They don't do much, but if you need very specific or advanced formatting then anything extra would get in the way. We try and keep our forms as baseline as possible, while still offering the best possible user experience.</p>
			<p>Forms marked with <kbd>[required]</kbd> will style based on their validation state. If it's <kbd>:invalid</kbd> but not <kbd>:focus</kbd> then it displays the <mark class="bg-warning">warning</mark> color. If it's <kbd>:invalid</kbd> and <kbd>:focus</kbd> then it displays the <mark class="bg-error text-white">error</mark> color.</p>
			<p>Lastly, if a <kbd>:required</kbd> element is <kbd>:valid</kbd> then it displays the <mark class="bg-success text-white">success</mark> color. User interactions like this make filling out forms satisfying and easy.</p>
			<form action="#0" method="POST">
				<h2>Form Example</h2>
				<small>We'll never share your email address to a 3rd party. (demo text, we're not collecting your information)</small>
				<div class="row g1">
					<div class="os-md-6 os-12">
						<label for="">First Name <span>*</span></label>
						<input type="text" required minlength="2" placeholder="First Name" name="firstName">
					</div>
					<div class="os-md-6 os-12">
						<label for="">Last Name <span>*</span></label>
						<input type="text" required minlength="2" placeholder="Last Name" name="lastName">
					</div>
					<div class="os-12">
						<label for="">Email Address <span>*</span></label>
						<input type="email" required placeholder="Email Address" name="email">
					</div>
					<div class="os-md-6 os-12">
						<label for="">Checkboxes</label>
						<input type="checkbox" required > Option 1 <span class="text-error">*</span>
						<input type="checkbox" checked> Option 2
						<input type="checkbox"> Option 3
					</div>
					<div class="os-md-6 os-12">
						<label for="">Radios <span>*</span></label>
						<input type="radio" required name="radiotest"> Option 1
						<input type="radio" name="radiotest"> Option 2
						<input type="radio" name="radiotest"> Option 3
					</div>
					<div class="os-12">
						<label for="">Select Box <span>*</span></label>
						<select name="" required>
							<option value="" selected disabled>-- Select</option>
							<option value="">Option 1</option>
							<option value="">Option 2</option>
							<option value="">Option 3</option>
						</select>
					</div>
					<div class="os-12">
						<label for="" >Multi-Select Box <span>*</span></label>
						<select multiple required>
							<option value="" required>Option 1</option>
							<option value="">Option 2</option>
							<option value="">Option 3</option>
							<option value="">Option 3</option>
						</select>
					</div>
					<div class="os-12">
						<label for="">File upload <span>*</span></label>
						<input type="file" required>
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
						<label for="">Textarea <span>*</span></label>
						<textarea name="" required rows="4" placeholder="Insert any message you'd like to"></textarea>
					</div>
				</div>
			
				<input type="submit" class="btn-primary margt1" value="Submit">
			</form>
		</div>
		<div class="bg-black pad1 margt2 mono">Forms Source Code: </div>
		<pre><code style="max-height: 400px;" class="scrolly" target=".ultraform"></code></pre>
	</div>
</div>