<?php

return [
    'daemon_connection_failed' => 'Il y a eu une erreur en essayant de communiquer avec le daemon, résultant à un code réponse HTTP/:code . Cette exception a été enregistré.',
    'node' => [
        'servers_attached' => 'Une node ne doit pas avoir de serveurs reliés à elle afin d\'être supprimée.',
        'daemon_off_config_updated' => 'La configuration daemon <strong>a été mise à jour</strong>, pourtant nous rencontrons toujours une erreur en essayant de mettre à jour automatiquement le fichier de configuration sur le Daemon. Vous devrez mettre à jour manuellement le fichier de configuration (core.json) pour que le daemon applique ces changements.',
    ],
    'allocations' => [
        'server_using' => 'Un serveur est actuellement assigné à cette location. Une allocation ne peut être supprimée que si aucun serveur n\'y est assigné.',
        'too_many_ports' => 'Ajouter plus de 1000 ports dans une seule rangée à la fois n\'est pas supporté.',
        'invalid_mapping' => 'Le mappage provenu pour :port était invalide et ne pouvait pas être procédé.',
        'cidr_out_of_range' => 'La notation CIDR n\'autorise que les masques entre \25 et \32.',
        'port_out_of_range' => 'Les ports dans une allocation doivent être supérieurs à  1024 et inférieur ou égal à 65535.',
    ],
    'nest' => [
        'delete_has_servers' => 'A Nest with active servers attached to it cannot be deleted from the Panel.',
        'egg' => [
            'delete_has_servers' => 'Un Oeuf ayant des serveurs actifs attachés à lui ne peut pas être supprimé à partir du Panel.',
            'invalid_copy_id' => 'L\'Oeuf sélectionné afin de copier un script vers un autre n\existe pas, ou est en train de copier un script lui-même.',
            'must_be_child' => 'La directive "Copier de paramètres de" pour cet Oeuf doit être un enfant pour la ruche sélectionnée.',
            'has_children' => 'Cet Oeuf est parent d\'un ou plusieurs Oeufs. Supprimez ces Oeufs avant de supprimer cet Oeuf s\'il vous plaît.',
        ],
        'variables' => [
            'env_not_unique' => 'The environment variable :name must be unique to this Egg.',
            'reserved_name' => 'The environment variable :name is protected and cannot be assigned to a variable.',
            'bad_validation_rule' => 'The validation rule ":rule" is not a valid rule for this application.',
        ],
        'importer' => [
            'json_error' => 'There was an error while attempting to parse the JSON file: :error.',
            'file_error' => 'The JSON file provided was not valid.',
            'invalid_json_provided' => 'The JSON file provided is not in a format that can be recognized.',
        ],
    ],
    'packs' => [
        'delete_has_servers' => 'Cannot delete a pack that is attached to active servers.',
        'update_has_servers' => 'Cannot modify the associated option ID when servers are currently attached to a pack.',
        'invalid_upload' => 'The file provided does not appear to be valid.',
        'invalid_mime' => 'The file provided does not meet the required type :type',
        'unreadable' => 'The archive provided could not be opened by the server.',
        'zip_extraction' => 'An exception was encountered while attempting to extract the archive provided onto the server.',
        'invalid_archive_exception' => 'The pack archive provided appears to be missing a required archive.tar.gz or import.json file in the base directory.',
    ],
    'subusers' => [
        'editing_self' => 'Editing your own subuser account is not permitted.',
        'user_is_owner' => 'You cannot add the server owner as a subuser for this server.',
        'subuser_exists' => 'A user with that email address is already assigned as a subuser for this server.',
    ],
    'databases' => [
        'delete_has_databases' => 'Cannot delete a database host server that has active databases linked to it.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'The maximum interval time for a chained task is 15 minutes.',
    ],
    'locations' => [
        'has_nodes' => 'Cannot delete a location that has active nodes attached to it.',
    ],
    'users' => [
        'node_revocation_failed' => 'Failed to revoke keys on <a href=":link">Node #:node</a>. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'No nodes satisfying the requirements specified for automatic deployment could be found.',
        'no_viable_allocations' => 'No allocations satisfying the requirements for automatic deployment were found.',
    ],
    'api' => [
        'resource_not_found' => 'The requested resource does not exist on this server.',
    ],
];
