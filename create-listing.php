<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo $_SESSION['csrf_token']; ?>">
    <title>Crear Anuncio - Trestiq Marketplace</title>

 <!-- Bootstrap CSS -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    
    <style>

      
/* Estilos corporativos para Trestiq Marketplace */
:root {
--primary: #2c55a5;
--primary-light: #3c6dd0;
--primary-dark: #1a407a;
--secondary: #4b9dd1;
--success: #28a745;
--warning: #ffc107;
--danger: #dc3545;
--light: #f8f9fa;
--dark: #343a40;
--gray: #6c757d;
--gray-light: #e9ecef;
--white: #ffffff;
--black: #000000;
--font-main: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
--box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
--box-shadow-lg: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
--border-radius: 0.25rem;
--transition: all 0.2s ease-in-out;
}

/* Reset y estilos generales */
body {
font-family: var(--font-main);
color: var(--dark);
background-color: #f7f9fc;
line-height: 1.6;
}

h1, h2, h3, h4, h5, h6 {
font-weight: 600;
color: var(--dark);
}

/* Navegación */
.navbar {
border-bottom: 1px solid rgba(0,0,0,0.08);
box-shadow: var(--box-shadow);
background-color: var(--white);
}

/* Contenedor principal limitado - CLAVE PARA ARREGLAR EL ANCHO */
.container-fluid {
max-width: 1200px;
margin: 0 auto;
padding-left: 20px;
padding-right: 20px;
}

/* IMPORTANTE: Limitar el ancho del formulario */
.col-lg-8 {
max-width: 800px;
margin: 0 auto;
}

/* Mejoras para tarjetas */
.card {
border: none;
border-radius: var(--border-radius);
box-shadow: var(--box-shadow);
transition: var(--transition);
margin-bottom: 1.5rem;
background-color: var(--white);
}

.card:hover {
box-shadow: var(--box-shadow-lg);
}

.card-header {
background-color: var(--white);
border-bottom: 1px solid var(--gray-light);
padding: 1rem 1.25rem;
font-weight: 600;
}

.card-body {
padding: 1.5rem;
}

/* NUEVA SECCIÓN: Agrupar secciones relacionadas */
.metrics-group {
border: 1px solid var(--gray-light);
border-radius: 8px;
padding: 1.5rem;
margin-bottom: 2rem;
background-color: white;
box-shadow: var(--box-shadow);
transition: var(--transition);
}

.metrics-group:hover {
box-shadow: var(--box-shadow-lg);
}

.metrics-group-title {
display: flex;
align-items: center;
font-size: 1.1rem;
color: var(--primary);
font-weight: 600;
margin-bottom: 1.5rem;
padding-bottom: 0.75rem;
border-bottom: 2px solid var(--primary-light);
}

.metrics-group-title i {
margin-right: 10px;
color: var(--primary);
}

/* Secciones del formulario mejoradas */
.section-card {
background-color: var(--white);
border-radius: 8px;
padding: 1.5rem;
margin-bottom: 1.5rem;
border-left: 4px solid var(--primary);
box-shadow: 0 4px 15px rgba(0,0,0,0.03);
transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.section-card:hover {
transform: translateY(-2px);
box-shadow: 0 6px 20px rgba(0,0,0,0.06);
}

/* Títulos de sección mejorados */
.section-title {
font-weight: 600;
color: var(--primary);
margin-bottom: 1.25rem;
padding-bottom: 0.75rem;
border-bottom: 1px solid var(--gray-light);
display: flex;
align-items: center;
font-size: 1.15rem;
}

.section-title i {
margin-right: 10px;
color: var(--primary);
}

/* Campos de formulario mejorados */
.form-group {
margin-bottom: 2.5rem;
position: relative;
}

.form-group label {
font-weight: 500;
margin-bottom: 0.5rem;
color: var(--dark);
display: block;
font-size: 0.95rem;
}

.form-control {
border: 1px solid #e4e6ef;
border-radius: 6px;
padding: 0.85rem 1rem;
transition: all 0.2s ease-in-out;
background-color: #f9fafc;
width: 100%;
font-size: 0.95rem;
height: 50px; /* Altura fija para todos los inputs */
}

.form-control:focus {
border-color: var(--primary-light);
box-shadow: 0 0 0 0.25rem rgba(44, 85, 165, 0.15);
background-color: var(--white);
}

.form-control:hover {
border-color: var(--primary-light);
background-color: #f5f7fc;
}

.form-control::placeholder {
color: #adb5bd;
opacity: 0.8;
}

/* Regla específica para textareas */
textarea.form-control {
min-height: 150px; /* Aumentar altura para área de descripción */
height: auto;
resize: vertical; /* Permitir al usuario ajustar si es necesario */
}

/* Mantener el estilo de validación original */
.validation-message {
display: none; /* Evitar mensajes duplicados de validación */
}

/* Mostrar solo el contador de caracteres */
.character-counter {
display: block; /* Asegurar que el contador siga visible */
}


/* MEJORADO: Input groups con mejor alineación */
.input-group {
position: relative;
display: flex;
flex-wrap: nowrap;
align-items: center; /* Cambiado de stretch a center */
width: 100%;
margin-bottom: 0.25rem;
}

/* MEJORADO: Estilo consistente para el input-group-text con símbolos */
.input-group-text {
background-color: #f1f3f9;
border: 1px solid #e4e6ef;
display: flex;
align-items: center;
justify-content: center;
min-width: 42px;
height: 46px; /* Altura fija igual a los inputs */
padding: 0 12px; /* Cambiado para ser más preciso */
border-radius: 6px 0 0 6px;
font-size: 0.9rem;
font-weight: 500;
color: var(--primary);
line-height: 1; /* Añadido para mejor alineación */
}

/* Asegurar que el símbolo esté bien centrado */
.input-group-text i,
.input-group-text span {
display: flex;
align-items: center;
justify-content: center;
width: 100%;
font-size: 0.85rem;
}

/* Si hay texto junto al icono, añadir margen específico */
.input-group-text i + span {
margin-left: 8px;
}

/* MEJORADO: Asegurar que el form-control en input-group se expande correctamente */
.input-group > .form-control {
position: relative;
flex: 1 1 auto;
width: 1%;
min-width: 0;
margin-bottom: 0;
border-top-left-radius: 0;
border-bottom-left-radius: 0;
height: 46px; /* Añadido para asegurar altura consistente */
line-height: 46px; /* Añadido para mejor alineación */
}

/* Estilo específico para el símbolo de moneda */
.simbolo-moneda {
display: flex;
align-items: center;
justify-content: center;
padding: 0 12px;
font-weight: 500;
height: 46px;
line-height: 1;
}

/* MEJORADO: Ajuste específico para campos de precio */
input[type="number"].form-control.precio {
height: 46px;
padding-top: 0;
padding-bottom: 0;
padding-right: 15px; /* Aumentado de 10px */
padding-left: 10px; /* Añadido para más espacio */
box-sizing: border-box;
text-align: right;
width: 100%; /* Asegurar que ocupe todo el espacio disponible */
}


/* MEJORADO: Específicamente para inputs de tipo date y number */
input.form-control[type="date"],
input.form-control[type="number"] {
min-height: 46px; /* Altura consistente */
padding-right: 10px;
flex: 1;
display: block;
width: 100%;
}

/* NUEVA SECCIÓN: Mejorar la visualización de indicadores de validación */
.valid-indicator {
display: flex;
align-items: center;
font-size: 0.85rem;
color: var(--success);
margin-top: 0.5rem;
}

.valid-indicator i {
margin-right: 5px;
}

/* CORRECCIÓN: Unificar estilos de validación y contadores de caracteres */
.character-counter {
font-size: 0.8rem;
color: var(--gray);
margin-top: 0.25rem;
display: flex;
align-items: center;
justify-content: space-between;
}

.character-counter .current {
font-weight: 500;
}

.character-counter .limit {
opacity: 0.8;
}

.validation-message {
font-size: 0.85rem;
margin-top: 0.4rem;
padding-left: 0.25rem;
border-left: 2px solid;
}

.validation-message.error {
color: var(--danger);
border-color: var(--danger);
}

.validation-message.warning {
color: var(--warning);
border-color: var(--warning);
}

.validation-message.success {
color: var(--success);
border-color: var(--success);
}

.validation-message.info {
color: var(--primary);
border-color: var(--primary);
}

.validation-help {
font-size: 0.8rem;
color: var(--gray);
margin-top: 0.25rem;
font-style: italic;
}

/* Badges y progress */
.badge {
padding: 0.5rem 0.75rem;
font-weight: 500;
border-radius: 4px;
}

.badge-primary {
background-color: var(--primary);
color: var(--white);
}

.badge-light {
background-color: var(--gray-light);
color: var(--gray);
}

.badge-warning {
background-color: var(--warning);
color: var(--dark);
}

.step-badge {
transition: var(--transition);
cursor: pointer;
}

.progress {
height: 0.5rem;
background-color: var(--gray-light);
border-radius: var(--border-radius);
margin-bottom: 1.5rem;
overflow: hidden;
}

.progress-bar {
background-color: var(--primary);
transition: width 0.6s ease;
}

/* Botones mejorados */
.btn {
padding: 0.65rem 1.5rem;
font-weight: 500;
letter-spacing: 0.3px;
border-radius: 6px;
transition: all 0.25s ease;
display: inline-flex;
align-items: center;
justify-content: center;
border: none;
font-size: 0.95rem;
box-shadow: 0 3px 5px rgba(0,0,0,0.05);
height: 46px; /* Altura consistente con inputs */
}

.btn-primary {
background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
border: none;
color: white;
}

.btn-primary:hover {
background: linear-gradient(135deg, var(--primary-light) 0%, var(--primary) 100%);
transform: translateY(-2px);
box-shadow: 0 5px 15px rgba(44, 85, 165, 0.3);
}

.btn-secondary {
background-color: var(--gray);
color: var(--white);
}

.btn-secondary:hover {
background-color: #5a6268;
color: var(--white);
transform: translateY(-2px);
}

.btn-light {
background-color: var(--light);
border: 1px solid var(--gray-light);
color: var(--dark);
}

.btn-light:hover {
background-color: #e2e6ea;
border-color: #dae0e5;
}

.btn i {
margin-right: 8px;
font-size: 0.9em;
}

/* Previsualización de imágenes */
.image-preview {
display: flex;
flex-wrap: wrap;
gap: 15px;
margin-top: 15px;
}

.image-preview-item {
position: relative;
border: 1px solid var(--gray-light);
border-radius: var(--border-radius);
padding: 5px;
display: inline-block;
}

.remove-image {
position: absolute;
top: -10px;
right: -10px;
background-color: var(--danger);
color: white;
border-radius: 50%;
width: 22px;
height: 22px;
text-align: center;
line-height: 22px;
cursor: pointer;
font-size: 12px;
}

/* Custom file input */
.custom-file {
position: relative;
display: inline-block;
width: 100%;
height: 46px; /* Altura consistente */
margin-bottom: 0;
}

.custom-file-input {
position: relative;
z-index: 2;
width: 100%;
height: 46px; /* Altura consistente */
margin: 0;
opacity: 0;
}

.custom-file-label {
position: absolute;
top: 0;
right: 0;
left: 0;
z-index: 1;
height: 46px; /* Altura consistente */
padding: 0.85rem 1rem;
font-weight: 400;
line-height: 1.5;
color: #495057;
background-color: #fff;
border: 1px solid #ced4da;
border-radius: 6px;
display: flex;
align-items: center;
}

.custom-file-label::after {
position: absolute;
top: 0;
right: 0;
bottom: 0;
z-index: 3;
display: flex;
align-items: center;
justify-content: center;
height: 100%;
padding: 0 0.75rem;
color: var(--white);
content: "Examinar";
background-color: var(--primary);
border-left: inherit;
border-radius: 0 6px 6px 0;
}

/* Custom checkboxes */
.custom-control {
position: relative;
display: block;
min-height: 1.5rem;
padding-left: 1.5rem;
margin-bottom: 1rem;
}

.custom-control-input {
position: absolute;
left: 0;
z-index: -1;
width: 1rem;
height: 1.25rem;
opacity: 0;
}

.custom-control-label {
position: relative;
margin-bottom: 0;
vertical-align: top;
cursor: pointer;
padding-left: 10px;
}

.custom-control-label::before {
position: absolute;
top: 0.25rem;
left: -1.5rem;
display: block;
width: 1rem;
height: 1rem;
pointer-events: none;
content: "";
background-color: #fff;
border: 1px solid #adb5bd;
border-radius: 0.25rem;
}

.custom-control-label::after {
position: absolute;
top: 0.25rem;
left: -1.5rem;
display: block;
width: 1rem;
height: 1rem;
content: "";
background: no-repeat 50% / 50% 50%;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
background-color: var(--primary);
border-color: var(--primary);
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z'/%3e%3c/svg%3e");
}

/* Mensajes de ayuda */
.help-text, .form-text.text-muted {
color: var(--gray);
font-size: 0.8rem;
margin-top: 0.5rem;
display: block;
}

/* Validación de formularios */
.is-valid {
border-color: var(--success);
}

.is-invalid {
border-color: var(--danger);
}

.valid-feedback {
color: var(--success);
margin-top: 0.25rem;
font-size: 0.8rem;
display: flex;
align-items: center;
}

.valid-feedback i {
margin-right: 5px;
}

.invalid-feedback {
color: var(--danger);
margin-top: 0.25rem;
font-size: 0.8rem;
display: flex;
align-items: center;
display: block;
}

.invalid-feedback i {
margin-right: 5px;
}

/* MEJORADO: Arreglar la visualización de input-group-prepend */
.input-group-prepend {
display: flex;
margin-right: -1px;
}

.input-group-prepend .input-group-text {
border-top-right-radius: 0;
border-bottom-right-radius: 0;
}

/* MEJORADO: Mejorar la apariencia del campo de precio */
.input-group-prepend + .form-control {
border-top-left-radius: 0;
border-bottom-left-radius: 0;
}

/* MEJORADO: Eliminar efectos no deseados en navegadores webkit */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
-webkit-appearance: none;
margin: 0;
}

