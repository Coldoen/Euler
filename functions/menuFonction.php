<?php
function nav_item(string $lien, string $titre): string
{
    $class = 'nav-item';
    if($_SERVER['SCRIPT_NAME'] === $lien){
        $class .= ' active';
    }
    return <<<HTML
    <li class="$class">
    <a class="nav-link" href="$lien">$titre</a>
    </li>;
    HTML;
}
?>