#!/usr/bin/env python

import os
import time
import datetime
import glob
import MySQLdb
from time import strftime
import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BCM)

# Declaration of the input pin which is connected with the sensor
GPIO_PIN = 12
GPIO.setup(GPIO_PIN, GPIO.IN, pull_up_down = GPIO.PUD_UP)

def dateTime(): #get UNIX time
        secs = float(time.time())
        secs = secs*1000
        return secs
def sensorRead(x):
        try:
                if not GPIO.input(GPIO_PIN):
                          return x + 1
        except KeyboardInterrupt:
                GPIO.cleanup()
        return x

db = MySQLdb.connect(host = "localhost", user = "user_sensor", passwd = "user_pass_301", db = "sensor")
cur = db.cursor()

delayTime = 0.2

while(True):
    secs = dateTime()
    #read = sensorRead(1)

    query = "select * from tsensor ORDER BY id DESC LIMIT 1"

    cur.execute(query)

    myresult = cur.fetchall()

    #print(myresult[0][2])

    read = sensorRead(myresult[0][2])

    sql = ("""INSERT INTO tsensor (datetime, cantidad_pasos) VALUES (%s,%s)""", (secs, read))

    try:
        #print("Writing to the database...")
        cur.execute(*sql)
        db.commit()
        #print("Write complete")

    except:
        db.rollback()
        #print("We have a problem")
    time.sleep(delayTime)
cur.close()
db.close()