/* Firefox input number */
input[type="number"] {
-moz-appearance: textfield;
}

/* MEJORADO: Mejorar la visualización de inputs de tipo date en diferentes navegadores */
input[type="date"]::-webkit-calendar-picker-indicator {
opacity: 1;
display: block;
background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 24 24"><path fill="%232c55a5" d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 18H4V8h16v13z"/></svg>');
width: 20px;
height: 20px;
cursor: pointer;
}

/* AÑADIDO: Tooltip para campos informativos */
.tooltip-icon {
display: inline-flex;
align-items: center;
justify-content: center;
width: 16px;
height: 16px;
border-radius: 50%;
background-color: var(--gray-light);
color: var(--gray);
font-size: 10px;
margin-left: 5px;
cursor: help;
}

.tooltip-icon:hover {
background-color: var(--primary-light);
color: var(--white);
}


/* CORREGIDO: Aumentar el ancho del campo de precio y mantener tamaño consistente */
.input-group.precio-venta {
    max-width: 450px;
    margin-bottom: 0.5rem;
    width: 100%;
    display: flex; /* Cambiado a flex para mantener elementos en línea */
    flex-direction: row; /* Asegurar dirección horizontal */
}

/* MEJORADO: Contenedor para el grupo de precio */
.precio-container {
    position: relative;
    margin-bottom: 1.5rem;
    width: 100%;
}

/* MEJORADO: Estilo para el input group */
.precio-container .input-group {
    margin-bottom: 0.25rem;
    display: flex;
    align-items: stretch;
}

/* MEJORADO: Estilo para el símbolo de moneda */
.input-group-text.simbolo-moneda {
    min-width: 60px;
    justify-content: center;
    font-weight: 500;
    font-size: 1.2rem;
    background-color: #f1f3f9;
    height: 56px;
    padding: 0 15px;
    display: flex;
    align-items: center;
    border: 1px solid #e4e6ef;
    border-right: none;
    border-radius: 6px 0 0 6px;
}

/* MEJORADO: Estilo específico para el input de precio */
.input-group.precio-venta .form-control {
    height: 56px;
    font-size: 1.2rem;
    font-weight: 500;
    min-width: 200px;
    padding: 0.5rem 1rem;
    text-align: left;
    transition: all 0.2s ease-in-out;
    border-radius: 0 6px 6px 0;
    border: 1px solid #e4e6ef;
    flex: 1;
}

/* MEJORADO: Espaciado y estilo para mensajes de error */
.invalid-feedback {
    display: block;
    width: 100%;
    margin-top: 0.5rem;
    padding: 0.75rem 1rem;
    background-color: #fff8f8;
    border-left: 3px solid var(--danger);
    border-radius: 4px;
    font-size: 0.9rem;
    color: #dc3545;
    position: relative;
    clear: both;
    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
}

/* MEJORADO: Espaciado y estilo para mensajes de éxito */
.valid-feedback {
    display: block;
    width: 100%;
    margin-top: 0.5rem;
    padding: 0.75rem 1rem;
    background-color: #f8fff9;
    border-left: 3px solid var(--success);
    border-radius: 4px;
    font-size: 0.9rem;
    color: #28a745;
    position: relative;
    clear: both;
    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
}

/* AÑADIDO: Asegurar que el input-group-prepend se mantenga en línea */
.input-group-prepend {
    display: flex;
    margin-right: 0;
}

#content {
flex: 1 0 auto;
}

/* MEJORADO: Añadir soporte para Firefox input date */
@-moz-document url-prefix() {
input[type="date"] {
padding-top: 0.7rem;
padding-bottom: 0.7rem;
}
}

/* AÑADIDO: Espaciado entre campos relacionados */
.form-row {
display: flex;
flex-wrap: wrap;
margin-right: -10px;
margin-left: -10px;
}

.form-row > .col,
.form-row > [class*="col-"] {
padding-right: 10px;
padding-left: 10px;
}

/* AÑADIDO: Mejor separación entre secciones */
hr.section-divider {
margin-top: 2rem;
margin-bottom: 2rem;
border: 0;
border-top: 1px solid var(--gray-light);
}

/* AÑADIDO: Estilo para subtítulos de sección */
.subsection-title {
font-size: 1rem;
color: var(--gray);
margin-bottom: 1rem;
font-weight: 500;
}

/* Estilos personalizados para input de tipo date */
input[type="date"] {
    position: relative;
    padding-right: 30px;
    cursor: pointer;
    background-color: #f9fafc !important;
    border: 1px solid #e4e6ef;
    border-radius: 6px;
    transition: all 0.2s ease-in-out;
    font-family: var(--font-main);
    color: var(--dark);
    font-size: 0.95rem;
    height: 46px;
    /* Ocultar íconos por defecto del navegador */
    -webkit-appearance: none !important;
    -moz-appearance: none !important;
    appearance: none !important;
    background-image: none !important;
}

/* Eliminar todos los íconos de validación */
input[type="date"]::-ms-clear,
input[type="date"]::-ms-reveal,
input[type="date"]::-webkit-search-decoration,
input[type="date"]::-webkit-search-cancel-button,
input[type="date"]::-webkit-search-results-button,
input[type="date"]::-webkit-search-results-decoration,
input[type="date"]::-webkit-inner-spin-button,
input[type="date"]::-webkit-clear-button,
input[type="date"]::-webkit-validation-marker {
    display: none !important;
    -webkit-appearance: none !important;
    appearance: none !important;
}

/* Eliminar específicamente el ícono de validación de Bootstrap */
input[type="date"].form-control:valid,
input[type="date"].form-control:invalid {
    background-image: none !important;
    padding-right: 30px !important;
}

input[type="date"].is-valid,
input[type="date"].is-invalid {
    background-image: none !important;
    border-color: #e4e6ef !important;
}

/* Restaurar el borde rojo solo cuando hay error de validación */
input[type="date"].is-invalid {
    border-color: var(--danger) !important;
}

/* Estilo para el icono del calendario */
input[type="date"]::-webkit-calendar-picker-indicator {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    width: 20px;
    height: 20px;
    cursor: pointer;
    opacity: 0.7;
    transition: opacity 0.2s ease;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%232c55a5' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Crect x='3' y='4' width='18' height='18' rx='2' ry='2'%3E%3C/rect%3E%3Cline x1='16' y1='2' x2='16' y2='6'%3E%3C/line%3E%3Cline x1='8' y1='2' x2='8' y2='6'%3E%3C/line%3E%3Cline x1='3' y1='10' x2='21' y2='10'%3E%3C/line%3E%3C/svg%3E");
    background-size: contain;
    background-repeat: no-repeat;
    z-index: 1;
}

input[type="date"]::-webkit-calendar-picker-indicator:hover {
    opacity: 1;
}

input[type="date"]::-webkit-datetime-edit {
    padding: 0 0.5rem;
}

/* Asegurar que no haya íconos de validación en estados específicos */
.was-validated input[type="date"]:valid,
.was-validated input[type="date"]:invalid,
input[type="date"].is-valid,
input[type="date"].is-invalid {
    background-image: none !important;
    padding-right: 30px !important;
}

input[type="date"]:hover {
    border-color: var(--primary-light);
    background-color: #f5f7fc;
}

input[type="date"]:focus {
    border-color: var(--primary-light);
    box-shadow: 0 0 0 0.25rem rgba(44, 85, 165, 0.15);
    background-color: var(--white);
    outline: none;
}

