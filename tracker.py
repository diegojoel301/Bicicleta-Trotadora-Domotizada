# Needed modules will be imported and configured
import RPi.GPIO as GPIO
import time
import os
import json

GPIO.setmode(GPIO.BCM)

# Declaration of the input pin which is connected with the sensor
GPIO_PIN = 12
GPIO.setup(GPIO_PIN, GPIO.IN, pull_up_down = GPIO.PUD_UP)

# Break between the results will be defined here (in seconds)
delayTime = 1

print("#--- Hackster project line tracker exemple ---#")

cantidad_pasos = 0

c = 0

estado = "MODO TROTE"

# main loop
try:
        while True:
            #dic = {"nro_pasos": cantidad_pasos, "status": estado}
            if GPIO.input(GPIO_PIN) == False:
                cantidad_pasos += 1
                print(cantidad_pasos)
                c = 0
            """
            else:
                c += 1
                if c == 10:
                    estado = "REINICIO"
                    c = 0
                    cantidad_pasos = 0
            """
            # Reset + Delay
            time.sleep(delayTime)
            """
            dic = {"nro_pasos": cantidad_pasos, "status": estado}
            json_object = json.dumps(dic, indent = 4)
            json_object = json_object.replace('\n', ' ')
            json_object = "data='[" + json_object + "]';"
            #print(json_object)
            with open("data.json", "w") as outfile:
                 outfile.write(json_object)
            """

# Scavenging work after the end of the program
except KeyboardInterrupt:
        GPIO.cleanup()
