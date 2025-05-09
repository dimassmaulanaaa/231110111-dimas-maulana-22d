window.setTimeout(function() {
    document.querySelectorAll('.alert').forEach(alert => {
        new bootstrap.Alert(alert).close();
    });
}, 3456);

document.addEventListener('DOMContentLoaded', function() {
	const fileInput = document.getElementById('photo');
	const chooseFileButton = document.getElementById('choose-file-button');

	chooseFileButton.addEventListener('click', function() {
	fileInput.click();
	});
});

$(document).ready(function () {
	$('#search-project-input').on('keyup', function() {
		$('#project-list').load('../ajax/projectList.php?search-project-keyword=' + $('#search-project-input').val());
	});
});