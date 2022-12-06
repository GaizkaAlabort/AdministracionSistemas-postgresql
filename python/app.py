import datetime
import psycopg2
import random

tiempo = datetime.datetime.now()
print(tiempo)

numero = random.randint(0,100)
print(numero)

try:
    conn = psycopg2.connect(host='servidor-db', port="5432", database='accesos',
                            user='root',password='root')
except Exception as e:
    print(e)
    exit(0)

cursor= conn.cursor()

query = "INSERT INTO entradas (id, fecha, nombre) VALUES (%s,%s,%s)"
record_to_insert= (numero, tiempo, 'usuario')
cursor.execute(query,record_to_insert)

conn.commit()
count = cursor.rowcount
print(count, "Insertado")

conn.close()

