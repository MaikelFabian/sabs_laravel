# 📦 **Proyecto Laravel con Autenticación JWT**

Este proyecto implementa autenticación basada en tokens JWT usando [tymon/jwt-auth](https://github.com/tymondesigns/jwt-auth).\
Incluye un usuario administrador inicial que permite generar el primer token y registrar nuevos usuarios.

---

## ✅ **Requisitos previos**

- PHP >= 8.x
- Composer
- MySQL o MariaDB
- (Opcional) Postman para probar la API

---

## ⚙️ **Instalación y configuración**

### 1️⃣ Clona el repositorio

```bash
git clone https://github.com/tu_usuario/tu_repositorio.git
cd tu_repositorio
```

---

### 2️⃣ Instala las dependencias PHP

```bash
composer install
```

Esto descargará y creará la carpeta `vendor/` (similar a `node_modules` en Node.js) que necesita Laravel.

---

### 3️⃣ Copia el archivo de entorno `.env`

```bash
cp .env.example .env
```

---

### 4️⃣ Configura tu base de datos en el archivo `.env`

Abre `.env` y ajusta estas líneas:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_tu_base
DB_USERNAME=usuario
DB_PASSWORD=contraseña
```

---

### 5️⃣ Genera claves necesarias

Primero, la clave de la aplicación:

```bash
php artisan key:generate
```

Y luego, la clave JWT:

```bash
php artisan jwt:secret
```

Esto agregará `JWT_SECRET` al archivo `.env`, que es necesario para generar y validar tokens.

---

### 6️⃣ Ejecuta migraciones y seeders

```bash
php artisan migrate --seed
```

- Las **migraciones** crean las tablas necesarias en la base de datos.
- Los **seeders** insertan un usuario administrador inicial para que puedas obtener el primer token.

---

## 👤 **Usuario administrador inicial**

| Campo      | Valor                                          |
| ---------- | ---------------------------------------------- |
| Correo     | [admin@dominio.com](mailto\:admin@dominio.com) |
| Contraseña | admin123                                       |

Usa este usuario para iniciar sesión, obtener un token y empezar a registrar o consultar usuarios protegidos.

---

## 🧪 **Prueba de login (ejemplo con Postman)**

- **Endpoint:** `POST /api/login`
- **Body (JSON):**

```json
{
  "correo": "carlos@dominio.com",
  "password": "carlos1234"
}
```

- **Respuesta esperada:**

```json
{
  "success": true,
  "message": "Usuario autenticado correctamente",
  "data": {
    "token_type": "bearer",
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJ...",
    "expires_in": 93600
  }
}
```

---

## 🔐 **Usar el token en rutas protegidas**

En Postman o tu cliente HTTP:

- Ve a la pestaña **Authorization**
- Tipo: `Bearer Token`
- Pega el valor de `access_token` que recibiste

O, directamente en el header:

```
Authorization: Bearer TU_TOKEN
```

---

✅ Con esto, ya tienes el proyecto configurado, funcionando y listo para probar.\
Puedes registrar usuarios nuevos, consultar datos protegidos, etc.

---

> 🛠 Si quieres, puedo añadir después pasos extra como:
>
> - Proteger rutas con `auth:api`
> - Crear más usuarios
> - Configurar roles o permisos
>
> 🚀 Solo dímelo y lo añado.

