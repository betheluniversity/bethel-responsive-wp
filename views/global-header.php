<div class="global__header" role="banner">
    <div class="inner">
        <div class="global__logo">
            <a href="https://www.bethel.edu"><img alt="Bethel University" src="//cdn1.bethel.edu/dev/images/logo-white.png"/></a>
        </div>

        <nav class="big-global__navigation" role="navigation">
            <ul>

                <?php
                navListItem($startsWith, "undergrad", "/undergrad/", "Undergrad");
                navListItem($startsWith, "adult-undergrad", "/adult-undergrad/", "Adult Undergrad");
                navListItem($startsWith, "graduate", "/graduate/", "Graduate");
                navListItem($startsWith, "seminary", "/seminary/", "Seminary");
                ?>

            </ul>
        </nav>

        <a class="burger" href="#toolbox" id="js-globalNav-button">
            <span class="burger-icon"></span>
            <span class="burger-text">Menu</span>
        </a>

    </div>
</div>