/* Estilo para el icono del calendario */
input[type="date"]::-webkit-calendar-picker-indicator {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    width: 20px;
    height: 20px;
    cursor: pointer;
    opacity: 0.7;
    transition: opacity 0.2s ease;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%232c55a5' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Crect x='3' y='4' width='18' height='18' rx='2' ry='2'%3E%3C/rect%3E%3Cline x1='16' y1='2' x2='16' y2='6'%3E%3C/line%3E%3Cline x1='8' y1='2' x2='8' y2='6'%3E%3C/line%3E%3Cline x1='3' y1='10' x2='21' y2='10'%3E%3C/line%3E%3C/svg%3E");
    background-size: contain;
    background-repeat: no-repeat;
    z-index: 1;
}

input[type="date"]::-webkit-calendar-picker-indicator:hover {
    opacity: 1;
}

input[type="date"]::-webkit-datetime-edit {
    padding: 0 0.5rem;
}

/* Asegurar que no haya íconos de validación en estados específicos */
.was-validated input[type="date"]:valid,
.was-validated input[type="date"]:invalid,
input[type="date"].is-valid,
input[type="date"].is-invalid {
    background-image: none !important;
    padding-right: 30px !important;
}

// ... existing code ...

/* Estilo para el estado válido */
input[type="date"].is-valid {
    border-color: var(--success);
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right calc(0.375em + 0.1875rem) center;
    background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

/* CORREGIDO: Estructura del contenedor de precio */
.precio-container {
    position: relative;
    width: 100%;
    margin-bottom: 1rem;
    display: flex;
    flex-direction: column;
}

/* MEJORADO: Grupo de input de precio */
.input-group.precio-venta {
    max-width: 450px;
    width: 100%;
    display: flex !important;
    flex-direction: row !important;
    align-items: stretch;
}

/* MEJORADO: Contenedor específico para mensajes de error */
.error-container {
    max-width: 450px;
    width: 100%;
    margin-top: 0.5rem;
    display: block;
}

/* MEJORADO: Estilo para mensajes de error */
.invalid-feedback {
    position: static !important;
    display: block !important;
    width: 100% !important;
    margin-top: 0.5rem !important;
    padding: 0.75rem 1rem;
    background-color: #fff8f8;
    border-left: 3px solid var(--danger);
    border-radius: 4px;
    font-size: 0.9rem;
    color: #dc3545;
    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    float: none !important;
    clear: both !important;
}

/* MEJORADO: Estilo para el input de precio */
.input-group.precio-venta .form-control {
    height: 56px;
    font-size: 1.2rem;
    font-weight: 500;
    min-width: 200px;
    padding: 0.5rem 1rem;
    text-align: left;
    transition: all 0.2s ease-in-out;
    border-radius: 0 6px 6px 0;
    border: 1px solid #e4e6ef;
    flex: 1;
}

/* MEJORADO: Asegurar que el prepend se mantenga en línea */
.input-group-prepend {
    display: flex !important;
    margin-right: 0;
}

/* AÑADIDO: Forzar que los mensajes de error estén debajo */
.precio-container > * {
    width: 100%;
}

.precio-container .input-group + .invalid-feedback,
.precio-container .input-group + .valid-feedback {
    display: block !important;
    position: static !important;
    margin-top: 0.5rem !important;
    float: none !important;
    clear: both !important;
}

/* Estilos para el campo de precio */
.precio-container {
    position: relative;
    max-width: 450px;
}

.input-group.precio-venta {
    display: flex;
    align-items: center;
    margin-bottom: 0.5rem;
}

.input-group-text.simbolo-moneda {
    width: 50px;
    height: 46px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f1f3f9;
    border: 1px solid #e4e6ef;
    border-right: none;
    border-radius: 6px 0 0 6px;
}

.input-group.precio-venta .form-control {
    height: 46px;
    border-radius: 0 6px 6px 0;
    font-size: 1rem;
}

/* Mensaje de error */
.invalid-feedback {
    display: block;
    width: 100%;
    margin-top: 0.5rem;
    padding: 0.75rem;
    background-color: #fff8f8;
    border-left: 3px solid #dc3545;
    border-radius: 4px;
    font-size: 0.9rem;
    color: #dc3545;
}

.form-group .precio-container {
    position: relative;
    display: block;
    max-width: 450px;
}

.form-group .precio-container .input-group.precio-venta {
    position: relative;
    display: flex;
    flex-wrap: nowrap;
    align-items: stretch;
    width: 100%;
    margin-bottom: 8px;
}

.form-group .precio-container .input-group-prepend {
    display: flex;
    margin-right: 0;
}

.form-group .precio-container .input-group-text.simbolo-moneda {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 46px;
    height: 46px;
    padding: 0;
    font-size: 1rem;
    font-weight: 500;
    background-color: #f1f3f9;
    border: 1px solid #e4e6ef;
    border-right: 0;
    border-radius: 6px 0 0 6px;
}

.form-group .precio-container .form-control {
    position: relative;
    flex: 1 1 auto;
    width: 1%;
    height: 46px;
    padding: 0.5rem 1rem;
    font-size: 1rem;
    font-weight: 400;
    border: 1px solid #e4e6ef;
    border-radius: 0 6px 6px 0;
}

/* Mensaje de error con máxima especificidad */
.form-group .precio-container .invalid-feedback {
    display: block !important;
    width: 100% !important;
    margin: 0.5rem 0 0 0 !important;
    padding: 0.75rem !important;
    font-size: 0.875rem !important;
    color: #dc3545 !important;
    background-color: #fff8f8 !important;
    border-left: 3px solid #dc3545 !important;
    border-radius: 4px !important;
    position: static !important;
    float: none !important;
    clear: both !important;
}

/* Asegurar que el mensaje de error esté debajo */
.form-group .precio-container > .invalid-feedback {
    order: 2 !important;
}

/* Texto de ayuda */
.form-group .precio-container .help-text {
    display: block;
    margin-top: 0.5rem;
    font-size: 0.875rem;
    color: #6c757d;
}

/* Progress Bar Container */
.form-progress-container {
    width: 100%;
    margin: 2rem auto;
    position: relative;
}

/* Progress Bar Base */
.form-progress {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
    margin-bottom: 2rem;
    max-width: 100%;
    padding: 0 1rem;
}

/* Progress Line */
.progress-line {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    height: 3px;
    background: var(--gray-light);
    width: 100%;
    z-index: 1;
}

/* Active Progress Line */
.progress-line-active {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    height: 3px;
    background: var(--primary);
    width: 0%;
    transition: width 0.5s ease-in-out;
    z-index: 2;
}

/* Step Indicators */
.step-indicator {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: var(--white);
    border: 3px solid var(--gray-light);
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    color: var(--gray);
    position: relative;
    z-index: 3;
    transition: all 0.3s ease;
}

/* Active Step */
.step-indicator.active {
    border-color: var(--primary);
    background: var(--primary);
    color: var(--white);
}

/* Completed Step */
.step-indicator.completed {
    border-color: var(--success);
    background: var(--success);
    color: var(--white);
}

/* Step Labels */
.step-label {
    position: absolute;
    top: 100%;
    left: 50%;
    transform: translateX(-50%);
    margin-top: 0.5rem;
    font-size: 0.85rem;
    color: var(--gray);
    white-space: nowrap;
    text-align: center;
    width: max-content;
    font-weight: 500;
}

/* Active Step Label */
.step-indicator.active + .step-label {
    color: var(--primary);
    font-weight: 600;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .step-label {
        font-size: 0.75rem;
    }
    
    .step-indicator {
        width: 35px;
        height: 35px;
    }
}

@media (max-width: 576px) {
    .form-progress {
        padding: 0 0.5rem;
    }
    
    .step-label {
        display: none;
    }
    
    .step-indicator {
        width: 30px;
        height: 30px;
        font-size: 0.85rem;
    }
    
    /* Mostrar label del paso activo en móvil */
    .step-indicator.active + .step-label {
        display: block;
        font-size: 0.7rem;
    }
}

/* Animaciones */
@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
}

.step-indicator.active {
    animation: pulse 2s infinite;
}

.btn .fa-arrow-right {
    padding-top: 3px;
    padding-left: 0.7em;
    font-size: 0.9em;
}

.btn .fa-save {
    padding-right: 0.7em;
}

.btn .fa-arrow-left {
    padding-right: 0.7em;
}
        
    </style>
</head>
<body id="page-top">
<div id="wrapper" style="margin-top: 70px;">


    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="d-flex align-items-center">
                    <i class="fas fa-plus-circle fa-2x text-primary mr-2"></i>
                    <div>
                        <h1 class="h3 mb-0 text-gray-800">Crear Nuevo Anuncio</h1>
                        <small class="text-muted">Sistema de Publicación de Activos Digitales</small>
                    </div>
                </div>
                <div class="ml-auto d-flex align-items-center">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">ID: <?php echo uniqid('LISTING-'); ?></span>
                    <span class="badge badge-warning">
