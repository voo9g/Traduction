<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'notices' => [
        'créé' => 'Un nouveau nid, :name, à été créé avec succès.',
        'supprimé' => 'Succès de la supression de la requête de nid demandé au Panel.',
        'mis_à_jour' => 'Mis à jour avec succès les options de configuration du nid.',
    ],
    'oeufs' => [
        'notices' => [
            'importé' => 'Import de l'oeuf et ses variables associées avec succès.',
            'misàjour_via_import' => 'Cet Oeuf à été mis à jour en utlisant le fichier fournit.',
            'supprimé' => 'Succès de la supression de la requête d'Oeuf au Panel.',
            'mis_à_jour' => 'Modification de la configuration de l'Oeuf avec succès.',
            'script_misàjour' => 'Script d'insatllation de l'Oeuf à été mis à jour et va se mettre en marche dès que les serveurs seront installés.',
            'oeuf_créé' => 'Un nouvel oeuf à été pondu avec succès. Vous aurez besoin de redémarrez tous les serveurs en marche pour appliquer l'Oeuf.',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_supprimée' => 'La variable ":variable" a été supprimée et ne va plus être disponible au serveur une fois relancé.',
            'variable_misàjour' => 'La variable ":variable" a été mis à jour. Vous aurez besoin de relancer les serveurs utilisant cette variable afin de l'appliquer.',
            'variable_créée' => 'Une nouvelle variable à été créée avec succès et à été assigné à cet oeuf.',
        ],
    ],
];
