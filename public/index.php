<?php

require "../vendor/autoload.php";

$loader = new Twig\Loader\FilesystemLoader("../src/views");
$twig = new Twig\Environment($loader);

$products = [
    ["name" => "Soupe à l'oignon", "description" => "La soupe à l’oignon est une soupe gratinée à base d'oignon, traditionnelle de la cuisine française, et de nombreuses régions productrices d'oignons."],
    ["name" => "Tartiflette", "description" => "La tartiflette est une recette de cuisine inspirée de recettes traditionnelles de cuisine savoyarde, de gratin de pommes de terre, oignons, lardons, le tout gratiné au reblochon."],
    ["name" => "Poulet rôti", "description" => "Le poulet rôti est un plat de volaille à base de poulet cuit dans une rôtissoire, un four, un barbecue, en utilisant la chaleur directe de l'appareil dans lequel est placé le poulet. "],
    ["name" => "Cordon bleu", "description" => "Le cordon bleu, ou parfois cordon-bleu, est un plat préparé avec une escalope roulée autour de jambon et de fromage, puis panée."],
    ["name" => "Moules-Frites", "description" => "Les moules-frites sont un mets très populaire en Belgique et dans le nord de la France, constitué de moules cuites et accompagnées de frites."],
    ["name" => "Cassoulet", "description" => "Le cassoulet est une spécialité régionale du Languedoc, à base de haricots secs, généralement blancs, et de viande. À son origine, il était à base de fèves."],
    ];

echo $twig->render("index.html.twig", ["products" => $products]);