<i class="fas fa-save mr-1"></i>
Borrador
</span>
                </div>
            </nav>

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="progress mb-3">
                                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span class="badge badge-primary step-badge" id="stepBadge1">Información Básica</span>
                                    <span class="badge badge-light step-badge" id="stepBadge2">Métricas</span>
                                    <span class="badge badge-light step-badge" id="stepBadge3">Monetización</span>
                                    <span class="badge badge-light step-badge" id="stepBadge4">Configuración</span>
                                </div>
                            </div>
                        </div>

                        <form id="listingForm" enctype="multipart/form-data">
                            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

                            <!-- Paso 1: Información Básica -->
                            <div class="step-content" id="step1">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3 d-flex align-items-center">
                                        <i class="fas fa-info-circle fa-2x text-primary mr-2 p-3"></i>
                                        <h6 class="m-0 font-weight-bold text-primary">Información Básica</h6>
                                    </div>
                                    <div class="card-body">
                                        <!-- Título y Descripción -->
                                        <div class="section-card">
                                            <div class="section-title">
                                                <i class="fas fa-heading mr-2"></i>Detalles Principales
                                            </div>
                                            <div class="form-group">
                                                <label>Título del Activo</label>
                                                <input type="text" class="form-control form-control-lg" name="title" required
                                                       minlength="20" maxlength="200"
                                                       placeholder="Ej: Sitio Web de Comercio Electrónico Rentable">
                                                <small class="help-text">
                                                    <i class="fas fa-info-circle mr-1"></i>
                                                    Un título claro y descriptivo ayudará a atraer compradores potenciales
                                                </small>
                                            </div>

                                            <div class="form-group mb-0">
                                                <label>Descripción Detallada</label>
                                                <textarea class="form-control" name="description" rows="4" required
                                                          minlength="50" maxlength="2500"
                                                          placeholder="Describe detalladamente tu activo digital..."></textarea>
                                                <div class="d-flex justify-content-between">
                                                    <small class="help-text">
                                                        <i class="fas fa-info-circle mr-1"></i>
                                                        Mínimo 50 caracteres, máximo 2500
                                                    </small>
                                                    <small class="help-text">
                                                    </small>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Tipo de Propiedad y Categoría -->
                                        <div class="section-card">
                                            <div class="section-title">
                                                <i class="fas fa-building mr-2"></i>Tipo y Categoría
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Tipo de Propiedad</label>
                                                        <select class="form-control" name="property_type" id="propertyType" required>
                                                            <option value="">Seleccionar tipo...</option>
                                                            <option value="1">Sitio Web</option>
                                                            <option value="2">Canal de YouTube</option>
                                                            <option value="3">Aplicación</option>
                                                            <option value="4">E-commerce</option>
                                                            <option value="5">SaaS</option>
                                                            <option value="6">Redes Sociales</option>
                                                            <option value="7">Amazon Store</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Category</label>
                                                        <select class="form-control" name="category_id" required>
                                                            <option value="">Select a category...</option>
                                                            <option value="1">Technology</option>
                                                            <option value="2">Education</option>
                                                            <option value="3">Finance</option>
                                                            <option value="4">Entertainment</option>
                                                            <option value="5">Health and Fitness</option>
                                                            <option value="6">Travel and Lifestyle</option>
                                                            <option value="7">Gaming</option>
                                                            <option value="8">Fashion and Beauty</option>
                                                            <option value="9">Business and Marketing</option>
                                                            <option value="10">Food and Cooking</option>
                                                            <option value="11">Anime</option>
                                                        </select>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                        <!-- URL Container -->
                                        <div class="section-card">
                                            <div class="section-title">
                                                <i class="fas fa-link mr-2"></i>URL del Activo
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="urlContainer">
                                                        <!-- El contenedor para el campo URL dinámico -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Información Temporal y Precio -->
                                        <div class="section-card">
                                            <div class="section-title">
                                                <i class="fas fa-clock mr-2"></i>Detalles Temporales y Precio
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Fecha de Creación</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <i class="fas fa-calendar-alt"></i>
                                                                </span>
                                                            </div>
                                                            <input type="date" id="fechaInput" class="form-control" name="creation_date" required>
                                                        </div>
                                                        <small class="help-text">Fecha en que se creó originalmente la propiedad</small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Precio de Venta (USD)</label>
                                                        <div class="input-group precio-venta">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text simbolo-moneda">
                                                                    <i class="fas fa-dollar-sign"></i>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control precio" name="price" required min="0" step="0.01" placeholder="Ej: 4500.00">
                                                        </div>
                                                        <small class="help-text">Ingrese el precio de venta deseado para el activo</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <!-- Paso 2: Métricas -->
                            <div class="step-content" id="step2">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">
                                            <i class="fas fa-chart-line mr-2 p-3"></i>Métricas del Activo
                                        </h6>
                                    </div>
                                    <div class="card-body">
                                        <!-- Métricas Financieras -->
                                        <div class="section-card">
                                            <div class="section-title">
                                                <i class="fas fa-dollar-sign mr-2"></i>Métricas Financieras
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Ingresos Mensuales (USD)</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">$</span>
                                                            </div>
                                                            <input type="text" class="form-control" name="monthly_revenue" required placeholder="Ej: 4.500,00"/>
                                                        </div>
                                                        <small class="form-text text-muted">Promedio de ingresos mensuales de los últimos 6 meses</small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Ingresos Anuales (USD)</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">$</span>
                                                            </div>
                                                            <input type="text" class="form-control" name="yearly_earnings" required placeholder="Ej: 54.000,00"/>
                                                        </div>
                                                        <small class="form-text text-muted">Total de ingresos en los últimos 12 meses</small>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Beneficio Mensual (USD)</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">$</span>
                                                            </div>
                                                            <input type="text" class="form-control" name="monthly_profit" required placeholder="Ej: 2.500,00"/>
                                                        </div>
                                                        <small class="form-text text-muted">Beneficio neto mensual después de todos los gastos</small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>ROI Estimado</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                                            </div>
                                                            <input type="number" class="form-control" name="investment_return" min="0" step="1" readonly/>
                                                        </div>
                                                        <small class="form-text text-muted">Calculado automáticamente (Precio ÷ Ingresos mensuales)</small>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Múltiplo de Ingresos</label>
                                                        <input type="text" class="form-control" name="revenue_multiple" readonly/>
                                                        <small class="form-text text-muted">
                                                            Calculado automáticamente (Precio ÷ Ingresos mensuales)
                                                        </small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Múltiplo de Beneficios</label>
                                                        <input type="text" class="form-control" name="profit_multiple" readonly/>
                                                        <small class="form-text text-muted">
                                                            Calculado automáticamente (Precio ÷ Beneficio mensual)
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Métricas de Audiencia -->
                                        <div class="section-card">
                                            <div class="section-title">
                                                <i class="fas fa-users mr-2"></i>Métricas de Audiencia y Engagement
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Tráfico Mensual Promedio</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-users"></i></span>
                                                            </div>
                                                            <input type="number" class="form-control" name="monthly_views" min="0" required/>
                                                        </div>
                                                        <small class="form-text text-muted">Promedio de visitas mensuales de los últimos 3 meses</small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Tasa de Conversión (%)</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">%</span>
                                                            </div>
                                                            <input type="number" class="form-control" name="conversion_rate" min="0" max="100" step="0.01" required/>
                                                        </div>
                                                        <small class="form-text text-muted">Porcentaje de visitantes que realizan una acción deseada</small>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Tiempo Promedio en Sitio (minutos)</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                                            </div>
                                                            <input type="number" class="form-control" name="average_time" min="0" step="0.1" required/>
                                                        </div>
                                                        <small class="form-text text-muted">Tiempo promedio que los usuarios pasan en el sitio</small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Tasa de Rebote (%)</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">%</span>
                                                            </div>
                                                            <input type="number" class="form-control" name="bounce_rate" min="0" max="100" step="0.01" required/>
                                                        </div>
                                                        <small class="form-text text-muted">Porcentaje de visitantes que abandonan sin interactuar</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Métricas de Crecimiento -->
                                        <div class="section-card">
                                            <div class="section-title">
                                                <i class="fas fa-chart-line mr-2"></i>Métricas de Crecimiento
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Tasa de Crecimiento Mensual (%)</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">%</span>
                                                            </div>
                                                            <input type="number" class="form-control" name="monthly_growth" min="0" step="0.01" required/>
                                                        </div>
                                                        <small class="form-text text-muted">Crecimiento promedio mensual de usuarios/ingresos</small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Usuarios Recurrentes (%)</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">%</span>
                                                            </div>
                                                            <input type="number" class="form-control" name="recurring_users" min="0" max="100" step="1" required/>
                                                        </div>
                                                        <small class="form-text text-muted">Porcentaje de usuarios que regresan mensualmente</small>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Antigüedad del Activo (meses)</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-history"></i></span>
                                                            </div>
                                                            <input type="number" class="form-control" name="asset_age" min="0" required/>
                                                        </div>
                                                        <small class="form-text text-muted">Tiempo desde que el activo fue creado</small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Tiempo de Monetización (meses)</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                                                            </div>
                                                            <input type="number" class="form-control" name="monetization_age" min="0" required/>
                                                        </div>
                                                        <small class="form-text text-muted">Tiempo desde que comenzó a generar ingresos</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Paso 3: Monetización -->
                            <div class="step-content" id="step3" style="display: none;">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">
                                            <i class="fas fa-dollar-sign mr-2 p-3"></i>Detalles de Monetización
                                        </h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group p-5">
                                            <label>Tipos de Monetización</label>
                                            <div class="custom-control custom-checkbox mb-2">
                                                <input type="checkbox" class="custom-control-input" id="adsense" name="monetization_types[]" value="adsense">
                                                <label class="custom-control-label" for="adsense">
                                                    <i class="fab fa-google mr-2 px-2"></i>Google AdSense
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-2">
                                                <input type="checkbox" class="custom-control-input" id="sponsorships" name="monetization_types[]" value="sponsorships">
                                                <label class="custom-control-label" for="sponsorships">
                                                    <i class="fas fa-handshake mr-2 px-2"></i>Patrocinios
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-2">
                                                <input type="checkbox" class="custom-control-input" id="affiliate" name="monetization_types[]" value="affiliate">
                                                <label class="custom-control-label" for="affiliate">
                                                    <i class="fas fa-link mr-2 px-2"></i>Afiliados
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-2">
                                                <input type="checkbox" class="custom-control-input" id="products" name="monetization_types[]" value="products">
                                                <label class="custom-control-label" for="products">
                                                    <i class="fas fa-shopping-cart mr-2 px-2"></i>Productos
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-2">
                                                <input type="checkbox" class="custom-control-input" id="subscriptions" name="monetization_types[]" value="subscriptions">
                                                <label class="custom-control-label" for="subscriptions">
                                                    <i class="fas fa-sync mr-2 px-2"></i>Suscripciones
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Paso 4: Configuración -->
                            <div class="step-content" id="step4" style="display: none;">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">
                                            <i class="fas fa-cog mr-2"></i>Configuración del Anuncio
                                        </h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Duración de Visibilidad (días)</label>
                                                    <input type="number" class="form-control" name="visibility_days" value="180" min="1" max="365" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Idioma del Negocio</label>
                                                    <select class="form-control" name="business_language" required>
                                                        <option value="es">Español</option>
                                                        <option value="en">Inglés</option>
                                                        <option value="fr">Francés</option>
                                                        <option value="de">Alemán</option>
                                                        <option value="pt">Portugués</option>
                                                        <option value="other">Otro</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Imágenes del Activo <span class="text-danger">*</span></label>
                                            <div class="file-upload-container">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="assetImages" name="asset_images[]" multiple accept="image/jpeg,image/png,image/webp" data-max-files="5" data-max-size="5242880">
                                                    <label class="custom-file-label" for="assetImages">Seleccionar archivos</label>
                                                </div>
                                                <div class="upload-status mt-2" id="uploadStatus"></div>
                                            </div>
                                            <div class="image-preview mt-3" id="imagePreview"></div>
                                            <small class="text-muted">
                                                <i class="fas fa-info-circle"></i> Máximo 5 imágenes (JPG, PNG, WebP). Tamaño máximo por imagen: 5MB
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Botones de navegación -->
                            <div class="form-navigation-buttons mb-5">
                                <div class="nav-button-left">
                                    <button type="button" class="btn btn-secondary" id="prevStepBtn" style="display: none;">
                                        <i class="fas fa-arrow-left pt-1"></i> Anterior
                                    </button>
                                </div>
                                <div class="nav-button-right">
                                    <button type="button" class="btn btn-light" id="saveDraftBtn">
                                        <i class="fas fa-save"></i> Guardar Borrador
                                    </button>
                                    <button type="button" class="btn btn-primary" id="nextStepBtn">
                                        Siguiente <i class="fas fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>

                            <style>
                                .form-navigation-buttons {
                                    display: flex;
                                    justify-content: space-between;
                                    align-items: center;
                                    width: 100%;
                                }

                                .nav-button-left {
                                    flex: 0 0 auto;
                                }

                                .nav-button-right {
                                    display: flex;
                                    gap: 10px;
                                    flex: 0 0 auto;
                                }

                                @media (max-width: 576px) {
                                    .form-navigation-buttons {
                                        flex-direction: column;
                                        gap: 15px;
                                    }

                                    .nav-button-left, .nav-button-right {
                                        width: 100%;
                                    }

                                    .nav-button-right {
                                        justify-content: space-between;
                                    }

                                    .nav-button-right button {
                                        flex: 1;
                                    }
                                }
                            </style>

                            <script src="/wp-content/themes/blocksy-child/trestiq-auth/assets/vendor/jquery/jquery.min.js"></script>
                            <script src="/wp-content/themes/blocksy-child/trestiq-auth/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                            <script>

                                const TrestiqFormSteps = {
                                    currentStep: 1,
                                    totalSteps: 4,
                                    categories: [], // Agregar esta propiedad

                                    // Agregar la nueva función aquí
                                    loadTaxonomyCategories: async function() {
                                        try {
                                            const response = await $.get('/wp-content/themes/blocksy-child/trestiq-auth/includes/TrestiqCore/Listings/taxonomy.php', {
                                                action: 'get_categories'
                                            });
                                            if (response.success) {
                                                this.categories = response.data;
                                            }
                                        } catch (error) {
                                            console.error('Error cargando categorías:', error);
                                        }
                                    },


                                    // Patrones de validación para URLs
                                    validationPatterns: {
                                        '1': { // website
                                            pattern: /^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)\/?$/,
                                            name: 'Sitio Web',
                                            examples: [
                                                'https://www.tusitio.com',
                                                'http://tusitio.com'
                                            ]
                                        },
                                        '2': { // youtube_channel
                                            pattern: /^https?:\/\/(www\.)?(youtube\.com|youtu\.be)\/@?[\w-]+/,
                                            name: 'YouTube',
                                            examples: [
                                                'https://youtube.com/@nombrecanal',
                                                'https://www.youtube.com/@nombrecanal'
                                            ]
                                        },
                                        '3': { // app
                                            pattern: /^https?:\/\/(play\.google\.com|apps\.apple\.com)/,
                                            name: 'Aplicación',
                                            examples: [
                                                'https://play.google.com/store/apps/details?id=com.tuapp',
                                                'https://apps.apple.com/app/tuapp'
                                            ]
                                        },
                                        '4': { // ecommerce
                                            pattern: /^https?:\/\/(shopify\.com|woocommerce\.com|magento\.com)/,
                                            name: 'E-commerce',
                                            examples: [
                                                'https://tutienda.shopify.com',
                                                'https://tutienda.woocommerce.com'
                                            ]
                                        },
                                        '5': { // saas
                                            pattern: /^https?:\/\//,
                                            name: 'SaaS',
                                            examples: [
                                                'https://tusaas.com',
                                                'https://app.tusaas.com'
                                            ]
                                        },
                                        '6': { // social_media
                                            pattern: /^https?:\/\/(facebook\.com|instagram\.com|twitter\.com|tiktok\.com)/,
                                            name: 'Social Media',
                                            examples: [
                                                'https://instagram.com/usuario',
                                                'https://facebook.com/pagina'
                                            ]
                                        },
                                        '7': { // amazon_store
                                            pattern: /^https?:\/\/(www\.)?(amazon\.com|amazon\.[a-z]{2,3})\/.+/,
                                            name: 'Amazon Store',
                                            examples: [
                                                'https://amazon.com/shop/nombretienda',
                                                'https://www.amazon.com/shop/nombretienda'
                                            ]
                                        }
                                    },

                                    init: async function() {
                                        await this.loadTaxonomyCategories(); // Modificar init para que sea async
                                        this.bindEvents();
                                        this.showCurrentStep();
                                        this.setupImageValidation();
                                        this.setupRealTimeValidation();
                                        this.setupImagePreview();

                                        // Asegurarse de que los campos de múltiplos sean de solo lectura y tengan el formato correcto
                                        const revenueMultipleInput = $('input[name="revenue_multiple"]');
                                        const profitMultipleInput = $('input[name="profit_multiple"]');

                                        if (revenueMultipleInput.length > 0 && profitMultipleInput.length > 0) {
                                            console.log('Campos de múltiplos encontrados en init');
                                            revenueMultipleInput.prop('readonly', true);
                                            profitMultipleInput.prop('readonly', true);
                                        } else {
                                            console.log('Campos de múltiplos NO encontrados en init');
                                        }

                                        // Validación inicial de métricas si hay valores precargados
                                        const hasEmployees = $('#has_employees').is(':checked');
                                        const maxMultiple = hasEmployees ? 35 : 25;
                                        this.updateMultipleValidation(maxMultiple);

                                        // Limpiar formulario si fue enviado previamente
                                        if (sessionStorage.getItem('formSubmitted')) {
                                            this.resetForm();
                                        }
                                    },

                                    resetForm: function() {
                                        $('#listingForm')[0].reset();
                                        $('#listingForm input, #listingForm textarea').removeClass('is-valid is-invalid');
                                        $('.feedback-message, .feedback-container').remove();
                                        $('#imagePreview').empty();
                                        $('input[name="revenue_multiple"], input[name="profit_multiple"], input[name="investment_return"]').val('');
                                        $('#employee_documentation').hide();
                                        $('.url-verification-section').remove();
                                        sessionStorage.removeItem('formSubmitted');
                                    },

                                    bindEvents: function() {
                                        $('#nextStepBtn').on('click', () => this.nextStep());
                                        $('#prevStepBtn').on('click', () => this.previousStep());
                                        $('#saveDraftBtn').on('click', () => this.saveDraft());
                                        $('#propertyType').on('change', (e) => this.handlePropertyTypeChange(e));

                                        $('input, select, textarea').on('change', function() {
                                            $(this).removeClass('is-invalid');
                                            if ($(this).prop('required') && !$(this).val()) {
                                                $(this).addClass('is-invalid');
                                            }
                                        });
                                    },

                                    handlePropertyTypeChange: function(event) {
                                        const categoryId = $(event.target).val();
                                        $('#urlContainer').empty();

                                        if (categoryId && categoryId !== '') {
                                            const config = this.validationPatterns[categoryId];
                                            if (!config) return;

                                            const urlFieldMap = {
                                                '1': 'website_url',
                                                '2': 'channel_url',
                                                '3': 'app_store_url',
                                                '4': 'ecommerce_url',
                                                '5': 'saas_url',
                                                '6': 'social_media_url',
                                                '7': 'amazon_store_url'
                                            };

                                            const urlField = urlFieldMap[categoryId];

                                            const urlSection = $(
                                                '<div class="card mt-3 url-verification-section">' +
                                                '<div class="card-body">' +
                                                '<div class="form-group">' +
                                                '<label>URL de ' + config.name + '</label>' +
                                                '<input type="url" class="form-control" name="' + urlField + '" ' +
                                                'required placeholder="' + config.examples[0] + '"/>' +
                                                '<small class="text-muted">Ingresa la URL completa</small>' +
                                                '</div>' +
                                                '</div>' +
                                                '</div>'
                                            );

                                            $('#urlContainer').append(urlSection);
                                            this.setupUrlValidation(categoryId);
                                        }
                                    },



                                    setupRealTimeValidation: function() {
                                        this.setupMetricsValidation();
                                        this.setupDateValidation();
                                        this.setupTitleValidation();
                                        this.setupDescriptionValidation();
                                        this.setupUrlValidation();
                                        this.setupEmployeeValidation();
                                        this.setupPriceFormatting(); // Agregar esta línea
                                    },

