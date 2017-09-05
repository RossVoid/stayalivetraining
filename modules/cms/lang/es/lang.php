<?php

return [
    'cms_object' => [
        'invalid_file' => 'Nombre inválido del archivo: :name. El nombre del archivo puede contener solo caracteres alfanuméricos, guiones bajos, barras y puntos. Algunos ejemplos de nombres correctos son: pagina.htm, pagina, subdirectorio/pagina',
        'invalid_property' => "La propiedad ':name' no se puede establecer",
        'file_already_exists' => "El archivo ':name' ya existe.",
        'error_saving' => "Error guardando archivo ':name'. Por favor, revisa los permisos de escritura.",
        'error_creating_directory' => 'Error creando el directorio :name. Por favor, revisa los permisos de escritura.',
        'invalid_file_extension' => 'Extensión de archivo inválida: :invalid. Las extensiones permitidas son: :allowed.',
        'error_deleting' => 'Error eliminando el archivo de plantilla ":name". Por favor, revisa los permisos de escritura.',
        'delete_success' => 'Las plantillas fueron eliminadas satisfactoriamente: :count.',
        'file_name_required' => 'El campo Nombre es obligatorio.',
        'safe_mode_enabled' => 'El modo seguro está activado actualmente.'
    ],
    'dashboard' => [
        'active_theme' => [
            'widget_title_default' => 'Sitio Web',
            'online' => 'en línea',
            'maintenance' => 'en mantenimiento',
            'manage_themes' => 'Gestionar temas',
            'customize_theme' => 'Personalizar tema'
        ]
    ],
    'theme' => [
        'not_found_name' => "El tema ':name' no se encuentra.",
        'active' => [
            'not_set' => 'El tema activo no se ha establecido.',
            'not_found' => 'El tema activo no se encuentra.'
        ],
        'edit' => [
            'not_set' => 'El tema de edición no se ha establecido.',
            'not_found' => 'El tema de edición no se encuentra.',
            'not_match' => 'El objeto que está intentando acceder no pertenece al tema que se está editando. Porfavor recarga la página.'
        ],
        'settings_menu' => 'Tema para el Front-end',
        'settings_menu_description' => 'Previsualiza la lista de temas instalados y selecciona un tema activo.',
        'default_tab' => 'Propiedades',
        'name_label' => 'Nombre',
        'name_create_placeholder' => 'Nombre del nuevo tema',
        'author_label' => 'Autor',
        'author_placeholder' => 'Nombre de la persona o empresa',
        'description_label' => 'Descripción',
        'description_placeholder' => 'Descripción del tema',
        'homepage_label' => 'Página de inicio',
        'homepage_placeholder' => 'URL de la web',
        'code_label' => 'Código',
        'code_placeholder' => 'Código único para el tema usado para su distribución',
        'preview_image_label' => 'Imagen de previsualización',
        'preview_image_placeholder' => 'La ruta de la imagen de previsualización del tema.',
        'dir_name_label' => 'Nombre del directorio',
        'dir_name_create_label' => 'El directorio de destino del tema',
        'theme_label' => 'Tema',
        'theme_title' => 'Temas',
        'activate_button' => 'Activar',
        'active_button' => 'Activar',
        'customize_theme' => 'Personalizar Tema',
        'customize_button' => 'Personalizar',
        'duplicate_button' => 'Duplicar',
        'duplicate_title' => 'Duplicar tema',
        'duplicate_theme_success' => 'Tema duplicado!',
        'manage_button' => 'Gestionar',
        'manage_title' => 'Gestionar tema',
        'edit_properties_title' => 'Tema',
        'edit_properties_button' => 'Editar propiedades',
        'save_properties' => 'Guardar propiedades',
        'import_button' => 'Importar',
        'import_title' => 'Importar tema',
        'import_theme_success' => 'Tema importado!',
        'import_uploaded_file' => 'Fichero de archivo de tema',
        'import_overwrite_label' => 'Sobreescribir archivos existentes',
        'import_overwrite_comment' => 'Desmarca esta casilla para importar sólo los archivos nuevos',
        'import_folders_label' => 'Carpetas',
        'import_folders_comment' => 'Por favor, selecciona las carpetas del tema que quieres importar',
        'export_button' => 'Exportar',
        'export_title' => 'Exportar tema',
        'export_folders_label' => 'Carpetas',
        'export_folders_comment' => 'Por favor, selecciona las carpetas del tema que quieres exportar',
        'delete_button' => 'Eliminar',
        'delete_confirm' => '¿Deseas eliminar este tema? Esta acción no se puede deshacer!',
        'delete_active_theme_failed' => 'No puedes eliminar el tema activo, intenta activar otro tema primero.',
        'delete_theme_success' => 'Tema eliminado!',
        'create_title' => 'Crear tema',
        'create_button' => 'Crear',
        'create_new_blank_theme' => 'Crear un tema en blanco',
        'create_theme_success' => 'Tema creado!',
        'create_theme_required_name' => 'Por favor, especifica un nombre para el tema.',
        'new_directory_name_label' => 'Directorio del tema',
        'new_directory_name_comment' => 'Introduce un nombre para el directorio del tema duplicado.',
        'dir_name_invalid' => 'El nombre sólo puede contener dígitos, letras latinas y los siguientes símbolos: _-',
        'dir_name_taken' => 'Este directorio ya existe.',
        'find_more_themes' => 'Buscar nuevos temas',
        'saving' => 'Guardando tema...',
        'return' => 'Volver a la lista de temas'
    ],
    'maintenance' => [
        'settings_menu' => 'Modo de mantenimiento',
        'settings_menu_description' => 'Configura la página del modo de mantenimiento y cambia su configuración',
        'is_enabled' => 'Activar el modo de mantenimiento',
        'is_enabled_comment' => 'Selecciona la página para mostrar cuando el modo de mantenimiento esté activado.',
        'hint' => 'El modo de mantenimiento mostrará la página de mantenimiento a los visitantes que no estén conectados en el área de back-end.'
    ],
    'page' => [
        'not_found_name' => "La página ':name' no se encuentra",
        'not_found' => [
            'label' => 'Página no encontrada',
            'help' => 'La página solicitada no se encuentra.'
        ],
        'custom_error' => [
            'label' => 'Error en la página',
            'help' => 'Lo sentimos, pero algo salió mal y la página no se puede mostrar.'
        ],
        'menu_label' => 'Páginas',
        'unsaved_label' => 'Página(s) sin guardar',
        'no_list_records' => 'No se encuentran páginas',
        'new' => 'Nueva página',
        'invalid_url' => 'Formato de URL incorrecto. La URL debe empezar con el símbolo de barra diagonal y puede contener dígitos, letras latinas y los siguientes símbolos: ._-[]:?|/+*^$',
        'delete_confirm_multiple' => '¿Deseas eliminar las páginas seleccionadas?',
        'delete_confirm_single' => '¿Deseas eliminar esta página?',
        'no_layout' => '-- sin diseño --',
        'cms_page' => 'Página de CMS',
        'title' => 'Título de página',
        'url' => 'URL de página',
        'file_name' => 'Nombre de archivo de página'
    ],
    'layout' => [
        'not_found_name' => "El diseño ':name' no se encuentra",
        'menu_label' => 'Diseños',
        'unsaved_label' => 'Diseño(s) sin guardar',
        'no_list_records' => 'No se encuentran diseños',
        'new' => 'Nuevo diseño',
        'delete_confirm_multiple' => '¿Deseas eliminar los diseños seleccionados?',
        'delete_confirm_single' => '¿Deseas eliminar este diseño?'
    ],
    'partial' => [
        'not_found_name' => "El nombre de parcial ':name' no se encuentra.",
        'invalid_name' => 'Nombre de parcial inválido: :name.',
        'menu_label' => 'Parciales',
        'unsaved_label' => 'Parcial(es) sin guardar',
        'no_list_records' => 'No se encontraron parciales',
        'delete_confirm_multiple' => '¿Deseas eliminar los parciales seleccionados?',
        'delete_confirm_single' => '¿Deseas eliminar este parcial?',
        'new' => 'Nuevo parcial'
    ],
    'content' => [
        'not_found_name' => "El archivo de contenido ':name' no se encuentra.",
        'menu_label' => 'Contenido',
        'unsaved_label' => 'Contenido sin guardar',
        'no_list_records' => 'No se encuentran archivos de contenido',
        'delete_confirm_multiple' => '¿Deseas eliminar los archivos o directorios de contenido seleccionados?',
        'delete_confirm_single' => '¿Deseas eliminar este archivo de contenido?',
        'new' => 'Nuevo archivo de contenido'
    ],
    'ajax_handler' => [
        'invalid_name' => 'Manejador de AJAX inválido: :name.',
        'not_found' => "El manejador de AJAX ':name' no se encuentra."
    ],
    'cms' => [
        'menu_label' => 'CMS'
    ],
    'sidebar' => [
        'add' => 'Agregar',
        'search' => 'Buscar...'
    ],
    'editor' => [
        'settings' => 'Configuración',
        'title' => 'Título',
        'new_title' => 'Título de la nueva página',
        'url' => 'URL',
        'filename' => 'Nombre del archivo',
        'layout' => 'Diseño',
        'description' => 'Descripción',
        'preview' => 'Vista previa',
        'meta' => 'Meta',
        'meta_title' => 'Meta Título',
        'meta_description' => 'Meta Descripción',
        'markup' => 'Marcado',
        'code' => 'Código',
        'content' => 'Contenido',
        'hidden' => 'Oculto',
        'hidden_comment' => 'Las páginas ocultas sólo son accesibles por los usuarios que han iniciado sesión en el back-end.',
        'enter_fullscreen' => 'Abrir en pantalla completa',
        'exit_fullscreen' => 'Salir de pantalla completa',
        'open_searchbox' => 'Abrir caja de búsqueda',
        'close_searchbox' => 'Cerrar caja de búsqueda',
        'open_replacebox' => 'Abrir caja de reemplazo',
        'close_replacebox'  => 'Cerrar caja de reemplazo'
    ],
    'asset' => [
        'menu_label' => 'Recursos',
        'unsaved_label' => 'Recurso(s) sin guardar',
        'drop_down_add_title' => 'Añadir...',
        'drop_down_operation_title' => 'Acción...',
        'upload_files' => 'Subir archivo(s)',
        'create_file' => 'Crear archivo',
        'create_directory' => 'Crear directorio',
        'directory_popup_title' => 'Nuevo directorio',
        'directory_name' => 'Nombre del directorio',
        'rename' => 'Renombrar',
        'delete' => 'Borrar',
        'move' => 'Mover',
        'select' => 'Seleccionar',
        'new' => 'Nuevo archivo',
        'rename_popup_title' => 'Renombrar',
        'rename_new_name' => 'Nuevo nombre',
        'invalid_path' => 'La ruta sólo puede contener dígitos, letras, espacios y los símbolos siguientes: ._-/',
        'error_deleting_file' => 'Error al borrar el archivo :name.',
        'error_deleting_dir_not_empty' => 'Error borrando el directorio :name. El directorio no está vacío.',
        'error_deleting_dir' => 'Error borrando el archivo :name.',
        'invalid_name' => 'El nombre sólo puede contener dígitos, letras, espacios y los símbolos siguientes: ._-',
        'original_not_found' => 'El archivo o directorio original no se encuentra',
        'already_exists' => 'Un archivo o directorio con este nombre ya existe',
        'error_renaming' => 'Error renombrando el archivo o directorio',
        'name_cant_be_empty' => 'El nombre no puede estar vacío',
        'too_large' => 'El archivo subido es demasiado grande. El tamaño máximo permitido es :max_size',
        'type_not_allowed' => 'Sólo los siguientes tipos de archivos están permitidos: :allowed_types',
        'file_not_valid' => 'El archivo no es válido',
        'error_uploading_file' => 'Error subiendo el archivo ":name": :error',
        'move_please_select' => 'por favor seleccionar',
        'move_destination' => 'Directorio de destino',
        'move_popup_title' => 'Mover recursos',
        'move_button' => 'Mover',
        'selected_files_not_found' => 'Los archivos seleccionados no se encuentran',
        'select_destination_dir' => 'Por favor seleccione un directorio de destino',
        'destination_not_found' => 'El directorio de destino no se encuentra',
        'error_moving_file' => 'Error moviendo el archivo :file',
        'error_moving_directory' => 'Error moviendo el directorio :dir',
        'error_deleting_directory' => 'Error borrando el directorio original :dir',
        'no_list_records' => 'No se encontraron archivos',
        'delete_confirm' => '¿Deseas eliminar los archivos o directorios seleccionados?',
        'path' => 'Ruta'
    ],
    'component' => [
        'menu_label' => 'Componentes',
        'unnamed' => 'Sin nombre',
        'no_description' => 'No se proporcionó descripción',
        'alias' => 'Alias',
        'alias_description' => 'Un nombre único asignado a este componente cuando se utilice en el código de la página o del diseño.',
        'validation_message' => 'El alias de componente es requerido y puede contener solamente letras, números y guión bajo. El alias debe empezar con una letra.',
        'invalid_request' => 'La plantilla no puede ser guardada porque tiene datos de componente inválidos.',
        'no_records' => 'No se encontraron componentes',
        'not_found' => "El componente ':name' no se encuentra.",
        'method_not_found' => "El componente ':name' no contiene un método ':method'."
    ],
    'template' => [
        'invalid_type' => 'Tipo de plantilla desconocido.',
        'not_found' => 'No se encontró la plantilla.',
        'saved' => 'La plantilla se guardó correctamente.',
        'no_list_records' => 'No se encontraron registros',
        'delete_confirm' => '¿Deseas eliminar las plantillas seleccionadas?',
        'order_by' => 'Ordenar por'
    ],
    'permissions' => [
        'name' => 'CMS',
        'manage_content' => 'Gestionar archivos de contenido del sitio',
        'manage_assets' => 'Gestionar recursos del sitio - imágenes, archivos JavasCript, archivos CSS',
        'manage_pages' => 'Crear, modificar y eliminar páginas del sitio',
        'manage_layouts' => 'Crear, modificar y eliminar diseños del CMS',
        'manage_partials' => 'Crear, modificar y eliminar parciales del CMS',
        'manage_themes' => 'Activar, desactivar y configurar temas del CMS',
        'manage_media' => 'Subir y gestionar contenidos multimedia - imágenes, vídeos, sonidos y documentos'		
    ],
    'mediafinder' => [
        'label' => 'Buscador de multimedia',
        'default_prompt' => 'Haga clic en el botón %s para buscar un elemento multimedia',
    ],
    'media' => [
        'invalid_path' => "Ruta de archivo especificada no válida: ':path'.",
        'menu_label' => 'Media',
        'upload' => 'Subir',
        'move' => 'Mover',
        'delete' => 'Eliminar',
        'add_folder' => 'Nueva carpeta',
        'search' => 'Buscar',
        'display' => 'Mostrar',
        'filter_everything' => 'Todo',
        'filter_images' => 'Imágenes',
        'filter_video' => 'Vídeo',
        'filter_audio' => 'Audio',
        'filter_documents' => 'Documentos',
        'library' => 'Biblioteca',
        'folder_size_items' => 'elemento(s)',
        'size' => 'Tamaño',
        'title' => 'Título',
        'last_modified' => 'Última modificación',
        'public_url' => 'URL pública',
        'click_here' => 'Haz click aquí',
        'thumbnail_error' => 'Error generando la miniatura.',
        'return_to_parent' => 'Volver a la carpeta anterior',
        'return_to_parent_label' => 'Atrás ..',
        'nothing_selected' => 'No se ha seleccionado nada.',
        'multiple_selected' => 'Se han seleccionado varios elementos.',
        'uploading_file_num' => 'Subiendo :number archivo(s)...',
        'uploading_complete' => 'Subida completada',
        'uploading_error' => 'Error al subir',
        'type_blocked' => 'El tipo de archivo usado ha sido bloqueado por motivos de seguridad.',
        'order_by' => 'Ordenar por',
        'folder' => 'Carpeta',
        'no_files_found' => 'No se han encontrado archivos.',
        'delete_empty' => 'Por favor, selecciona los elementos que quieres eliminar.',
        'delete_confirm' => '¿Deseas eliminar los elementos seleccionados?',
        'error_renaming_file' => 'Error al renombrar el elemento.',
        'new_folder_title' => 'Nueva carpeta',
        'folder_name' => 'Nombre de la carpeta',
        'error_creating_folder' => 'Error al crear la carpeta',
        'folder_or_file_exist' => 'Ya existe un archivo o carpeta con este nombre.',
        'move_empty' => 'Por favor, selecciona los elementos que quieres mover.',
        'move_popup_title' => 'Mover archivos o carpetas',
        'move_destination' => 'Carpeta de destino',
        'please_select_move_dest' => 'Por favor, selecciona una carpeta de destino.',
        'move_dest_src_match' => 'Por favor, selecciona otra carpeta de destino.',
        'empty_library' => 'La biblioteca de medios está vacía. Sube archivos o crea carpetas para empezar.',
        'insert' => 'Insertar',
        'crop_and_insert' => 'Cortar e insertar',
        'select_single_image' => 'Por favor, selecciona sólo una imagen.',
        'selection_not_image' => 'El elemento seleccionado no es una imagen.',
        'restore' => 'Deshacer todos los cambios',
        'resize' => 'Redimensionar...',
        'selection_mode_normal' => 'Normal',
        'selection_mode_fixed_ratio' => 'Aspecto fijo',
        'selection_mode_fixed_size' => 'Tamaño fijo',
        'height' => 'Alto',
        'width' => 'Ancho',
        'selection_mode' => 'Modo de selección',
        'resize_image' => 'Redimensionar imagen',
        'image_size' => 'Tamaño de la imagen:',
        'selected_size' => 'Selección:'
    ],
    'theme_log' => [
        'hint' => 'Este registro muestra todos los cambios hechos al tema por los administradores en el área de back-end.',
        'menu_label' => 'Registro del tema',
        'menu_description' => 'Ver cambios hechos al tema activo.',
        'empty_link' => 'Registro del tema vacío',
        'empty_loading' => 'Vaciando registro del tema...',
        'empty_success' => 'Registro del tema vaciado',
        'return_link' => 'Volver al registro del tema',
        'id' => 'ID',
        'id_label' => 'ID de registro',
        'created_at' => 'Fecha y hora',
        'user' => 'Usuario',
        'type' => 'Tipo',
        'type_create' => 'Crear',
        'type_update' => 'Modificar',
        'type_delete' => 'Eliminar',
        'theme_name' => 'Tema',
        'theme_code' => 'Código de tema',
        'old_template' => 'Plantilla (Antigua)',
        'new_template' => 'Plantilla (Nueva)',
        'template' => 'Plantilla',
        'diff' => 'Cambios',
        'old_value' => 'Valor antiguo',
        'new_value' => 'Valor nuevo',
        'preview_title' => 'Cambios de la plantilla',
        'template_updated' => 'La plantilla se modificó',
        'template_created' => 'La plantilla se creó',
        'template_deleted' => 'La plantilla se eliminó',
    ],
];
