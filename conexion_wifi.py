from machine import Pin
import network
import time

# FUNCIÓN PARA ESTABLECER LA CONEXIÓN WIFI (STATION)
SSID = 'Laboratorio 01'
PASSWORD = 'informaticaINF541'
red = network.WLAN(network.STA_IF)
red.active(True)
red.connect(SSID,PASSWORD)
while not red.isconnected():
  print("conectando")
  time.sleep(1)


print('Conexión correcta')
print(red.ifconfig())