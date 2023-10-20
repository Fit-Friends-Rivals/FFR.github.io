# Es necesario tener esta libreria
# pip install mysql-connector-python

# El codigo sirve para conectarse a la base de datos y agregar o modificar las tablas.

import mysql.connector

# Configura la conexión a la base de datos
conexion = mysql.connector.connect(
    host="tu_host",
    user="tu_usuario",
    password="tu_contraseña",
    database="tu_base_de_datos"
)

# Crea un objeto cursor para ejecutar comandos SQL
cursor = conexion.cursor()

# Comando SQL para crear una tabla de usuarios
crear_tabla_sql = """
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
)
"""

# Ejecuta el comando SQL para crear la tabla
cursor.execute(crear_tabla_sql)

# Confirma los cambios en la base de datos
conexion.commit()

# Cierra la conexión y el cursor
cursor.close()
conexion.close()

