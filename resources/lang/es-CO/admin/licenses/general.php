<?php

return array(
    'about_licenses_title'      => 'Acerca de licencias',
    'about_licenses'            => 'Las licencias son para identificar software. Tienen un número específico de asientos que pueden ser asignados a individuos',
    'checkin'  					=> 'Quitar Instalación',
    'checkout_history'  		=> 'Historial Asignaciones',
    'checkout'  				=> 'Asignar Instalación',
    'edit'  					=> 'Editar Usuario',
    'filetype_info'				=> 'Tipos de archivos permitidos son png, gif, jpg, jpeg, doc, docx, pdf, txt, zip, y rar.',
    'clone'  					=> 'Clonar Usuario',
    'history_for'  				=> 'Historial para ',
    'in_out'  					=> 'Entrada/Salida',
    'info'  					=> 'Info Licencia',
    'license_seats'  			=> 'Num. Instalaciones',
    'seat'  					=> 'Instalación',
    'seats'  					=> 'Instalaciones',
    'software_licenses'  		=> 'Licencias Software',
    'user'  					=> 'Usuario',
    'view'  					=> 'Ver Licencias',
    'delete_disabled'           => 'Esta licencia no se puede eliminar aún porque algunos asientos todavía están retirados.',
    'bulk'                      =>
        [
            'checkin_all'           => [
                'button'            => 'Comprobar todos los asientos',
                'modal'             => 'Esto activará el checkin de un asiento. | Esta acción registrará todos los asientos :checkedout_seats_count para esta licencia.',
                'enabled_tooltip'   => 'Checkin TODOS los asientos para esta licencia tanto de usuarios como de activos',
                'disabled_tooltip'  => 'This is disabled because there are no seats currently checked out',
                'disabled_tooltip_reassignable'  => 'This is disabled because the License is not reassignable',
                'success'           => 'License successfully checked in! | All licenses were successfully checked in!',
                'log_msg'           => 'Checked in via bulk license checkout in license GUI',
            ],

            'checkout_all'              => [
                'button'                => 'Checkout All Seats',
                'modal'                 => 'This action will checkout one seat to the first available user. | This action will checkout all :available_seats_count seats to the first available users. A user is considered available for this seat if they do not already have this license checked out to them, and the Auto-Assign License property is enabled on their user account.',
                'enabled_tooltip'   => 'Checkout ALL seats (or as many as are available) to ALL users',
                'disabled_tooltip'  => 'This is disabled because there are no seats currently available',
                'success'           => 'License successfully checked out! | :count licenses were successfully checked out!',
                'error_no_seats'    => 'There are no remaining seats left for this license.',
                'warn_not_enough_seats'    => ':count users were assigned this license, but we ran out of available license seats.',
                'warn_no_avail_users'    => 'Nothing to do. There are no users who do not already have this license assigned to them.',
                'log_msg'           => 'Checked out via bulk license checkout in license GUI',


            ],
    ],
);