// Agregar esta nueva función
                                    setupPriceFormatting: function() {
                                        // Función para formatear campos monetarios
                                        const formatMonetaryField = function(input) {
                                            // Obtener el valor sin formato (solo números)
                                            let valor = input.value.replace(/\D/g, '');

                                            // Convertir a número y formatear con separadores
                                            if (valor !== '') {
                                                // Dividir en parte entera y decimal
                                                let numero = parseFloat(valor) / 100;

                                                // Formatear con separadores de miles y decimales
                                                input.value = numero.toLocaleString('es-ES', {
                                                    minimumFractionDigits: 2,
                                                    maximumFractionDigits: 2
                                                });

                                                // Almacenar el valor numérico real en un atributo data para facilitar cálculos
                                                $(input).data('numeric-value', numero);

                                                // Disparar evento change para actualizar cálculos
                                                $(input).trigger('change');
                                            }
                                        };

                                        // Aplicar formato al campo de precio
                                        $('input[name="price"]').on('input', function() {
                                            formatMonetaryField(this);
                                        });

                                        // Aplicar formato a los campos de ingresos y beneficios
                                        $('input[name="monthly_revenue"], input[name="yearly_earnings"], input[name="monthly_profit"]').on('input', function() {
                                            formatMonetaryField(this);
                                        });
                                    },


                                    setupMetricsValidation: function() {
                                        // Seleccionar todos los inputs relevantes
                                        const inputs = 'input[name="monthly_revenue"], input[name="monthly_profit"], input[name="price"]';

                                        // Agregar un evento de cambio directo para calcular los múltiplos
                                        $(inputs).on('input change', () => {
                                            // Obtener los valores
                                            let price = 0;
                                            const priceInput = $('input[name="price"]');

                                            // Intentar obtener el valor numérico del precio
                                            if (priceInput.data('numeric-value')) {
                                                price = priceInput.data('numeric-value');
                                            } else {
                                                let priceValue = priceInput.val() || '0';
                                                priceValue = priceValue.replace(/\./g, '').replace(',', '.');
                                                price = parseFloat(priceValue) || 0;
                                            }

                                            // Obtener los valores de ingresos y beneficios
                                            let revenueValue = $('input[name="monthly_revenue"]').data('numeric-value');
                                            if (revenueValue === undefined) {
                                                let revStr = $('input[name="monthly_revenue"]').val() || '0';
                                                revStr = revStr.replace(/\./g, '').replace(',', '.');
                                                revenueValue = parseFloat(revStr) || 0;
                                            }

                                            let profitValue = $('input[name="monthly_profit"]').data('numeric-value');
                                            if (profitValue === undefined) {
                                                let profitStr = $('input[name="monthly_profit"]').val() || '0';
                                                profitStr = profitStr.replace(/\./g, '').replace(',', '.');
                                                profitValue = parseFloat(profitStr) || 0;
                                            }

                                            const revenue = revenueValue;
                                            const profit = profitValue;

                                            // Calcular solo si todos los valores son válidos
                                            if (price > 0 && revenue > 0 && profit > 0) {
                                                // Calcular múltiplos
                                                const revenueMultiple = (price / revenue).toFixed(2);
                                                const profitMultiple = (price / profit).toFixed(2);
                                                const roiMonths = Math.round(price / revenue);

                                                // Asignar valores directamente
                                                $('input[name="revenue_multiple"]').val(revenueMultiple + 'x');
                                                $('input[name="profit_multiple"]').val(profitMultiple + 'x');
                                                $('input[name="investment_return"]').val(roiMonths);
                                            }

                                            // También llamar a la validación completa
                                            const hasEmployees = $('#has_employees').is(':checked');
                                            const maxMultiple = hasEmployees ? 35 : 25;
                                            this.updateMultipleValidation(maxMultiple);
                                        });
                                    },

                                    setupEmployeeValidation: function() {
                                        $('#has_employees').on('change', () => {
                                            const hasEmployees = $('#has_employees').is(':checked');
                                            $('#employee_documentation, #employee_count_section').toggle(hasEmployees);
                                            const maxMultiple = hasEmployees ? 35 : 25;
                                            this.updateMultipleValidation(maxMultiple);
                                        });
                                    },

                                    setupTitleValidation: function() {
                                        $('input[name="title"]').on('input', function() {
                                            const min = 20;
                                            const max = 200;
                                            const current = $(this).val().length;

                                            $(this).next('.feedback-container').remove();
                                            $(this).after(`<div class="feedback-container text-muted">${current}/${max} caracteres (mínimo ${min})</div>`);

                                            if (current < min || current > max) {
                                                $(this).removeClass('is-valid').addClass('is-invalid');
                                            } else {
                                                $(this).removeClass('is-invalid').addClass('is-valid');
                                            }
                                        });
                                    },

                                    setupDescriptionValidation: function() {
                                        $('textarea[name="description"]').on('input', function() {
                                            const min = 50;
                                            const max = 900;
                                            const current = $(this).val().length;

                                            $(this).next('.feedback-container').remove();
                                            $(this).after(`<div class="feedback-container text-muted">${current}/${max} caracteres (mínimo ${min})</div>`);

                                            if (current < min || current > max) {
                                                $(this).removeClass('is-valid').addClass('is-invalid');
                                                if (current > max) {
                                                    $(this).val($(this).val().substring(0, max));
                                                }
                                            } else {
                                                $(this).removeClass('is-invalid').addClass('is-valid');
                                            }
                                        });
                                    },

                                    setupUrlValidation: function(categoryId) {
                                        if (!categoryId) return;

                                        const config = this.validationPatterns[categoryId];
                                        if (!config) return;

                                        const urlFieldMap = {
                                            '1': 'website_url',
                                            '2': 'channel_url',
                                            '3': 'app_store_url',
                                            '4': 'ecommerce_url',
                                            '5': 'saas_url',
                                            '6': 'social_media_url',
                                            '7': 'amazon_store_url'
                                        };

                                        const urlField = urlFieldMap[categoryId];
                                        $(`input[name="${urlField}"]`).on('input', (e) => {
                                            const url = $(e.target).val().toLowerCase();
                                            $(e.target).next('.feedback-message').remove();

                                            if (url && !config.pattern.test(url)) {
                                                $(e.target).removeClass('is-valid').addClass('is-invalid');
                                                $(e.target).after(`
                <div class="feedback-message invalid-feedback">
                    <div class="mb-2">URL de ${config.name} inválida</div>
                    <div class="text-muted">
                        <i class="fas fa-info-circle"></i>
                        Formatos válidos:
                        <ul>
                            ${config.examples.map(ex => `<li>${ex}</li>`).join('')}
                        </ul>
                    </div>
                </div>
            `);
                                            } else if (url) {
                                                $(e.target).removeClass('is-invalid').addClass('is-valid');
                                                $(e.target).after('<div class="feedback-message valid-feedback"><i class="fas fa-check"></i> URL válida</div>');
                                            }
                                        });
                                    },

                                    updateMultipleValidation: function(maxMultiple) {
                                        // Obtener el precio - primero intentar desde el atributo data si está disponible
                                        const priceInput = $('input[name="price"]');
                                        let price = priceInput.data('numeric-value');

                                        // Si no hay valor en data-numeric-value, convertir el valor formateado
                                        if (price === undefined) {
                                            let priceValue = priceInput.val() || '0';
                                            // Eliminar separadores de miles y convertir coma decimal a punto
                                            priceValue = priceValue.replace(/\./g, '').replace(',', '.');
                                            price = parseFloat(priceValue) || 0;
                                        }

                                        // Obtener los valores de ingresos y beneficios
                                        let revenueValue = $('input[name="monthly_revenue"]').data('numeric-value');
                                        if (revenueValue === undefined) {
                                            let revStr = $('input[name="monthly_revenue"]').val() || '0';
                                            revStr = revStr.replace(/\./g, '').replace(',', '.');
                                            revenueValue = parseFloat(revStr) || 0;
                                        }

                                        let profitValue = $('input[name="monthly_profit"]').data('numeric-value');
                                        if (profitValue === undefined) {
                                            let profitStr = $('input[name="monthly_profit"]').val() || '0';
                                            profitStr = profitStr.replace(/\./g, '').replace(',', '.');
                                            profitValue = parseFloat(profitStr) || 0;
                                        }

                                        const revenue = revenueValue;
                                        const profit = profitValue;
                                        const profitInput = $('input[name="monthly_profit"]');
                                        const revenueInput = $('input[name="monthly_revenue"]');
                                        const roiInput = $('input[name="investment_return"]');

                                        $('.feedback-message').remove();

                                        if (profit > revenue) {
                                            profitInput.removeClass('is-valid').addClass('is-invalid');
                                            profitInput.closest('.form-group').append('<div class="feedback-message invalid-feedback">El beneficio mensual no puede ser mayor que los ingresos mensuales</div>');
                                            $('input[name="revenue_multiple"], input[name="profit_multiple"], input[name="investment_return"]').val('');
                                            return false;
                                        }

                                        if (price <= 0 || profit <= 0 || revenue <= 0) {
                                            if (price <= 0) {
                                                priceInput.removeClass('is-valid').addClass('is-invalid');
                                                priceInput.closest('.form-group').append('<div class="feedback-message invalid-feedback">El precio debe ser mayor que cero</div>');
                                            }
                                            if (revenue <= 0) {
                                                revenueInput.removeClass('is-valid').addClass('is-invalid');
                                                revenueInput.closest('.form-group').append('<div class="feedback-message invalid-feedback">Los ingresos deben ser mayores que cero</div>');
                                            }
                                            if (profit <= 0) {
                                                profitInput.removeClass('is-valid').addClass('is-invalid');
                                                profitInput.closest('.form-group').append('<div class="feedback-message invalid-feedback">El beneficio debe ser mayor que cero</div>');
                                            }
                                            $('input[name="revenue_multiple"], input[name="profit_multiple"], input[name="investment_return"]').val('');
                                            return false;
                                        }

                                        // Calcular múltiplos y convertirlos a números para evitar problemas con el formato
                                        const revenueMultiple = parseFloat((price / revenue).toFixed(2));
                                        const profitMultiple = parseFloat((price / profit).toFixed(2));
                                        const roiMonths = Math.round(price / revenue);
                                        roiInput.val(roiMonths);

                                        if (profitMultiple > maxMultiple || revenueMultiple > maxMultiple) {
                                            priceInput.removeClass('is-valid').addClass('is-invalid');
                                            priceInput.closest('.form-group').append(`
                <div class="feedback-message invalid-feedback">
                    El múltiplo no puede ser mayor a ${maxMultiple}x.
                    ${maxMultiple === 35 ? 'Para negocios con empleados.' : 'Para negocios sin empleados.'}
                    Recomendación: Ajuste el precio o las métricas.
                </div>
            `);
                                            return false;
                                        }

                                        // Asignar valores a los campos con formato
                                        const revenueMultipleFormatted = revenueMultiple.toFixed(2) + 'x';
                                        const profitMultipleFormatted = profitMultiple.toFixed(2) + 'x';

                                        // Verificar si los campos existen antes de asignarles valores
                                        const revenueMultipleInput = $('input[name="revenue_multiple"]');
                                        const profitMultipleInput = $('input[name="profit_multiple"]');

                                        if (revenueMultipleInput.length > 0) {
                                            revenueMultipleInput.val(revenueMultipleFormatted);
                                        }

                                        if (profitMultipleInput.length > 0) {
                                            profitMultipleInput.val(profitMultipleFormatted);
                                        }

                                        // Marcar todos los campos como válidos
                                        priceInput.removeClass('is-invalid').addClass('is-valid');
                                        revenueInput.removeClass('is-invalid').addClass('is-valid');
                                        profitInput.removeClass('is-invalid').addClass('is-valid');
                                        roiInput.removeClass('is-invalid').addClass('is-valid');

                                        // Marcar los campos de múltiplos como válidos si existen
                                        if (revenueMultipleInput.length > 0) {
                                            revenueMultipleInput.removeClass('is-invalid').addClass('is-valid');
                                        }

                                        if (profitMultipleInput.length > 0) {
                                            profitMultipleInput.removeClass('is-invalid').addClass('is-valid');
                                        }

                                        // Agregar mensajes de feedback debajo de los inputs (usando parent para llegar al form-group)
                                        revenueInput.closest('.form-group').append('<div class="feedback-message valid-feedback"><i class="fas fa-check"></i> Ingresos válidos</div>');
                                        profitInput.closest('.form-group').append(`<div class="feedback-message valid-feedback"><i class="fas fa-check"></i> Beneficio válido (${((profit/revenue)*100).toFixed(1)}% de los ingresos)</div>`);
                                        priceInput.closest('.form-group').append(`<div class="feedback-message valid-feedback"><i class="fas fa-check"></i> Múltiplos válidos: Ingresos ${revenueMultiple}x | Beneficios ${profitMultiple}x</div>`);
                                        roiInput.closest('.form-group').append(`<div class="feedback-message valid-feedback"><i class="fas fa-check"></i> Retorno de inversión estimado en ${roiMonths} meses</div>`);

                                        // También agregar mensajes a los campos de múltiplos si existen
                                        if (revenueMultipleInput.length > 0) {
                                            revenueMultipleInput.closest('.form-group').append(`<div class="feedback-message valid-feedback"><i class="fas fa-check"></i> Múltiplo de ingresos: ${revenueMultipleFormatted}</div>`);
                                        }

                                        if (profitMultipleInput.length > 0) {
                                            profitMultipleInput.closest('.form-group').append(`<div class="feedback-message valid-feedback"><i class="fas fa-check"></i> Múltiplo de beneficios: ${profitMultipleFormatted}</div>`);
                                        }

                                        const inputFecha = document.getElementById("fechaInput").value;



                                        return true;
                                    },

                                    setupImageValidation: function() {
                                        $('input[type="file"]').on('change', async function() {
                                            const files = this.files;
                                            const maxFiles = 5;
                                            const maxSize = 5 * 1024 * 1024; // 5MB
                                            const allowedTypes = ['image/jpeg', 'image/png'];

                                            if (files.length > maxFiles) {
                                                Swal.fire({
                                                    icon: 'error',
                                                    title: 'Error',
                                                    text: `Máximo ${maxFiles} archivos permitidos`
                                                });
                                                this.value = '';
                                                return;
                                            }

                                            for (let file of files) {
                                                if (file.size > maxSize) {
                                                    Swal.fire({
                                                        icon: 'error',
                                                        title: 'Error',
                                                        text: `El archivo ${file.name} excede el tamaño máximo permitido de 5MB`
                                                    });
                                                    this.value = '';
                                                    return;
                                                }

                                                if (!allowedTypes.includes(file.type)) {
                                                    Swal.fire({
                                                        icon: 'error',
                                                        title: 'Error',
                                                        text: `El archivo ${file.name} debe ser JPG o PNG`
                                                    });
                                                    this.value = '';
                                                    return;
                                                }
                                            }
                                        });
                                    },

                                    setupImagePreview: function() {
                                        // Manejar la selección de imágenes
                                        $('#assetImages').on('change', function() {
                                            const files = Array.from(this.files);
                                            const imagePreview = $('#imagePreview');
                                            const uploadStatus = $('#uploadStatus');
                                            const maxFiles = parseInt($(this).data('max-files')) || 5;
                                            const maxSize = parseInt($(this).data('max-size')) || 5242880; // 5MB

                                            // Limpiar mensajes de estado previos
                                            uploadStatus.html('');

                                            // Validar número de archivos
                                            if (files.length > maxFiles) {
                                                uploadStatus.html(`<div class="alert alert-danger">Máximo ${maxFiles} imágenes permitidas. Has seleccionado ${files.length}.</div>`);
                                                this.value = '';
                                                return;
                                            }

                                            // Validar tipos y tamaños de archivos
                                            let validFiles = true;
                                            let errorMessages = [];

                                            files.forEach(file => {
                                                // Validar tipo
                                                if (!file.type.match('image/jpeg') && !file.type.match('image/png') && !file.type.match('image/webp')) {
                                                    validFiles = false;
                                                    errorMessages.push(`El archivo "${file.name}" no es una imagen válida. Solo se permiten JPG, PNG y WebP.`);
                                                }

                                                // Validar tamaño
                                                if (file.size > maxSize) {
                                                    validFiles = false;
                                                    errorMessages.push(`El archivo "${file.name}" excede el tamaño máximo de 5MB.`);
                                                }
                                            });

                                            if (!validFiles) {
                                                uploadStatus.html(`<div class="alert alert-danger">${errorMessages.join('<br>')}</div>`);
                                                this.value = '';
                                                return;
                                            }

                                            // Mostrar previsualizaciones
                                            imagePreview.html('');

                                            files.forEach((file, index) => {
                                                const reader = new FileReader();
                                                reader.onload = function(e) {
                                                    const preview = `
                        <div class="image-preview-item">
                            <img src="${e.target.result}"
                                alt="${file.name}"
                                title="${file.name} (${(file.size / 1024).toFixed(2)} KB)"
                                style="max-width: 200px; max-height: 200px; object-fit: cover;"/>
                            <div class="remove-image" data-index="${index}">
                                <i class="fas fa-times"></i>
                            </div>
                        </div>`;
                                                    imagePreview.append(preview);
                                                };
                                                reader.readAsDataURL(file);
                                            });

                                            // Actualizar etiqueta del input
                                            if (files.length > 0) {
                                                $(this).next('.custom-file-label').html(files.length > 1 ? `${files.length} archivos seleccionados` : files[0].name);
                                            } else {
                                                $(this).next('.custom-file-label').html('Seleccionar archivos');
                                            }

                                            // Mostrar mensaje de éxito
                                            if (files.length > 0) {
                                                uploadStatus.html(`<div class="alert alert-success">${files.length} ${files.length === 1 ? 'imagen seleccionada' : 'imágenes seleccionadas'} correctamente.</div>`);
                                            }

                                            // Registrar para depuración
                                            console.log('Imágenes seleccionadas:', files.map(f => ({ name: f.name, size: f.size, type: f.type })));
                                        });

                                        // Manejar eliminación de imágenes individuales
                                        $(document).on('click', '.remove-image', function() {
                                            const index = $(this).data('index');
                                            const input = $('#assetImages')[0];
                                            const dt = new DataTransfer();
                                            const { files } = input;

                                            for (let i = 0; i < files.length; i++) {
                                                if (i !== index) {
                                                    dt.items.add(files[i]);
                                                }
                                            }

                                            input.files = dt.files;
                                            $(this).closest('.image-preview-item').remove();

                                            // Actualizar índices
                                            $('.image-preview-item').each(function(newIndex) {
                                                $(this).find('.remove-image').data('index', newIndex);
                                            });

                                            // Actualizar etiqueta del input
                                            if (input.files.length > 0) {
                                                $(input).next('.custom-file-label').html(input.files.length > 1 ? `${input.files.length} archivos seleccionados` : input.files[0].name);
                                            } else {
                                                $(input).next('.custom-file-label').html('Seleccionar archivos');
                                                $('#imagePreview').html('');
                                            }

                                            // Actualizar estado
                                            $('#uploadStatus').html(input.files.length > 0 ?
                                                `<div class="alert alert-success">${input.files.length} ${input.files.length === 1 ? 'imagen seleccionada' : 'imágenes seleccionadas'} correctamente.</div>` :
                                                '');
                                        });


                                    },

                                    validateCurrentStep: function() {
                                        const currentForm = $('#step' + this.currentStep);
                                        let isValid = true;

                                        currentForm.find('[required]').each(function() {
                                            if (!$(this).val()) {
                                                isValid = false;
                                                $(this).addClass('is-invalid');
                                            }
                                        });

                                        switch(this.currentStep) {
                                            case 1:
                                                isValid = this.validateStep1() && isValid;
                                                break;
                                            case 2:
                                                isValid = this.validateStep2() && isValid;
                                                break;
                                            case 3:
                                                isValid = this.validateStep3() && isValid;
                                                break;
                                            case 4:
                                                isValid = this.validateStep4() && isValid;
                                                break;
                                        }

                                        if (!isValid) {
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Error de validación',
                                                text: 'Por favor complete todos los campos requeridos correctamente'
                                            });
                                        }

                                        return isValid;
                                    },

                                    validateStep1: function() {
                                        var isValid = true;
                                        
                                        // Validar fecha
                                        if (!this.updateDateValidation()) {
                                            isValid = false;
                                        }

                                        const title = $('input[name="title"]');
                                        const description = $('textarea[name="description"]');
                                        const categoryId = $('#propertyType').val();

                                        if (title.val().length < 20 || title.val().length > 200) {
                                            isValid = false;
                                            this.showError(title, 'El título debe tener entre 20 y 200 caracteres');
                                        }

                                        if (description.val().length < 50 || description.val().length > 900) {
                                            isValid = false;
                                            this.showError(description, 'La descripción debe tener entre 50 y 900 caracteres');
                                        }

                                        if (categoryId) {
                                            const category = this.categories.find(c => c.id === parseInt(categoryId));
                                            const config = this.validationPatterns[categoryId];

                                            if (category && config) {
                                                const urlInput = $(`input[name="${category.type}_url"]`);
                                                if (!urlInput.val() || !config.pattern.test(urlInput.val().toLowerCase())) {
                                                    isValid = false;
                                                    this.showError(urlInput, `Por favor, ingresa una URL válida de ${config.name}`);
                                                }
                                            }
                                        }

                                        return isValid;
                                    },

                                    validateStep2: function() {
                                        return this.updateMultipleValidation($('#has_employees').is(':checked') ? 35 : 25);
                                    },

                                    validateStep3: function() {
                                        const checkedTypes = $('input[name="monetization_types\\[\\]"]:checked');
                                        if (!checkedTypes.length) {
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Error de validación',
                                                text: 'Debe seleccionar al menos un tipo de monetización'
                                            });
                                            return false;
                                        }
                                        return true;
                                    },



                                    validateStep4: function() {
                                        const images = $('input[name="asset_images[]"]')[0]?.files || [];
                                        if (images.length > 5) {
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Error de validación',
                                                text: 'Máximo 5 imágenes permitidas'
                                            });
                                            return false;
                                        }
                                        return true;
                                    },

                                    showError: function(element, message) {
                                        element.addClass('is-invalid');
                                        element.next('.invalid-feedback').remove();
                                        element.after(`<div class="invalid-feedback">${message}</div>`);
                                    },

                                    nextStep: function() {
                                        if (this.validateCurrentStep()) {
                                            if (this.currentStep < this.totalSteps) {
                                                this.currentStep++;
                                                this.showCurrentStep();
                                            } else {
                                                this.submitForm();
                                            }
                                        }
                                    },

                                    previousStep: function() {
                                        if (this.currentStep > 1) {
                                            this.currentStep--;
                                            this.showCurrentStep();
                                        }
                                    },

                                    showCurrentStep: function() {
                                        $('.step-content').hide();
                                        $('#step' + this.currentStep).show();

                                        const progress = (this.currentStep / this.totalSteps) * 100;
                                        $('.progress-bar').css('width', progress + '%');

                                        $('.step-badge').removeClass('badge-primary').addClass('badge-light');
                                        $('#stepBadge' + this.currentStep).removeClass('badge-light').addClass('badge-primary');

                                        $('#prevStepBtn').toggle(this.currentStep > 1);
                                        $('#nextStepBtn').html(
                                            this.currentStep === this.totalSteps ?
                                                '<i class="fas fa-paper-plane"></i> Publicar Anuncio' :
                                                'Siguiente <i class="fas fa-arrow-right ml-2"></i>'
                                        );

                                        // Si estamos en el paso 2 (Métricas), actualizar los cálculos
                                        if (this.currentStep === 2) {
                                            console.log('Paso 2 activo, actualizando cálculos...');

                                            // Forzar un cálculo directo de los múltiplos
                                            setTimeout(() => {
                                                // Obtener los valores
                                                let price = 0;
                                                const priceInput = $('input[name="price"]');

                                                // Intentar obtener el valor numérico del precio
                                                if (priceInput.data('numeric-value')) {
                                                    price = priceInput.data('numeric-value');
                                                } else {
                                                    let priceValue = priceInput.val() || '0';
                                                    priceValue = priceValue.replace(/\./g, '').replace(',', '.');
                                                    price = parseFloat(priceValue) || 0;
                                                }

                                                // Obtener los valores de ingresos y beneficios
                                                let revenueValue = $('input[name="monthly_revenue"]').data('numeric-value');
                                                if (revenueValue === undefined) {
                                                    let revStr = $('input[name="monthly_revenue"]').val() || '0';
                                                    revStr = revStr.replace(/\./g, '').replace(',', '.');
                                                    revenueValue = parseFloat(revStr) || 0;
                                                }

                                                let profitValue = $('input[name="monthly_profit"]').data('numeric-value');
                                                if (profitValue === undefined) {
                                                    let profitStr = $('input[name="monthly_profit"]').val() || '0';
                                                    profitStr = profitStr.replace(/\./g, '').replace(',', '.');
                                                    profitValue = parseFloat(profitStr) || 0;
                                                }

                                                const revenue = revenueValue;
                                                const profit = profitValue;

                                                // Calcular solo si todos los valores son válidos
                                                if (price > 0 && revenue > 0 && profit > 0) {
                                                    // Calcular múltiplos
                                                    const revenueMultiple = (price / revenue).toFixed(2);
                                                    const profitMultiple = (price / profit).toFixed(2);
                                                    const roiMonths = Math.round(price / revenue);

                                                    // Asignar valores directamente
                                                    $('input[name="revenue_multiple"]').val(revenueMultiple + 'x');
                                                    $('input[name="profit_multiple"]').val(profitMultiple + 'x');
                                                    $('input[name="investment_return"]').val(roiMonths);
                                                }
                                            }, 100); // Pequeño retraso para asegurar que el DOM esté listo
                                        }
                                    },

                                    saveDraft: function() {
                                        // Crear FormData con todos los campos del formulario
                                        const formData = new FormData($('#listingForm')[0]);
                                        formData.append('status', 'draft');
                                        formData.append('current_step', this.currentStep);

                                        // Verificar si hay imágenes seleccionadas
                                        const imageInput = document.getElementById('assetImages');
                                        const hasImages = imageInput && imageInput.files && imageInput.files.length > 0;

                                        // Registrar información de imágenes para depuración
                                        if (hasImages) {
                                            const imageFiles = Array.from(imageInput.files);
                                            console.log('Imágenes seleccionadas para borrador:', imageFiles.length);
                                            console.log('Detalles de imágenes:', imageFiles.map(f => ({
                                                name: f.name,
                                                size: f.size,
                                                type: f.type
                                            })));
                                        } else {
                                            console.log('No hay imágenes seleccionadas para el borrador');
                                        }

                                        // Eliminar archivos vacíos de otros campos, pero mantener las imágenes
                                        if (formData.has('employee_contracts[]') && (!formData.get('employee_contracts[]') || formData.get('employee_contracts[]').size === 0)) {
                                            formData.delete('employee_contracts[]');
                                        }
                                        if (formData.has('payroll_docs[]') && (!formData.get('payroll_docs[]') || formData.get('payroll_docs[]').size === 0)) {
                                            formData.delete('payroll_docs[]');
                                        }

                                        // Verificar que las imágenes estén en el FormData
                                        const formDataHasImages = formData.getAll('asset_images[]').length > 0;
                                        console.log('FormData contiene imágenes para borrador:', formDataHasImages ? 'Sí' : 'No');

                                        $.ajax({
                                            url: '/wp-content/themes/blocksy-child/trestiq-auth/dashboard/listings/listing-handler.php',
                                            type: 'POST',
                                            data: formData,
                                            processData: false,
                                            contentType: false,
                                            beforeSend: function() {
                                                Swal.fire({
                                                    title: 'Guardando borrador...',
                                                    text: 'Por favor espere',
                                                    allowOutsideClick: false,
                                                    didOpen: () => Swal.showLoading()
                                                });
                                            },
                                            success: function(response) {
                                                if (response.success) {
                                                    Swal.fire({
                                                        icon: 'success',
                                                        title: '¡Éxito!',
                                                        text: 'Borrador guardado correctamente. Podrás continuar desde este punto más tarde.',
                                                        timer: 2000
                                                    });
                                                } else {
                                                    Swal.fire({
                                                        icon: 'error',
                                                        title: 'Error',
                                                        text: response.message || 'Error al guardar el borrador'
                                                    });
                                                }
                                            },
                                            error: function(xhr, status, error) {
                                                console.error('Error:', error);
                                                Swal.fire({
                                                    icon: 'error',
                                                    title: 'Error',
                                                    text: 'Error al guardar el borrador. Por favor intenta nuevamente.'
                                                });
                                            }
                                        });
                                    },

                                    submitForm: function() {
                                        if (this.validateCurrentStep()) {
                                            // Verificar si hay imágenes seleccionadas
                                            const imageInput = document.getElementById('assetImages');
                                            const hasImages = imageInput && imageInput.files && imageInput.files.length > 0;

                                            // Validar imágenes si estamos en el paso 4
                                            if (this.currentStep === 4 && !hasImages) {
                                                Swal.fire({
                                                    icon: 'warning',
                                                    title: 'Imágenes requeridas',
                                                    text: 'Por favor, selecciona al menos una imagen para tu anuncio.'
                                                });
                                                $('#uploadStatus').html('<div class="alert alert-warning">Debes seleccionar al menos una imagen para tu anuncio.</div>');
                                                return false;
                                            }

                                            // Crear FormData con todos los campos del formulario
                                            const formData = new FormData($('#listingForm')[0]);
                                            formData.append('status', 'active');

                                            // Registrar información de imágenes para depuración
                                            if (hasImages) {
                                                const imageFiles = Array.from(imageInput.files);
                                                console.log('Imágenes seleccionadas para envío:', imageFiles.length);
                                                console.log('Detalles de imágenes:', imageFiles.map(f => ({
                                                    name: f.name,
                                                    size: f.size,
                                                    type: f.type,
                                                    lastModified: new Date(f.lastModified).toISOString()
                                                })));
                                            } else {
                                                console.log('No hay imágenes seleccionadas');
                                            }

                                            // Verificar que las imágenes estén en el FormData
                                            const formDataHasImages = formData.getAll('asset_images[]').length > 0;
                                            console.log('FormData contiene imágenes:', formDataHasImages ? 'Sí' : 'No');

                                            // Registrar todos los campos del FormData para depuración
                                            const formDataEntries = {};
                                            for (let [key, value] of formData.entries()) {
                                                if (key === 'asset_images[]') {
                                                    if (!formDataEntries[key]) formDataEntries[key] = [];
                                                    formDataEntries[key].push(value.name);
                                                } else {
                                                    formDataEntries[key] = value;
                                                }
                                            }
                                            console.log('Form data:', formDataEntries);
                                            $.ajax({
                                                url: '/wp-content/themes/blocksy-child/trestiq-auth/dashboard/listings/listing-handler.php',
                                                type: 'POST',
                                                data: formData,
                                                processData: false,
                                                contentType: false,
                                                beforeSend: function() {
                                                    Swal.fire({
                                                        title: 'Publicando anuncio...',
                                                        text: 'Por favor espere',
                                                        allowOutsideClick: false,
                                                        didOpen: () => Swal.showLoading()
                                                    });
                                                },
                                                success: function(response) {
                                                    if (response.success) {
                                                        this.resetForm();
                                                        sessionStorage.setItem('formSubmitted', 'true');

                                                        Swal.fire({
                                                            icon: 'success',
                                                            title: '¡Éxito!',
                                                            text: 'Anuncio publicado correctamente',
                                                            timer: 1500,
                                                            showConfirmButton: false
                                                        }).then(function() {
                                                            window.location.href = response.redirect_url;
                                                        });
                                                    } else {
                                                        // Preparar mensaje de error más detallado
                                                        let errorMessage = response.message || 'Error al publicar el anuncio';
                                                        let errorDetails = '';

                                                        // Si hay errores específicos, mostrarlos
                                                        if (response.errors) {
                                                            for (const category in response.errors) {
                                                                if (Array.isArray(response.errors[category])) {
                                                                    errorDetails += response.errors[category].join('\n') + '\n';
                                                                }
                                                            }
                                                        }

                                                        Swal.fire({
                                                            icon: 'error',
                                                            title: 'Error',
                                                            text: errorDetails || errorMessage,
                                                            footer: errorDetails ? errorMessage : ''
                                                        });

                                                        // Resaltar campos con errores si es posible
                                                        if (response.errors) {
                                                            for (const fieldName in response.errors) {
                                                                if (fieldName !== 'general') {
                                                                    const field = $(`[name="${fieldName}"]`);
                                                                    if (field.length) {
                                                                        field.addClass('is-invalid');
                                                                        field.after(`<div class="invalid-feedback">${response.errors[fieldName].join('\n')}</div>`);
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }.bind(this),
                                                error: function(xhr, status, error) {
                                                    console.error('Error:', error);
                                                    console.log('Respuesta completa:', xhr.responseText);

                                                    // Intentar parsear la respuesta JSON
                                                    let errorMessage = 'Error de conexión';
                                                    try {
                                                        const response = JSON.parse(xhr.responseText);

                                                        // Si hay errores específicos, mostrarlos
                                                        if (response.errors && response.errors.general) {
                                                            errorMessage = response.errors.general.join('\n');
                                                        } else if (response.message) {
                                                            errorMessage = response.message;
                                                        }
                                                    } catch (e) {
                                                        // Si no se puede parsear, usar el mensaje de error genérico
                                                        errorMessage += ': ' + error;
                                                    }

                                                    Swal.fire({
                                                        icon: 'error',
                                                        title: 'Error al crear el anuncio',
                                                        text: errorMessage
                                                    });
                                                }
                                            });
                                        }
                                    },

                                    updateDateValidation: function() {
                                        // Remover mensajes previos
                                        $('.feedback-message').remove();
                                        
                                        var dateInput = $('#fechaInput');
                                        var selectedDate = new Date(dateInput.val());
                                        var today = new Date();
                                        today.setHours(0, 0, 0, 0);

                                        // Si el campo está vacío, mostrar error
                                        if (!dateInput.val()) {
                                            dateInput.removeClass('is-valid').addClass('is-invalid');
                                            dateInput.closest('.input-group').after('<div class="feedback-message invalid-feedback">Debe ingresar una fecha válida</div>');
                                            return false;
                                        }

                                        // Si la fecha es futura, mostrar error
                                        if (selectedDate > today) {
                                            dateInput.removeClass('is-valid').addClass('is-invalid');
                                            dateInput.closest('.input-group').after('<div class="feedback-message invalid-feedback">La fecha no puede ser futura</div>');
                                            return false;
                                        }

                                        // Si la fecha es válida
                                        dateInput.removeClass('is-invalid').addClass('is-valid');
                                        return true;
                                    },

                                    setupDateValidation: function() {
                                        var self = this;
                                        
                                        // Validar al cargar la página si hay una fecha
                                        if ($('#fechaInput').val()) {
                                            self.updateDateValidation();
                                        }

                                        // Validar en tiempo real al cambiar la fecha
                                        $('#fechaInput').on('change input', function() {
                                            self.updateDateValidation();
                                        });
                                    }
                                };

                                // Inicialización cuando el documento está listo
                                $(document).ready(function() {
                                    TrestiqFormSteps.init();
                                });


                            </script>
</body>
</html>