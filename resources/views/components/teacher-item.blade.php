@props(['name', 'job'])
<div class="col-md-6 col-lg-3 text-center team mb-4">
    <div class="team-item rounded overflow-hidden mb-2">
        <div class="team-img position-relative">
            <img class="img-fluid" src="img/team-4.jpg" alt="">
            <div class="team-social">
                <x-social-items />
            </div>
        </div>
        <div class="bg-secondary p-4">
            <h5>{{ $name }}</h5>
            <p class="m-0">{{ $job }}</p>
        </div>
    </div>
</div>
