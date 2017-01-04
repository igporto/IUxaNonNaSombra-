<?php
$strings = array(
	//General Strings in English (LOGIN_view, USER_EDIT_model, USER_model, connectDB_model)
	'' => 'Undefined Index',
	'good_insert' => 'Insert sucessfull',
	'user_exists' => 'User already exists in DataBase',
	'database_connection_failure' => 'It is not possible to connect to the database',
	'back' => 'Back',
	'database_consult_errors' => 'Database consult error',
	'deletion' => 'Deletion sucessful',
	'user_doesnt_exists' => 'User not exists',
	'user_modified' => 'User modified',
	'user_modified_error' => 'User\'s modification error',
	'pass' => 'Password',
	'pass_error' => 'Password does not match user entered',
	'users_date_birht' => 'User\'s birth date',
	'username' => 'User',
	'user' => 'User\'s name',
	'usersurname' => 'User\'s surname',
	'useremail' => 'User\'s email',
	'client' => 'Client\'s name',
	'insert' => 'Insert',
	'modify' => 'Modify',
	'delete' => 'Delete',
	'consult' => 'Consult',
	'update' => 'Update',
	'pass_user_error' => 'Incorrect Password',
	'user_search_error' => 'User\'s Search Error',
	'empty_error' => 'Fields must not be empty',
	'insert_error' => 'Insert Error',
	'database_access_error' => 'Database Access Error',

	/*USER_ADD_view, MANAGE_USER_view, ADMIN_view, USER_SEARCH_view,
	 USER_SHOW_view, USER_VIEW_view Strings */
	'student' => 'Student',
	'students' => 'Students',
	'list_of' => 'List of',
	'filler' => 'Filler',
	'permissions' => 'Permissions',
	'actions' => 'Actions',
	'clients' => 'Clients',
	'client' => 'Client',
	'management_profiles' => 'Profiles Management',
	'management_permissions' => 'Permissions Management',
	'management_students' => 'Students Permissions',
	'management_actions' => 'Action Management',
	'management_controllers' => 'Controller Management',
	'management_users' => 'User Management',
	'management_clients' => 'Client Management',
	'users' => 'Users',
	'create_user' => 'Add User',
    'create_client' => 'Add Client',
	'create_profile' => 'Add Profile',
	'create_controller' => 'Add Controller',
	'create_action' => 'Add Action',
    'create_permission' => 'Add Permission',

	'management_user' => 'Manage User',
	'dni' => 'DNI',
	'name' => 'Name',
	'surname' => 'Surname',
	'birthdate' => 'Birth date',
	'address' => 'Address',
	'email' => 'Email',
	'phone' => 'Phone',
	'hour_in' => 'Hour of Entrance',
	'hour_out' => 'Hour of Exit',
	'bank_account' => 'Bank Acount',
	'usertype' => 'User Type',
	'admin' => 'Administrator',
	'instructor' => 'Instructor',
	'secretary' => 'Secretary',
	'other' => 'Other',
	'extra_hours' => 'Extra Hours',
	'contract_type' => 'Contratc Type',
	'employer_profile_photo' => 'Employer Profile Photo',
	'personal_comment' => 'Personal Comment',
	'user_find' => 'User Find',
	'find' => 'Find',
	'profile_type' =>'Profile Type',
	'user_profile' => 'User\'s Profile',
	'settings' => 'Settings',
	'close_session' => 'Close Session',
	'home' => 'Home',
	'calendar' => 'Calendar',
	'assist_control' => 'Assist Control',
	'management_info' => 'Management Info',
	'employer_data' => 'Employer Data',
	'up' => 'Up',
	'users_list' => 'Users List',
	'profile' => 'Profile',
	'rol' => 'Rol',
	'edit' => 'Edit',
	'all_alerts' => 'Show All Alerts',
	'user_info' => 'User Info',
	'client_info' => 'Client Info',
    'action_info' => 'Action Info',
	'profile_info' => 'Profile Info',
	'controller_info' => 'Controller Info',
	//LOGIN_controller, USER_controller, logout Strings
	'error' => 'Error',
	'employer_not_exists' => 'Employer doesn\'t exists',
	'try_again' => 'Try Again',
	'add' => 'Add',
	'edit' => 'Edit',
	'show' => 'Show',
	'view' => 'View',
	'search' => 'Search',
	'action_not_especified' => 'Action not especified',
	'user_insert' => 'User Insert',
	'access_dc' => 'Access Database',
	'error_logout' => 'An error was happened and it is impossible to logout',
	'ACTION' => 'Actions',
	'CONTROLLER' => 'Controllers',
	'PERMISSION'=> 'Permissions',
	'PROFILE' => 'Profiles',
	'USER' => 'Users',
	'CLIENT' => 'Clients',
	'ADD' => 'Add',
	'DELETE' => 'Delete',
	'EDIT' => 'Edit',
	'VIEW' => 'View',
	'SHOW' => 'Show',
	'ACTIVITY' => 'Activities',
	'SCHEDULE'=>'Schedules',
	'manage' => 'Manage',
	'clean' => 'Clean',
	'white' => 'Blanks in some field',
	'name' => 'Name',
	'edit_good' => 'Changes were succesfull',
	'edit_error' => 'Error á hora  de editar',
	'add_profile' => 'Add a New Profile',
	'edit_error' => 'Error on edit',
	'confirm_message' => 'Are you sure you want to delete  ',
	'deletion_error' => 'Deletion error',
	'controller_exists' => 'The controller exists in the DB',
	'succesfull_changes' => 'Changes in the right place',
	'cannot_delete_user' => 'You cannot delete this user',
	'cannot_modify_user' => 'You cannot modify this user',
	'assigned_action' => 'Assigned actions',
	'own_permis' => 'User\'s own permissions',
    'action_modify' => 'Modify Action',
    'controller_modify'=>'Modify Controller',
    'user_modify' => 'Modificar Usuario',
	'profile_modify' => 'Modificar Perfil',
    'client_modify' => 'Modificar Cliente',
	'action_exists' => 'The chosen name already exists in the system',
	'newpass' => 'New_Password',
	'newname' => 'New_name',
	'newdni' => 'New_dni',
	'newsurname' => 'New_surname',
	'newphone' => 'New_phone',
	'newemail' => 'New_email',
	'not_edit_perm' => 'Permissions for the selected profile can not be modified',
	'perm_over_controller' => 'Permissions on controller actions',
	'no_user_permissions' => 'This user doesn´t have permissions by himself',
	'no_profile_permissions' => 'This profile perfil doesn´t have permissions',
	'cancel'=>'Cancel',
	'user_data'=>'User data',
	'action_data'=>'Action data',
	'profile_perms' => 'Profile Permissions',
	'user_perms' => 'User Permissions',
	'controller_data'=>'Controller data',
	'profile_data'=>'Profile data',
	'permission_data'=>'Datos del Permiso',
	'client_data' => 'Datos del cliente',
	'controller_edit'=>'Edit controller',
	'edit_profile' => 'Edit profile',
	'no_profile' => "Without profile",
	'no_controller' => "Sin controlador",
	'one_controller' => 'Controller',
	'one_action' => 'Action',
	'STUDENT'=>'Students',
	'no_actions_to_do' => 'No action can be taken',
	'coduser' => 'User_Code',
	'codaction' => 'Action_Code',
	'refresh_filter' => 'Dismiss filter',
	'okay' => 'Okay',
	'max_length'=> 'Maximum length',
	'no_white_spaces'=>'Cannot have white spaces',
	'code'=>'Code',
	'user_has_all_permissions'=>'This user has allways every permission',
	'profile_has_all_permissions'=>'This profile has allways every permission',
	'use_q'=>'Use?',   
	
	/*ESPAZOS*/
	'SPACE' => 'Spaces',
	'space_info' => 'Space information',
	'management_spaces' => 'Spaces Management',
	'SPACES_ID' => 'Spaces ID',
	'space_id' => 'Space´s ID',
	'aforo' => 'Capacity',
	'description' => 'Description',
	'succ_space_add' => 'Success space add',
	'space_already_exists' => 'Space already exists',
	'create_space' => 'Create Space',
	'number_a' => 'Enter a numeric value for capacity',
	'number_i' => 'Enter a numeric value for id',
	'succ_space_mod' => 'Space modified successfully',
	'space_edit' => 'Edit space',
	'succ_space_delete' => 'Success delete',
	'spaces_data' => 'Space data',
	'use_q'=>'Use?',

	/*NOTIFICACIÓNS*/

		/*SUCCES*/
		'succ_title'=>'Correct',
		'succ_login'=>'You are logged in!',
		'succ_user_add'=>'User properly created',
		'succ_user_delete'=>'User properly deleted',

		'succ_perm_add'=>'Permission properly created',
		'succ_perm_search'=>'Permissions properly filtered',
		'succ_perm_delete'=>'Permission properly deleted',

		'succ_action_add'=>'Action properly created',
		'succ_action_delete'=>'Action properly deleted',
		'succ_action_edit'=>'Action properly edited',
		'succ_action_search'=>'Actions properly filtered',

		'succ_controller_add'=>'Controller properly created',
		'succ_controller_delete'=>'Controller properly deleted',
		'succ_controller_edit'=>'Controller properly edited',
		'succ_controller_search'=>'Controllers properly filtered',

		'succ_profile_add'=>'Profile properly created',
		'succ_profile_delete'=>'Profile properly deleted',
		'succ_profile_edit'=>'Profile properly edited',

		'succ_client_add'=>'Client properly created',
		'succ_client_search'=>'Client properly filtered',
		'succ_client_delete'=>'Client properly deleted',

		'succ_service_add'=>'Client properly created',
		'succ_service_search'=>'Client properly filtered',
		'succ_service_delete'=>'Client properly deleted',

		'succ_category_add'=>'Category properly created',
		'succ_category_delete'=>'Category properly deleted',
		'succ_category_edit'=>'Category properly edited',

    	'succ_activity_add'=>'Activity properly created',
		'succ_activity_delete'=>'Activity properly deleted',
		'succ_activity_edit'=>'Activity properly edited',

		'succ_discount_add'=>'Discount properly created',
		'succ_discount_delete'=>'Discount properly deleted',
		'succ_discount_edit'=>'Discount properly edited',

		'succ_employee_add'=>'Employee properly created',
		'succ_employee_delete'=>'Employee properly deleted',
		'succ_employee_edit'=>'Employee properly edited',



	/*FAIL*/
		'fail_title'=>'Fail',
		'fail_user_exists'=>"User already exists",
		'fail_action_exists'=>'Action already exists',
		'fail_controller_exists'=>"Controller already exists",
		'fail_client_exists'=>"Client already exists",
		'fail_profile_exists'=>"Profile already exists",
		'fail_category_exists'=>"Category already exits",
		'fail_category_exists'=>"Category already exits",
    	'fail_activity_exists'=>"Activity already exits",
   	 	'fail_aforo_incorrect'=>'Capacity can´t be less than 1',
    	'fail_discount_incorrect'=>'Discount is not valid',
    	'fail_discount_exists' => 'Discount already exits',
    	'fail_aforo_fail'=>'the capacity of the classroom is less than the activity',
		'fail_dni_exists'=>'There is already an employee with that DNI',
		'fail_dni_incorrect'=>'DNI is not valid',
		'fail_email_incorrect'=>'email is not valid',
    	'fail_birthdate_incorrect' => 'Birth Date is not valid',

		/*ERROR*/
		'erro_title'=>'Error',
		'erro_not_implemented'=>'Not implemented yet',
		'erro_no_add' => 'There is nothing to add',
		'erro_general'=>'An error ocurred',

		/*INFO*/
    'info_title' => 'Information',

    /* Gestion de Pagos, Facturas y Domiciliaciones */

    'PAYMENT' => 'Payments',
    'BILL' => 'Bills',
    'DOMICILIATION' => 'Domiciliations',

	/* Servicios */
	'SERVICE' => 'Services',
	'service_info' => 'Service Info',
	'management_services' => 'Services Management',
	'date' => 'Date',
	'cost' => 'Cost',
	'description' => 'Description',
	'create_service' => 'Create Service',
	'service_data' => 'Service Data',
	'service_modify' => 'Modify Service',


	/* Horario */
	'management_schedules'=>'Schedule Management',

	/* Categorias */
	'CATEGORY' => 'Categories',
 	'create_category' => 'Add Category',
	'category_modify' => 'Modify Category',
	'category_data'=>'Category data',
	'management_categories' => 'Categories Management',

	/* Actividades */
    'ACTIVITY' => 'Activities',
    'create_activity' => 'Add Activity',
    'activity_modify' => 'Modify Activity',
    'activity_data'=>'Activity Data',
    'management_activities' => 'Activities Management',
    'discount' => 'Discount',
    'one_category' => 'Category',
    'one_space' => 'Space',
    'monitor' => 'Monitor',
    'color'=>'Color',
    'no_monitor'=> 'Without Monitor',
    'no_discount'=>'Without Discount',
    'no_category'=>'Without Category',
    'no_space'=>'Without Space',

    /*Descontos*/
    'DISCOUNT' => 'Discounts',
    'management_discounts'=>'Discounts Management',
    'discount_data'=>'Discount Data',
    'discount_type' => 'Type of Discount',
	'create_discount' => 'Add Discount',
    'discount_modify' => 'Modify Discount',

    /*Empleados*/
    'EMPLOYEE' => 'Employees',
    'management_employees'=>'Employees Management',
    'employee_data'=>'Employee Data',
    'employee_user' => 'User',
    'create_employee' => 'Add Employee',
    'employee_modify' => 'Modify Employee',
    'no_user'=>'Without User',


)
?>
