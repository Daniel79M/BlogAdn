<header class="menu-bar">
    <table>
        <tr>
            <td>Blog</td>
            <td>
                <ul>
                    <li>
                        <a href="/BlogAdn/index.php" class="<?= (!isset($_GET["page"]) ? "menu-active" : ""); ?>">Home</a>
                    </li>
                    <li>
                        <a href="/BlogAdn/pages/article.php?page=articles" class="<?= (isset($_GET["page"]) && $_GET["page"] == "articles" ? "menu-active" : ""); ?>">Articles</a>
                    </li>
                    <?php
                    if(!isset($_COOKIE['username'])){
                        ?>
                        <li>
                                <a href="/BlogAdn/pages/inscription.php?page=inscription" class="<?= (isset($_GET["page"]) && $_GET["page"] == "inscription" ? "menu-active" : ""); ?>">Inscription</a>
                            </li>

                            <li>
                                <a href="/BlogAdn/pages/connexion.php?page=connexion" class="<?= (isset($_GET["page"]) && $_GET["page"] == "connexion" ? "menu-active" : ""); ?>">connexion</a>
                            </li>
                        <?php 
                    }    
                    ?>
                    
                </ul>
            </td>
            <?php
            if(isset($_COOKIE['username'])){
                ?>
                <td>
                    <?= $_COOKIE['username']; ?> <a href="/BlogAdn/processing/logout.php">Se déconnecter</a>
                </td>
                <?php 
            }    
            ?>
        </tr>
    </table>
</header>