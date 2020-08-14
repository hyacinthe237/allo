<div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="ion-navicon"></span>
        </button>

        <a href="/" class="navbar-brand"><span>Allô</span> Bailleur</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
            <li class=""><a href="/" target="_blank">A propos</a></li>
            <li class=""><a href="/">Qui sommes nous ?</a></li>
            <li class=""><a href="/">Nos services</a></li>
            <li class=""><a href="/">Contact</a></li>
            <li>
                <a href="tel:{{ config('site.phone') }}">{{ config('site.phone') }}</a>
            </li>
        </ul>
    </div>
</div>
