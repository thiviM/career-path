$(document).ready(function () {
    function populateJobs() {
        $.ajax({
            url: '/getJobs',
            method: 'GET',
            success: function (response) {
                updateJobDropdown(response);
            },
            error: function (error) {
                console.error('Error fetching jobs:', error);
            }
        });
    }

function updateJobDropdown(jobs) {
    var jobDropdown = $('#job');
    jobDropdown.empty(); 

        jobs.forEach(function (job) {
            jobDropdown.append('<option value="' + job.id + '">' + job.job_title + '</option>');
        });

        jobDropdown.select2({
            placeholder: 'Search for a job...',
            allowClear: true,
            width: '100%',
        });

        jobDropdown.on('change', function () {
            var selectedJobId = $(this).val();
            loadCourses(selectedJobId);
        });
    }



 
    function loadCourses(jobId) {
        $.ajax({
            url: '/getStream/' + jobId,
            method: 'GET',
            success: function (response) {
                updateCourses(response);
            },
            error: function (error) {
                console.error('Error fetching streams:', error);
            }
        });
    }
    
    function updateCourses(streams) {
        var coursesContainer = $('#courses-container');
        coursesContainer.empty();
    
        if (streams.length > 0) {
            streams.forEach(function (stream) {
                coursesContainer.append('<p class="course" data-course-id="' + stream.id + '">' + stream.stream_title + '</p>');
            });
    
            $('.course').hover(
                function () {
                    var streamId = $(this).data('course-id');
                    loadSubjects(streamId);
                },
                
            );
        } else {
            coursesContainer.append('<p>No streams available for the selected job.</p>');
        }
    }
    
    function loadSubjects(streamId) {
        $.ajax({
            url: '/getSubject/' + streamId,
            method: 'GET',
            success: function (response) {
                updateSubjects(response);
            },
            error: function (error) {
                console.error('Error fetching subjects:', error);
            }
        });
    }
    
    function updateSubjects(subjects) {
        var subjectsContainer = $('#subjects-container');
        subjectsContainer.empty();
    
        if (subjects.length > 0) {
            var subjectsList = '<ul>';
            subjects.forEach(function (subject) {
                subjectsList += '<li class="subject" data-subject-id="' + subject.id + '">' + subject.subject_title + '</li>';
            });
            subjectsList += '</ul>';
            subjectsContainer.html(subjectsList);
    
            $('.subject').hover(
                function () {
                    var subjectId = $(this).data('subject-id');
                    loadOLSubjects(subjectId);
                },
               
            );
        } else {
            subjectsContainer.append('<p>No Subjects available for the selected streams.</p>');
        }
    }
    
    function loadOLSubjects(subjectId) {
        $.ajax({
            url: '/getOLSubject/' + subjectId,
            method: 'GET',
            success: function (response) {
                updateOLSubjects(response);
            },
            error: function (error) {
                console.error('Error fetching subjects:', error);
            }
        });
    }
    
    function updateOLSubjects(olSubjects) {
        var olSubjectsContainer = $('#ol-subjects-container');
        olSubjectsContainer.empty();
    
        if (olSubjects.length > 0) {
            var olSubjectsList = '<ul style="list-style: none;">';
            olSubjects.forEach(function (olSubject) {
                olSubjectsList += '<li>' + olSubject.ol_subject_title + '</li>';
            });
            olSubjectsList += '</ul>';
    
            olSubjectsContainer.html(olSubjectsList);
        } else {
            olSubjectsContainer.append('<p>No O/L subjects available for the selected subject.</p>');
        }
    }
    
    populateJobs();
});