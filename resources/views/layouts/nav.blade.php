<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <a href='https://play.google.com/store/apps/details?id=fr.master_developpement_logiciel.teampluto.stimetable&hl=fr&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'><img
                class="store-button" alt='Disponible sur Google Play'
                src='https://play.google.com/intl/en_us/badges/images/generic/fr_badge_web_generic.png'/></a>
    <div class="sidebar-module sidebar-module-inset">

        <h4>À propos</h4>
        <p>
            Gérez votre emploi du temps depuis votre smartphone, ajoutez vos enseignants et notifiez-les d'un
            retard ou d'une absence.
            <br>
            Ajoutez vos événements personnels et modifiez leur couleur à volonté.
        </p>
    </div>
    <div class="sidebar-module">
        <h4>Wiki</h4>
        <ol class="list-unstyled">
            <li><a href="{!! route('wiki.installation') !!}">Installation</a></li>
            <li><a href="{!! route('wiki.connection') !!}">Connexion</a></li>
            <li><a href="{!! route('wiki.timetable') !!}">Emploi du temps</a></li>
            <li>
                <a href="{!! route('wiki.event') !!}">Évenements</a>
                <ul class="list-nostyle">
                    <li><a href="{!! route('wiki.event.perso') !!}">Évènements personnels</a></li>
                    <li><a href="{!! route('wiki.event.celcat') !!}">Évènements celcat</a></li>
                </ul>
            </li>
            <li>
                <a href="{!! route('wiki.menu') !!}">Menu</a>
                <ol class="list-nostyle">
                    <li><a href="{!! route('wiki.menu.today') !!}">Aujourd'hui</a></li>
                    <li><a href="{!! route('wiki.menu.daysview') !!}">Vue 1/3/7 jours</a></li>
                    <li><a href="{!! route('wiki.menu.exam') !!}">Vue Examens</a></li>
                    <li><a href="{!! route('wiki.menu.synchro') !!}">Synchroniser</a></li>
                    <li><a href="{!! route('wiki.menu.pdf') !!}">Export PDF</a></li>
                    <li><a href="{!! route('wiki.menu.today') !!}">Import/Export PDF</a></li>
                    <li><a href="{!! route('wiki.menu.today') !!}">Mes enseignants</a></li>
                    <li><a href="{!! route('wiki.menu.today') !!}">Préférences</a></li>
                </ol>
            </li>
        </ol>
    </div>
</div><!-- /.blog-sidebar -->