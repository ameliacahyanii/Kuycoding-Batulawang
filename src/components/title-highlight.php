<?php
    function fxHighlight($desc, $title, $styling, $orientation = null) {
        return "
        <span class=\"title-highlight $orientation\">
            <div class=\"relative\">
                <p class=\"highlight-desc\">$desc</p>
                <img src=\"../src/asset/bg-highlight.svg\" alt=\"\" class=\"highlight-fx\" style=\"$styling\">
            </div>
            <h1>$title</h1>
        </span>
        ";
    }
?>