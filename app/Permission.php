<?php

namespace App;

class Permission extends \Spatie\Permission\Models\Permission
{
    public static function defaultPermissions()
    {
        return [
            'view_users',
            'add_users',
            'edit_users',
            'delete_users',

            'view_roles',
            'add_roles',
            'edit_roles',
            'delete_roles',

            'view_posts',
            'add_posts',
            'edit_posts',
            'delete_posts',

            'view_categories',
            'add_categories',
            'edit_categories',
            'delete_categories',
            

            'view_produits',
            'add_produits',
            'edit_produits',
            'delete_produits',

            'view_clients',
            'add_clients',
            'edit_clients',
            'delete_clients',

            'view_factures',
            'add_factures',
            'edit_factures',
            'delete_factures',

            'view_tickets',
            'add_tickets',
            'edit_tickets',
            'delete_tickets',

            'view_reservations',
            'add_reservations',
            'edit_reservations',
            'delete_reservations',

            'view_equipements',
            'add_equipements',
            'edit_equipements',
            'delete_equipements',

            'view_services',
            'add_services',
            'edit_services',
            'delete_services',


            'view_plannings',
            'add_plannings',
            'edit_plannings',
            'delete_plannings',

            'view_fournisseurs',
            'add_fournisseurs',
            'edit_fournisseurs',
            'delete_fournisseurs',


            'view_stocks',
            'add_stocks',
            'edit_stocks',
            'delete_stocks',

            'view_organisations',
            'add_organisations',
            'edit_organisations',
            'delete_organisations',

            'view_commandes',
            'add_commandes',
            'edit_commandes',
            'delete_commandes',


            'view_services',
            'add_services',
            'edit_services',
            'delete_services',
            

        ];
    }
}
