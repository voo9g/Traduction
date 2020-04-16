<?php

return [
    'validation_error' => 'Une erreur s\'est produite',
    'errors' => [
        'return' => 'Retourner à la page précédente',
        'home' => 'Aller à l\'accueil',
        '403' => [
            'header' => 'Forbidden',
            'desc' => 'Vous n\'avez pas les permissions nécéssaires pour accéder à cette page !',
        ],
        '404' => [
            'header' => 'Fichier introuvable',
            'desc' => 'Nous n\'avons pas pu trouver la ressource requise sur le serveur.',
        ],
        'installing' => [
            'header' => 'Installation du serveur...',
            'desc' => 'Le serveur requis est toujours en phase d\'installation. Revenez dans quelques minutes, vous devriez recevoir un mail dès la fin de l\'installation.',
        ],
        'suspended' => [
            'header' => 'Serveur suspendu',
            'desc' => 'Ce serveur a été suspendu et est désormais inaccessible.',
        ],
        'maintenance' => [
            'header' => 'La Node est en maintenance',
            'title' => 'Temporairement indisponible',
            'desc' => 'Cette Node est en maintenance, par conséquent, votre serveur est temporairement inaccessible.',
        ],
    ],
    'index' => [
        'header' => 'Vos serveurs',
        'header_sub' => 'Les serveurs auxquels vous avez accès',
        'list' => 'Liste des serveurs',
    ],
    'api' => [
        'index' => [
            'list' => 'Vos clés',
            'header' => 'Compte API',
            'header_sub' => 'Gérer les clés d\'accès vous permettant d\'effectuer des actions sur le panel.',
            'create_new' => 'Créer une nouvelle clé d\'API',
            'keypair_created' => 'Une clé d\'API a été générée avec succès et est listée ci-dessous.',
        ],
        'new' => [
            'header' => 'Nouvelle clé d\'API',
            'header_sub' => 'Créer une nouvelle clé d\'accès.',
            'form_title' => 'Détails',
            'descriptive_memo' => [
                'title' => 'Description',
                'description' => 'Veuillez entrer une brève description pour cette clé qui vous aidera à vous repérer.',
            ],
            'allowed_ips' => [
                'title' => 'Adresses IP autorisées',
                'description' => 'Entrez en une ligne la liste d\'adresses IP qui pourront utiliser l\'API en utilisant cette clé. La notation CIDR est autorisée.',
            ],
        ],
    ],
    'account' => [
        'details_updated' => 'Les infos de votre compte ont été sauvegardées avec succès.',
        'invalid_password' => 'Le mot de passe renseigné pour votre compte est invalide.',
        'header' => 'Votre compte',
        'header_sub' => 'Gérer les informations de votre compte.',
        'update_pass' => 'Mettre à jour le mot de passe',
        'update_email' => 'Modifier l\'adresse mail',
        'current_password' => 'Mot de passe actuel',
        'new_password' => 'Nouveau mot de passe',
        'new_password_again' => 'Confirmez le nouveau mot de passe',
        'new_email' => 'Nouvelle adresse mail',
        'first_name' => 'Prénom',
        'last_name' => 'Nom de famille',
        'update_identity' => 'Valider le profil',
        'username_help' => 'Votre pseudo doit être unique à votre compte et ne peut contenir que les caractères suivants : :requirements.',
        'language' => 'Langue',
    ],
    'security' => [
        'session_mgmt_disabled' => 'Votre hébergeur n\'a pas activé l\'option permettant de gérer les sessions de compte via cette interface.',
        'header' => 'Sécurité du compte',
        'header_sub' => 'Gérez les sessions actives et l\'authentification à 2 facteurs.',
        'sessions' => 'Sessions actives',
        '2fa_header' => 'Authentification à 2 facteurs',
        '2fa_token_help' => 'Entrez le code d\'authentification à 2 facteurs généré par votre application (Google Authenticator, Authy, etc.).',
        'disable_2fa' => 'Désactiver Authentification à 2 facteurs',
        '2fa_enabled' => 'L\'authentification à 2 facteurs est activée sur ce compte et est nécessaire pour se connecter au panel. Si vous voulez la désactiver, entrez simplement un token valide ci-dessous et valider le formulaire.',
        '2fa_disabled' => 'L\'authentification à 2 facteurs est désactivée sur votre compte ! Vous devrez l\'activer pour ajouter une meilleure sécurité sur votre compte.',
        'enable_2fa' => 'Activer l\'authentification à 2 facteurs',
        '2fa_qr' => 'Configurer l\'authentification à 2 facteurs sur votre compte',
        '2fa_checkpoint_help' => 'Utilisez l\'authentification à 2 facteurs sur votre smartphone pour scanner le QR code ci-contre ou entrez manuellement le code ci-dessous. Une fois cela fait, générez un "token" et entrez-le ci-dessous.',
        '2fa_disable_error' => 'Le code d\'authentification multi-facteurs renseigné est invalide. La protection n\'a pas été désactivée pour ce compte.',
    ],
];
