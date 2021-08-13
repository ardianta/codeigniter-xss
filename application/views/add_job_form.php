<form id="form-add" action="" method="post">
	<label for="name">Vacancy Job name</label>
	<input type="text" name="name" value="<?= htmlentities(set_value('name'), ENT_QUOTES) ?>">
	<div style="color: tomato;"><?= form_error('name') ?></div>
	<br>
	<label for="job_image_url">Image URL</label>
	<input onchange="previewImage(this)" type="url" pattern="[(http(s)?):\/\/(www\.)?a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)" name="job_image_url" value="<?= htmlentities(set_value('job_image_url'), ENT_QUOTES) ?>">
	<div style="color: tomato;"><?= form_error('job_image_url') ?></div>
	<div id="image-preview"></div>
	<br>
	<label for="job_url">Job URL</label>
	<input type="url" pattern="[(http(s)?):\/\/(www\.)?a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)" name="job_url" value="<?= htmlentities(set_value('job_url'), ENT_QUOTES) ?>">
	<div style="color: tomato;"><?= form_error('job_url') ?></div>
	<br>
	<input type="submit" value="Simpan" title="</noscript><img src=x onerror=alert(1)>">
</form>

<script type="text/javascript">
function previewImage(event) {
	const previewContainer = document.querySelector('#image-preview');
	const form = document.querySelector('#form-add');
	if(form.checkValidity()){
		const imageURL = event.value;
		previewContainer.innerHTML = `
			<img src="${imageURL}" height="200" width="200" />
		`;
	}
}
</script>
