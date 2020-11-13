<?php
function nav_item (string $lien, string $titre, string $linkClass = ''): string 
{
    $classe = 'nav-item';
    if ($_SERVER['SCRIPT_NAME'] === $lien) {
        $classe .= ' active';
    }
    return <<<HTML
    <li class="$classe">
        <a class="$linkClass" href="$lien">$titre</a>
    </li>
HTML;
}
//IMPORTANT : fermer HTML (ci-dessous) sans espace
function nav_menu (string $linkClass = ''): string
{
    return 
        nav_item('/index.php', 'Accueil', $linkClass) .
        nav_item('/contact.php', 'Contact', $linkClass) .
        nav_item('/blog.php', 'Blog', $linkClass);
}
?>
<!--Ne pas oublier de concaténer les liens ci dessus-->