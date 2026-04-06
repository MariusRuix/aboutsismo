# About Sismo

Este es un sistema de gestión de contenidos (CMS) diseñado para la publicación de información relacionada con el fenómeno sísmico ("About Sismo"). Construido sobre el framework Laravel, el proyecto permite la gestión dinámica de artículos de noticias, categorías y páginas estáticas.

## 🚀 Stack Tecnológico

*   **Backend:** [Laravel 5.5](https://laravel.com/) (PHP)
*   **Frontend:** [Vue.js 2.x](https://vuejs.org/), [Bootstrap 4](https://getbootstrap.com/), jQuery
*   **Gestión de Medios:** [Spatie Laravel MediaLibrary](https://spatie.be/docs/laravel-medialibrary)
*   **Otras Herramientas:** Laravel Mix, Cross-env, SweetAlert, Font Awesome 4.7

## 🛠 Características Principales

*   **Panel de Control (Dashboard):** Un área administrativa completa para gestionar el contenido del sitio.
*   **Gestión de Artículos y Videos:** CRUD (Crear, Leer, Actualizar, Borrar) para noticias y multimedia categorizada.
*   **Páginas Dinámicas:** Administración de páginas institucionales o informativas (Edición y actualización).
*   **Sistema de Usuarios:** Gestión de perfiles y permisos para administradores, incluyendo funciones de restauración de usuarios eliminados.
*   **Integración Multimedia:** Soporte robusto para la carga y gestión de imágenes y archivos a través de una API interna.
*   **Sección Pública:** Interfaz optimizada para el consumo de noticias y navegación por categorías.
*   **Seguridad y Sesiones:** Sistema de login completo con recuperación y configuración de contraseñas seguras.

## ⚙️ Instalación y Configuración

Siga los pasos estándar para un proyecto Laravel:

1.  **Clonar el repositorio.**
2.  **Instalar dependencias de PHP:**
    ```bash
    composer install
    ```
3.  **Instalar dependencias de JS:**
    ```bash
    npm install
    ```
4.  **Configurar el entorno:**
    Copie el archivo `.env.example` a `.env` y configure sus credenciales de base de datos.
    ```bash
    cp .env.example .env
    ```
5.  **Generar la clave de la aplicación:**
    ```bash
    php artisan key:generate
    ```
6.  **Ejecutar migraciones y seeders:**
    ```bash
    php artisan migrate --seed
    ```
7.  **Compilar activos frontend:**
    ```bash
    npm run dev
    ```

---
*Desarrollado con Laravel - Estructura basada en controladores especializados y repositorios de modelos.*
