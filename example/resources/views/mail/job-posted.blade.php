<div>
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
    <h1>{{ $job->title }}</h1>
    <p>New job has been posted successfully.</p>

    You can view the job by clicking the link below:
    <a href="{{ url('/jobs/' . $job->id) }}">View Job</a>
</div>
