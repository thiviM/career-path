<label for="jobDropdown">Select a Job:</label>
<select id="jobDropdown"></select>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        // Fetch job titles from the server
        $.ajax({
            url: '/get-job-titles',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                // Populate the dropdown with job titles
                const dropdown = $('#jobDropdown');
                dropdown.empty();
                dropdown.append('<option value="" disabled selected>Select a job</option>');

                data.forEach(jobTitle => {
                    dropdown.append(`<option value="${jobTitle}">${jobTitle}</option>`);
                });
            },
            error: function(error) {
                console.error('Error fetching job titles:', error);
            }
        });
    });
</script>