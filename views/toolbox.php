<div class="global__toolbox" id="toolbox">
    <div class="inner">
        <a class="global__toolbox__close-btn  btn  btn-small" href="#top" id="js-globalNav-button--close">✖ close</a>
        <nav class="global__navigation" role="navigation">
            <ul>

                <?php
                navListItem($startsWith, "undergrad", "/undergrad/", 'Undergrad');
                navListItem($startsWith, "adult-undergrad", "/adult-undergrad/", 'Adult Undergrad');
                navListItem($startsWith, "adult-undergrad", "/graduate/", 'Graduate');
                navListItem($startsWith, "seminary", "/seminary/", 'Seminary');
                ?>

            </ul>
        </nav>
        <div class="quick-links">
            <div class="quick-links left">
                <ul>

                    <?php
                    navListItem($startsWith, "about", "/about/", "About");
                    navListItem($startsWith, "academics", "/academics/", "Academics");
                    navListItem($startsWith, "admissions", "/admissions/", "Admissions");
                    navListItem($startsWith, "offices", "/offices/", "Offices");
                    navListItem($startsWith, "http://athletics.bethel.edu/", "http://athletics.bethel.edu/", "Athletics");
                    navListItem($startsWith, "events", "/events/", "Events");
                    ?>

                </ul>
            </div>
            <div class="quick-links right">
                <ul>
                    <li><a href="https://apply.bethel.edu">Apply</a></li>
                    <li><a href="https://blink.bethel.edu">Blink</a></li>

                    <?php
                    navListItem($startsWith, "giving", "/giving/", "Give");
                    navListItem($startsWith, "search", "/search/", "Search", "btn  btn-small");
                    ?>

                </ul>
            </div>
        </div>
    </div>
</div>