#🎯Tema Gemma (en desarrollo)

Práctica de la Semana 3 de DAW.

## 🎯 Objetivo

Crear una plantilla de WordPress desde cero.

## 🚧 Progreso actual

- [x] Maquetación inicial en HTML con Bootstrap
- [x] Estilos personalizados en `style.css`
- [x] Estructura de carpetas con imágenes, CSS y JS
- [ ] Separación del código en archivos `header.php`, `footer.php`, `index.php`
- [ ] Registro de menús y sidebar en `functions.php`
- [ ] Páginas específicas: `front-page.php`, `home.php`, `page-contacto.php`
- [ ] PDF con capturas y descripción

## 📂 Cambios recientes

- Archivos `index.html` y `style.css` fueron movidos a la carpeta `TemaGemma-1`
- Se han corregido rutas de Bootstrap y enlaces a los estilos
- Preparado para dividir en archivos WordPress (`header.php`, `footer.php`, etc.)

### 🗄Nuevos archivos generados: page.html y single.html
A partir de la estructura base definida en index.html, he generado dos nuevos archivos: page.html y single.html.

📄 **page.html**
Este archivo representa la estructura de una página estática, como la sección de "Contacto", "Quién soy", "Servicios", etc. Se ha extraído desde index.html toda la parte común del diseño (header, footer, contenedor principal) y se ha adaptado para mostrar contenido tipo "landing page".

⚙️ En el futuro se convertirá en la plantilla de WordPress: page.php o page-contacto.php.

📰 **single.html**
Este archivo se ha generado para simular la visualización de una entrada individual de blog. single.html contiene el contenido completo de un solo artículo (título, cuerpo, imagen, fecha, etc.). He añadido una barra lateral (sidebar) en el lado derecho, que simulan entradas relacionadas.

⚙️ En WordPress se convertirá en single.php, la plantilla que carga al abrir un post específico.

## 📦 Instalación de WordPress y creación del tema Momentum
Instalación de WordPress de forma local con XAMPP y creación de la base de datos

---

### 🔧 Paso 1: Instalación local de WordPress

- Se ha descargado la última versión de WordPress desde wordpress.org.
- Se ha descomprimido y colocado en el directorio local de XAMPP:
  ```
  C:\xampp\htdocs\tema-gemma\
  ```

### 🗄 Paso 2: Creación de la base de datos

- Desde **phpMyAdmin** (http://localhost/phpmyadmin), se ha creado una nueva base de datos llamada:
  ```
  bd_gemma
  ```
- En la instalación de WordPress, se han introducido los siguientes datos:
  - Usuario: `root`
  - Contraseña: *(vacía)*
  - Servidor de base de datos: `localhost`
  - Prefijo de tabla: `wp_`

### 🌐 Paso 3: Instalación de WordPress vía navegador

- Se ha accedido a la URL:
  ```
  http://localhost/tema-gemma
  ```
- Se ha completado el asistente de instalación introduciendo:
  - Título del sitio: Crecimiento Personal
  - Usuario y contraseña de administración
  - Correo electrónico : mi correo habitual
  - Opción desmarcada para visibilidad en motores de búsqueda

![Pantalla de confirmación correcta en la instalación de WordPress desde el navegador.](ImagenesReadme/InstalacionWordpressNavegador.jpg)
---

### 📁 Paso 4: Creación del tema personalizado "Momentum"

- Dentro del directorio de WordPress, se ha creado la carpeta:
  ```
  C:\xampp\htdocs\tema-gemma\wp-content\themes\Momentum
  ```
- **Estructura copiada:**

- 📁 `css/`
- 📁 `images/`
- 📁 `js/`
- 📄 `index.html`
- 📄 `page.html`
- 📄 `single.html`
- 📄 `style.css`

---

### 🔨 Conversión de HTML a archivos de tema WordPress

- Se ha abierto `index.html` en Visual Studio Code y se ha guardado como `index.php`
- Este archivo ahora sirve como base principal del tema
- Se han copiado también los archivos `page.html` y `single.html` como referencia para futuras plantillas (`page.php` y `single.php`)

---

### ✔ Configuración del archivo `style.css`

- Se han añadido los metadatos oficiales del tema siguiendo la documentación de WordPress:

![Captura de la documentación oficial de WordPress](ImagenesReadme/configurar-style-css.jpg)


---

### ✅ Activación del tema en WordPress

- Una vez añadidos los metadatos, WordPress ha detectado el tema correctamente en el panel:
  ```
  Apariencia > Temas > Activar
  ```
- El tema ha sido activado correctamente
![El tema Momentum aparece en WordPress como tema disponible para activar](ImagenesReadme/mitemaenwordpress.jpg)
![Detalles del tema definidas en el archivo style.css.](ImagenesReadme/Detalledeltema.jpg)

- En este punto, WordPress reconoce únicamente el archivo `index.php` y lo interpreta como HTML básico

## 🔧 Desarrollo del tema: encabezado y carga de estilos

Después de instalar WordPress y activar el tema **Momentum**, observé que **los estilos no se cargaban correctamente** y la página se veía sin formato:

![Captura del tema instalado sin estilos](ImagenesReadme/temainstalado1.jpg)

---
- **Aún no se aplican los estilos del archivo `style.css`**


### 🎨 Carga temporal de estilos personalizados

- De forma provisional, los estilos propios (`style.css`) se han incrustado directamente en el `<head>` mediante etiquetas `<style></style>`.


### 🧠 Uso de template tags y carga de estilos

- Para apuntar correctamente a los archivos CSS dentro del tema, se ha usado la función de WordPress:

```php
<?php bloginfo('template_url'); ?>
```

Ejemplo en el `header.php`:

```html
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
```
![Captura mostrando los estilos aplicados](ImagenesReadme/estilosEncontrados.jpg)

---

### 📁 Creación del archivo `header.php`

- Se ha generado el archivo `header.php` y se ha movido el código del encabezado desde `index.php`.
- En su lugar, en `index.php` se ha insertado el template tag de WordPress:

```php
<?php get_header(); ?>
```

Esto permite a WordPress reutilizar el mismo encabezado en todas las plantillas.

---

### 🖼️ Añadido `screenshot.png`

- Se ha creado una imagen `screenshot.png` de tamaño **1200x900px**, requisito visual para que WordPress reconozca correctamente el tema en el panel.

---

### 🍔 Transformación del menú en WordPress

Se ha convertido el menú estático HTML en un menú dinámico editable desde el panel de WordPress, usando `wp_nav_menu()` en `header.php`.

#### 📄 HTML original:

```html
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto text-center">
        <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">link1</a></li>
        <li class="nav-item"><a class="nav-link" href="#">link2</a></li>
        <li class="nav-item"><a class="nav-link" href="#">link3</a></li>
    </ul>
</div>
```

#### ⚙️ Código WordPress con `wp_nav_menu()`:

```php
<?php 
    wp_nav_menu(
        array(
            'theme_location' => '', // Aquí se define la ubicación registrada en functions.php
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'navbarSupportedContent',
            'items_wrap'=>'<ul class="navbar-nav ms-auto text-center">%3$s</ul>',
            'menu_class' => 'nav-item'
        )
    );
?>
```

