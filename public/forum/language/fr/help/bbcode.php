<?php
/**
 *
 * This file is part of the french language pack for the phpBB Forum Software package.
 * This file is translated by phpBB-fr.com <http://www.phpbb-fr.com>
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'HELP_BBCODE_BLOCK_IMAGES'	=> 'Afficher des images dans les messages',
	'HELP_BBCODE_BLOCK_INTRO'	=> 'Introduction',
	'HELP_BBCODE_BLOCK_LINKS'	=> 'Création de liens',
	'HELP_BBCODE_BLOCK_LISTS'	=> 'Génération de listes',
	'HELP_BBCODE_BLOCK_OTHERS'	=> 'Autres questions',
	'HELP_BBCODE_BLOCK_QUOTES'	=> 'Citations et textes à espacement fixe',
	'HELP_BBCODE_BLOCK_TEXT'	=> 'Mise en forme du texte',

	'HELP_BBCODE_IMAGES_ATTACHMENT_ANSWER'	=> 'Les fichiers peuvent maintenant être joints à n’importe quel endroit du message en utilisant le BBcode <strong>[attachment=][/attachment]</strong>, si l’administrateur a activé cette fonctionnalité et si vous en avez la permission. Dans l’écran de rédaction de message, vous trouverez un menu déroulant (respectivement un bouton) pour joindre vos fichiers en ligne.',
	'HELP_BBCODE_IMAGES_ATTACHMENT_QUESTION'	=> 'Joindre un fichier à un message',
	'HELP_BBCODE_IMAGES_BASIC_ANSWER'	=> 'Le BBCode permet d’inclure des images dans vos messages à l’aide d’une balise. Il y a deux choses importantes à se rappeler lors de l’utilisation de cette balise qui sont d’une part, que beaucoup d’utilisateurs n’apprécient pas qu’il y ait beaucoup d’images dans les messages et d’autre part, que l’image affichée doit être disponible sur Internet (elle ne peut être uniquement que sur votre ordinateur, sauf si vous avez un serveur Web !). Pour afficher une image, vous devez encadrer son URL entre des balises <strong>[img][/img]</strong>. Par exemple :<br /><br /><strong>[img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />Comme noté dans la section URL ci-dessus, vous pouvez entourer l’image entre des balises <strong>[url][/url]</strong> si désiré, exemple :<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />affichera<br /><br /><a href="https://www.phpbb.com/"><img src="https://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>',
	'HELP_BBCODE_IMAGES_BASIC_QUESTION'	=> 'Ajout d’une image dans un message',

	'HELP_BBCODE_INTRO_BBCODE_ANSWER'	=> 'Le BBCode est une implémentation spéciale du HTML. L’administrateur détermine si le BBCode peut être utilisé dans vos messages sur le forum. Vous pouvez désactiver le BBCode dans certains messages via le formulaire de rédaction de message. Le BBCode ressemble au HTML, les balises sont entre crochets [ et ] au lieu de &lt; et &gt;, et offre une meilleure maîtrise de l’affichage du contenu. Selon le thème utilisé, vous pouvez également ajouter les BBCodes en cliquant dans l’interface au-dessus du formulaire de rédaction de message. Même avec cela, ce guide peut vous être utile.',
	'HELP_BBCODE_INTRO_BBCODE_QUESTION'	=> 'Qu’est-ce que le BBCode ?',

	'HELP_BBCODE_LINKS_BASIC_ANSWER'	=> 'Le BBCode permet de créer des URI (Indicateurs de Ressources Uniformes) ou URL de différentes façons.<ul><li>La première est d’utiliser les balises <strong>[url=][/url]</strong>, ce que vous saisirez après le signe <strong>=</strong> se comportera comme une URL. Par exemple, pour un lien vers phpBB-fr.com, vous pouvez utiliser :<br /><br /><strong>[url=http://www.phpbb-fr.com/]</strong>Visitez phpBB !<strong>[/url]</strong><br /><br />Ce qui générera le lien : <a href="http://www.phpbb-fr.com/">Visitez phpBB !</a><br/>Vous noterez que le lien s’ouvre soit dans la même fenêtre, soit dans une nouvelle fenêtre selon les préférences du navigateur.</li><li>Si vous désirez que l’URL elle-même soit affichée comme un lien, vous pouvez simplement utiliser :<br /><br /><strong>[url]</strong>http://www.phpbb-fr.com/<strong>[/url]</strong><br /><br />Ce qui générera le lien : <a href="http://www.phpbb-fr.com/">http://www.phpbb-fr.com/</a></li><li>De plus, phpBB autorise les <em>Liens magiques</em>, ce qui transforme automatiquement les URL correctement écrites en lien sans indiquer de balise ou même http://. Par exemple, si vous saisissez www.phpbb-fr.com, un lien <a href="http://www.phpbb-fr.com/">www.phpbb-fr.com</a> sera affiché automatiquement à la lecture de votre message.</li><li>La même chose s’applique aux adresses e-mails, vous pouvez indiquer l’adresse explicitement, comme par exemple :<br /><br /><strong>[email]</strong>personne@domain.adr<strong>[/email]</strong><br /><br />Ce qui affichera <a href="mailto:personne@domain.adr">personne@domain.adr</a> ou bien vous pouvez simplement saisir personne@domain.adr dans votre message et cela sera automatiquement converti lors de la consultation.</li></ul>Comme avec toutes les balises BBCode, vous pouvez encapsuler avec des URL d’autres balises telles que <strong>[img][/img]</strong> (voir l’entrée suivante), <strong>[b][/b]</strong>, etc. Comme avec les balises de mise en forme, c’est à vous de vous assurer de les ouvrir et de les fermer correctement, par exemple :<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br />n’est <span style="text-decoration: underline">pas</span> correct ce qui peut entraîner la suppression de votre message, donc faites attention.',
	'HELP_BBCODE_LINKS_BASIC_QUESTION'	=> 'Créer un lien vers un autre site',

	'HELP_BBCODE_LISTS_ORDERER_ANSWER'	=> 'Le deuxième type de liste, la liste ordonnée, vous permet de décider de ce qui s’affiche avant chaque élément. Utilisez <strong>[list=1][/list]</strong> pour créer une liste ordonnée numérotée ou <strong>[list=a][/list]</strong> pour une liste alphabétique. Comme pour les listes non ordonnées, les éléments sont indiqués avec <strong>[*]</strong>. Par exemple :<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Faire les courses<br /><strong>[*]</strong>Acheter un nouvel ordinateur<br /><strong>[*]</strong>Jurer quand le PC plante<br /><strong>[/list]</strong><br /><br />affichera :<ol style="list-style-type: arabic-numbers"><li>Faire les courses</li><li>Acheter un nouvel ordinateur</li><li>Jurer quand le PC plante</li></ol>Alors que pour une liste alphabétique, en utilisant :<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Réponse 1<br /><strong>[*]</strong>Réponse 2<br /><strong>[*]</strong>Réponse 3<br /><strong>[/list]</strong><br /><br />vous obtiendrez :<ol style="list-style-type: lower-alpha"><li>Réponse 1</li><li>Réponse 2</li><li>Réponse 3</li></ol><br /><strong>[list=A]</strong><br /><strong>[*]</strong>Réponse 1<br /><strong>[*]</strong>Réponse 2<br /><strong>[*]</strong>Réponse 3<br /><strong>[/list]</strong><br /><br />affichera<ol style="list-style-type: upper-alpha"><li>Réponse 1</li><li>Réponse 2</li><li>Réponse 3</li></ol><br /><strong>[list=i]</strong><br /><strong>[*]</strong>Réponse 1<br /><strong>[*]</strong>Réponse 2<br /><strong>[*]</strong>Réponse 3<br /><strong>[/list]</strong><br /><br />affichera<ol style="list-style-type: lower-roman"><li>Réponse 1</li><li>Réponse 2</li><li>Réponse 3</li></ol><br /><strong>[list=I]</strong><br /><strong>[*]</strong>Réponse 1<br /><strong>[*]</strong>Réponse 2<br /><strong>[*]</strong>Réponse 3<br /><strong>[/list]</strong><br /><br />affichera<ol style="list-style-type: upper-roman"><li>Réponse 1</li><li>Réponse 2</li><li>Réponse 3</li></ol>.',
	'HELP_BBCODE_LISTS_ORDERER_QUESTION'	=> 'Créer une liste ordonnée',
	'HELP_BBCODE_LISTS_UNORDERER_ANSWER'	=> 'Le BBCode gère deux types de liste : ordonnées ou non. Elles sont les mêmes que leur équivalent HTML. Une liste non ordonnée affiche chaque élément de la liste séquentiellement l’un après l’autre, chacun indenté par une puce. Utilisez <strong>[list][/list]</strong> pour créer une liste non ordonnée et définissez chaque élément avec <strong>[*]</strong>. Par exemple, pour la liste de vos couleurs préférées, utilisez :<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Rouge<br /><strong>[*]</strong>Bleu<br /><strong>[*]</strong>Jaune<br /><strong>[/list]</strong><br /><br />Ce qui générera la liste suivante :<ul><li>Rouge</li><li>Bleu</li><li>Jaune</li></ul><br />Sinon, vous pouvez spécifier le style de liste à puces en utilisant <strong>[list=disc][/list]</strong>, <strong>[list=circle][/list]</strong> ou <strong>[list=square][/list]</strong>.',
	'HELP_BBCODE_LISTS_UNORDERER_QUESTION'	=> 'Créer une liste non ordonnée',

	'HELP_BBCODE_OTHERS_CUSTOM_ANSWER'	=> 'Si vous êtes administrateur du forum et avez les autorisations nécessaires, vous pouvez ajouter des BBcodes supplémentaires via la section &quot;BBcodes&quot; dans le sous menu &quot;Messages&quot;.',
	'HELP_BBCODE_OTHERS_CUSTOM_QUESTION'	=> 'Puis-je ajouter mes balises ?',

	'HELP_BBCODE_QUOTES_CODE_ANSWER'	=> 'Si vous désirez insérer du code ou quoi que ce soit qui nécessite une police à largeur fixe, par exemple : une police de type Courier, encadrez votre texte entre les balises <strong>[code][/code]</strong> :<br /><br /><strong>[code]</strong>echo &quot;Un peu de code&quot; ;<strong>[/code]</strong><br /><br />Le format utilisé entre les balises <strong>[code][/code]</strong> est enregistré pour une consultation ultérieure. La syntaxe PHP peut être mise en valeur en utilisant <strong>[code=php][/code]</strong> et c’est recommandé lorsque des extraits de code PHP sont publiés afin d’en améliorer la lisibilité.',
	'HELP_BBCODE_QUOTES_CODE_QUESTION'	=> 'Afficher du code ou des données à espacement fixe',
	'HELP_BBCODE_QUOTES_TEXT_ANSWER'	=> 'Il y a deux manières de citer un texte, avec ou sans référence.<ul><li>Lorsque vous utilisez la fonction de citation pour répondre à un message sur le forum, vous pouvez noter que le texte du message est ajouté à l’intérieur d’un bloc <strong>[quote=&quot;&quot;][/quote]</strong>. Cette méthode vous permet de citer avec une référence à une personne ou toute autre référence ! Par exemple, pour citer un texte de M. Goutte, vous mettrez :<br /><br /><strong>[quote=&quot;M. Goutte&quot;]</strong>Le texte de M. Goutte ira ici<strong>[/quote]</strong><br /><br /><em>M. Goutte a écrit :</em> sera ajouté automatiquement avant le texte. Souvenez-vous que vous <strong>devez</strong> encadrer entre &quot;&quot; le nom à citer, ce n’est pas optionnel.</li><li>La deuxième méthode vous permet de faire des citations en aveugle. Pour l’utiliser, encadrez le texte avec les balises <strong>[quote][/quote]</strong>. Lorsque vous consulterez le message, cela affichera, en fonction du thème utilisé, <em>Citation :</em> avant le texte lui-même.</li></ul>',
	'HELP_BBCODE_QUOTES_TEXT_QUESTION'	=> 'Citer du texte dans les réponses',

	'HELP_BBCODE_TEXT_BASIC_ANSWER'	=> 'Le BBCode permet de modifier rapidement la forme du texte grâce aux méthodes suivantes :<ul><li>Encadrez le texte entre <strong>[b][/b]</strong> pour mettre en gras.<br /><br />Par exemple : <strong>[b]</strong>Salut<strong>[/b]</strong> devient <strong>Salut</strong><br /><br /></li><li>Utilisez <strong>[i][/i]</strong> pour l’italique.<br /><br />Par exemple : C’est <strong>[i]</strong>génial !<strong>[/i]</strong> donne C’est <em>génial !</em><br /><br /></li><li>Utilisez <strong>[u][/u]</strong> pour souligner.<br /><br />Par exemple :<strong>[u]</strong>Bonjour<strong>[/u]</strong> devient <span style="text-decoration: underline">Bonjour</span></li></ul>',
	'HELP_BBCODE_TEXT_BASIC_QUESTION'	=> 'Utiliser le gras, l’italique et le souligné',
	'HELP_BBCODE_TEXT_COLOR_ANSWER'	=> 'Pour modifier la couleur ou la taille de votre texte utilisez les balises suivantes :<ul><li>Changez la couleur d’un texte en l’encadrant entre les balises <strong>[color=][/color]</strong>. Vous pouvez indiquer un nom de couleur connu (comme : red, blue, yellow, etc.) ou bien indiquer un code hexadécimal sous la forme <strong>#FFFFFF</strong> (où FFFFFF est à remplacer par la valeur hexadecimale).<br />Par exemple, pour obtenir du texte rouge utilisez :<br /><br /><strong>[color=red]</strong>Salut !<strong>[/color]</strong><br /><br />ou<br /><br /><strong>[color=#FF0000]</strong>Salut !<strong>[/color]</strong><br /><br />Ces deux exemples afficheront : <span style="color:red">Salut !</span><br /><br /></li><li>Changez la taille du texte de façon analogue avec les balises <strong>[size=][/size]</strong>. L’affichage résultant de ce BBCode dépend du thème utilisé. toutefois le format recommandé est une valeur numérique représentant la hauteur du texte en pourcentage, à partir de 20 (tellement petit que vous ne pourrez pas le voir) jusqu’à 200 (très grand).<br />Par exemple :<br /><br /><strong>[size=30]</strong>PETIT<strong>[/size]</strong> sera affiché <span style="font-size:30%;">PETIT</span><br /><br />alors que <strong>[size=200]</strong>ÉNORME !<strong>[/size]</strong> donnera <span style="font-size:200%;">ÉNORME !</span><br /><br />Note : Gardez à l’esprit que la façon dont votre message s’affichera dépendra du navigateur et du système d’exploitation.</li></ul',
	'HELP_BBCODE_TEXT_COLOR_QUESTION'	=> 'Changer la couleur et la taille du texte',
	'HELP_BBCODE_TEXT_COMBINE_ANSWER'	=> 'Oui, bien évidemment, vous pouvez écrire pour attirer l’attention :<br /><br /><strong>[size=200][color=red][b]</strong>REGARDEZ-MOI !<strong>[/b][/color][/size]</strong><br /><br />Donne : <span style="color:red;font-size:200%;"><strong>REGARDEZ-MOI !</strong></span><br /><br />Attention toutefois à ne pas en abuser ! Retenez aussi que c’est à vous, l’auteur, de vous assurer que les balises sont correctement fermées.<br /><br />Par exemple, ceci est incorrect : <strong>[b][u]</strong>C’est faux !<strong>[/b][/u]</strong>',
	'HELP_BBCODE_TEXT_COMBINE_QUESTION'	=> 'Puis-je combiner des balises ?',
));
