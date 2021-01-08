Exercice "Mes préférences"
==========================

Préparation
-----------
1. Télécharger le dossier `pref-depart`.
1. Ouvrir le dossier dans VSCode.
1. Démarrer le serveur PHP en exécutant la commande suivante dans le terminal :
    ```cmd
    php -S localhost:8000
    ```
1. Changer l'extension des fichiers `html` pour `php`.

Fichier `index.php`
-------------------
1. Dans le prologue (en début de fichier), récupérer les données GET suivantes : 
   - `$backgroundColor`, `$color`, `$fontFamily`, `$fontSize` et `$lineHeight`
   - Donner comme valeur par défaut à ces variables leur valeur actuelle
1. Placer ces variables dans le document (à l'aide de plusieurs `echo`) pour le rendre dynamique
    1. Dans la balise `<style>`
    2. Dans le lien à la fin. **Note**: Les valeurs du lien doivent être encodées à l'aide de `urlencode`. Ex.: `<?php echo urlencode($color);?>`
1. Tester l'application, en ajoutant le texte suivant (données) à la fin de l'adresse : 
    ```
    ?color=red&fontFamily=papyrus
    ```

Fichier `formulaire.php`
------------------------
1. Dans le prologue (en début de fichier), récupérer les données GET suivantes : 
   - `$backgroundColor`, `$color`, `$fontFamily`, `$fontSize` et `$lineHeight`
   - Donner comme valeur par défaut à ces variables leur valeur actuelle
1. Placer ces variables dans le document (à l'aide de plusieurs `echo`) pour le rendre dynamique
    1. Dans la balise `<style>`
    2. Dans le formulaire.
1. Tester le formulaire.
